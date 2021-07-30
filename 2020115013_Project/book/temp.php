<?php
$date = "aug3";
$time = "morn";
$movie = "black";
$conn=new mysqli("localhost","arun","mypasswd","dreamworld");
$new = "create table ".$date.$time.$movie."(seat varchar(128),booked varchar(128),name varchar(128),paid varchar(128))";
$result=$conn->query($new);
for($i=1;$i<=10;$i++)
{
for($j=1;$j<=10;$j++)
{
    $insert = "insert into ".$date.$time.$movie." values('".$i.$j."','not','not','not')";
    $result = $conn->query($insert);
}
}
?>
