<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  $sql=mysqli_query($con,"select * from registeration where name like '%$q%' and user_type=1");
    $count=mysqli_num_rows($sql);
    
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($count==0) {
  echo "no suggestion";
} else {
    while($sql2=mysqli_fetch_array($sql)){
        $hint=$sql2['name'];?>
        <a style="color:black; text-decoration:none" id="name" href="#" onclick="getrec('<?php echo $hint; ?>')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $hint; ?></a> <?php echo "<br>";
        
        
    }

}

?>