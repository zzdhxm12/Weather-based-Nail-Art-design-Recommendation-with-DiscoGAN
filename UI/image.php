<?php
header("Content-Type: application/json");
$forecast=$_GET['weather'];
$nimages="";

$connect=mysqli_connect("localhost","root","titzns2917","images");
if(strpos($forecast,'Clear')!==false){
  $query= "SELECT * FROM images WHERE forecast='Clear' ORDER BY RAND() LIMIT 5";
}
elseif(strpos($forecast,'Clouds')!==false){
  $query= "SELECT * FROM images WHERE forecast='Clouds' ORDER BY RAND() LIMIT 5" ;
}
elseif(strpos($forecast,'Rain')!==false){
  $query= "SELECT * FROM images WHERE forecast='Rain' ORDER BY RAND() LIMIT 5" ;
}
elseif(strpos($forecast,'Thunderstorm')!==false){
  $query= "SELECT * FROM images WHERE forecast='Thunder' ORDER BY RAND() LIMIT 5" ;
}
elseif(strpos($forecast,'Snow')!==false){
  $query= "SELECT * FROM images WHERE forecast='Snow' ORDER BY RAND() LIMIT 5" ;
}
elseif(strpos($forecast,'Haze')!==false){
  $query= "SELECT * FROM images WHERE forecast='Haze' ORDER BY RAND() LIMIT 5" ;
}
else{
  echo "error";
}
$result=$connect->query($query) or die("error");
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    $nimages=$nimages." ".$row['name'];
  }
}
echo $nimages;
mysqli_close($connect);

?>
