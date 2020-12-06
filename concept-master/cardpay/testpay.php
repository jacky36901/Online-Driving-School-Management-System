<?php
session_start();
if(!isset($_SESSION['sess']))
{
header("location:../index.php");
}
$user=$_SESSION['sess'];
include("connection.php");

$id=$_GET['b'];
$course=$_GET['c'];
$sql=mysqli_query($con,"select * from fee where school_id='$id'");
$exe34=mysqli_fetch_array($sql);
$amount=$exe34[$course];
$sql2="select * from bank where status!=8";
$exe=mysqli_query($con,$sql2);
if(isset($_POST['submit'])){
    
    $card=$_POST['num'];
    //$amount=$_POST['amount'];
    $exp=$_POST['mm']."/".$_POST['yy'];
    $cvv=$_POST['cvv'];
    $holder=strtoupper($_POST['name']);
    
    $check=mysqli_query($con,"select * from bank where (cardno='$card' and cvv='$cvv') and (expiry='$exp' and status='0') and cardholder='$holder'");
    $no=mysqli_num_rows($check);
    $bank=mysqli_fetch_array($check);
    $mail=$bank['email'];
    if($no!=0){ 
      
$to = "$mail";
$from="admin";
$subject = "Your otp is";
$password=rand();
$message = "Your OTP " . $password;
$headers = "From:  ".$from;        
if(mail($to, $subject, $message, $headers)){
                   $sql5=mysqli_query($con,"update bank set otp='$password' where cardno='$card'"); 
                     $query = array(
                    'b' => $id, 
                    'c' => $bank['bank_id'],
                    'd' => $amount,
                     
                                        );
                    $query = http_build_query($query);
                    header("location:index2.php?".$query);
            }
         else{ ?>
             <div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>   Check internet connectivity.</center>
  </div>
      <?php  }

   }else{ ?>
         <div id=div class="alert alert-danger" style="background-color:#E93535;color:white;font-size:18px">
    <center><strong>Payment Failed! </strong>   Invalid card entry.</center>
  </div>
  <?php  }
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
                                        <input type="number" class="form-control" id="card" onblur="check()" placeholder=" Card Number" name="num" required/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                        
                                        <script>
                                        $("#card").on("blur", function() {

                                        if ( $(this).val() !=0 ) {
                                            if($(this).val().match('^5[1-5][0-9]{14}$')){
                                                $('#c').text("MASTERCARD");
                                                $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else if($(this).val().match('^4[0-9]{12}(?:[0-9]{3})?$')){
                                                $('#c').text("VISA");
                                                    $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else if($(this).val().match('^3[47][0-9]{13}$')){
                                                $('#c').text("EXPRESS");
                                                    $('#c').css('background-color', 'lightgreen');
                                                 $('#c').css('color', 'white');
                                               }else
                                               {
                                                      $('#c').show();
                                                     $('#c').css('background-color', '#FFFFDF');
                                                 $('#c').css('color', 'red');
                                        $('#c').text("* invalid card number *");
                                             $("#card").val('');       
                                   
                                               }
                                       
                                               } else {
                                        $('#c').show();
                                        $('#c').text("* Please fill the field *");
                                   

                                        }
                                        
                                        });
                                        </script> 
<!--
                                        <script>
                                            function check(){
                                                var n=document.getElementById("card").value;
                                                if()
                                                var regVisa = ^4[0-9]{12}(?:[0-9]{3})?$;
                                                var regMaster =^5[1-5][0-9]{14}$;
                                                var regExpress =^3[47][0-9]{13}$;
                                                var regDiners =^3(?:0[0-5]|[68][0-9])[0-9]{11}$;
                                                var regDiscover = ^6(?:011|5[0-9]{2})[0-9]{12}$;
                                                var regJCB =^(?:2131|1800|35\\d{3})\\d{11}$;  
                                            }
                                         
                                        </script>
-->
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
                                      
                                        <script>
                                        $("#cvv").on("blur", function() {

                                        if ( $(this).val() !=0 ) {
                                            if($(this).val().match('^[0-9]{3,3}$')){
                                              $('#d').hide();
                                               }else
                                               {
                                                $('#d').show();
                                                   $('#d').css('background-color', '#FFFFDF');
                                        $('#d').text("* invalid cvv *");
                                             $("#cvv").val('');       
                                               }
                                               } else {
                                        $('#d').show();
                                        $('#d').text("* Please fill the field *");
                                          }
                                        
                                        });
                                        </script> 
                                </div>
                                  <center><p id="d" style="color:red"></p></center>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>NAME ON CARD</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Card Owner Name" required />
                                    <script>
                                    $("#name").on("blur", function() {
                                    if ( $(this).val() !=0 ) {
                                    if($(this).val().match('^[a-zA-Z][a-zA-Z]{1,20}')){
                                    $('#e').hide();
                                    }else
                                    {
                                    $('#e').show();
                                    $('#e').css('background-color', '#FFFFDF');
                                    $('#e').text("* invalid name *");
                                    $("#name").val('');       
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