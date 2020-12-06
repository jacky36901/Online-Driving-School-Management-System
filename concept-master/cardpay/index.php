<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
include("connection.php");
$user=$_SESSION['sess'];
$sql2="select * from bank where status!=8";
$id=$_GET['b'];
$course=$_GET['c'];
$exe=mysqli_query($con,$sql2);
$sql=mysqli_query($con,"select * from fee where username='$id'");
$exe34=mysqli_fetch_array($sql);
$amount=$exe34[$course];

if(isset($_POST['submit']))
{
    $card=$_POST['cardno'];
    $exp=$_POST['mm']."/".$_POST['yy'];
    $cvv=$_POST['cvv'];
    $holder=$_POST['cardholder'];
    $sql3="insert into bank(user_name,cardholder,cardno,cvv,expiry,status) values ('$user','$holder','$card','$cvv','$exp', '1')";
    $check=mysqli_query($con,$sql3);
    
    if(!$check)
    {
        echo(mysqli_error($con));
        $check_user=mysqli_num_rows(mysqli_query($con,"select * from bank where username='$id'"));
if($check_user>0){
     echo "<script>";
        echo "alert('You Have Already Paid Your Fees')";
        echo "</script>";
 ?>
<script> alert("Payment failed");
</script>
<?php
    }
else
{
    ?>
<script>
    alert("Payment completed");
</script>
<?php
    
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Credit Card Payment Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
<script src="js/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> 
$(document).ready(function(){
  $("#button").click(function(){
    $("#div").fadeOut();
  $("#div").fadeOut("slow");
  $("#div").fadeOut(3000);
  });
});
</script> 
-->
</head>
<body>

<div class="container">

<div class="page-header">
   <center><h1><b>DriveOn</b></h1></center> 
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="cardno" onblur="check()" placeholder=" Card Number" name="cardno" required/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                        
                                    </div>
                                    <center><p id="c" style="color:red"></p></center>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>AMOUNT</label>
                                    <input type="text" name="amount" class="form-control" value="<?php echo $amount; ?>" readonly/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                   <br><label><span class="hidden-xs"><select name="mm" class="form-control" required>
                                    <option value="">mm</option>
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                        </select></span></label> 
                                   <label><span class="hidden-xs"><select name="yy" class="form-control" required>
                                    <option>yy</option>
                                    <?php   
                                       $year = date("Y");
                                       $year2=$year+20;
                                       for($i=1990;$i<=$year2;$i++){
                                            echo '<option value="'.$i.'"';
                                            if( $i ==  $year ) {
                                            echo ' selected="selected"';
                                            }
                                            echo ' >'.$i.'</option>';
                                      
                                       }
                                       ?>
    
                                        </select></span></label> 
                              </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CVV/CVC</label>
                                    <input type="password" name="cvv" id="cvv" class="form-control" placeholder="***" required>
                                      
                                        
                                </div>
                                  <center><p id="d" style="color:red"></p></center>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>NAME ON CARD</label>
                                    <input type="text" name="cardholder" id="cardholder" class="form-control" placeholder="Card Owner Name" required />
                                    <script>
                                    $("#cardholder").on("blur", function() {
                                    if ( $(this).val() !=0 ) {
                                    if($(this).val().match('^[a-zA-Z][a-zA-Z]{1,20}')){
                                    $('#e').hide();
                                    }else
                                    {
                                    $('#e').show();
                                    $('#e').css('background-color', '#FFFFDF');
                                    $('#e').text("* invalid name *");
                                    $("#cardholder").val('');       
                                    }
                                    } else {
                                    $('#e').show();
                                    $('#e').text("* Please fill the field *");
                                    }
                                    });
                                    </script> 
                                </div>
                                  <center><p id="e" style="color:red"></p></center>
                               
                            </div>
                        </div>
                          <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-14">
                            <input type="submit" name="submit" id="button" value="PAY NOW" class="btn btn-warning btn-lg btn-block">
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>