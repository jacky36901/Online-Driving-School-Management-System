<?php
session_start();
$login=$_SESSION['login'];
//$type=$_SESSION['type'];
$log=$_SESSION['loginid'];

if($login)
{
    ?>
<?php 
include 'co.php'; 

if(isset($_POST['submit']))
{
  $a=$_POST['name'];
  $b=$_POST['address'];
  $c=$_POST['district'];
  $d=$_POST['street'];
  $e=$_POST['pin'];
  $f=$_POST['mob'];
  $g=$_POST['email'];
 
$sql2="insert into checkout(logid,cname,caddress,cdistrict,cstreet,cpin,cmob,email)values('$log','$a','$b','$c','$d','$e','$f','$g')";
 $ch=mysqli_query($con,$sql2);
$result="";
$maild='arjunedappllil@gmail.com';
require 'phpmailer/PHPMailerAutoload.php'; 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPsecure='tls';
$mail->Username='athiras@mca.ajce.in';//send cheyyunna mail id
$mail->Password='9946060442';//ayinte password

$mail->setFrom($maild);
$mail->addAddress($g);//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='confirmation Mail';//mail subject
$mail->Body='<h1>Hello,you are confirmed</h1>';//body
if(!$mail->send())
{
$result="Something went wrong";
echo $result;

}
else
{
    $result="Mail went successfully";  
    echo $result;
}

if($ch)
{?>
 <script>
 alert("Successfully added");
 window.location='payment/index.php'</script>
	<?php
}

else
{
  echo"error:".$sql2."<br>".mysqli_error($con);
}
}

mysqli_close($con);

?>
<?php
}
else
//header("location:/MAINPROJECT/login.html");
?>



