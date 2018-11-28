<html>
<head>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>

 <table>
 <tr>
  <th>Code</th> 
  <th>Offence</th> 
  <th>Points</th>
 </tr>



<?php
$con=mysqli_connect("localhost","PandemicSpark25","AARONBOSS+++","login");
if(!$con)
{
    echo'not connected to server';
}




$code=$_POST['code'];
$offence=$_POST['offence'];
$points=$_POST['points'];


$sql="INSERT INTO offence(Code,Offence,Points) 
VALUES($code,$offence,$points)";

if (!mysqli_query($con,$sql))
{
echo 'not inserted';
}
else 
{
    echo'inserted';
    echo"<br>";
    echo "\n<a href='addinfo.php'>click</a> here to insert again";
    echo"<br>";
    echo "\n<a href='mainpage.php'>click</a> here to return to main page";}

?>
<?php
 //table part
 $sqll="SELECT *FROM offence";
 $resul = $con->query($sqll);
 //if ($result->num_rows > 0) {
  // output data of each row
  while($row=$resul->fetch_assoc())
   {
   echo "<tr><td>" . $row["Code"]. "</td><td>" . $row["Offence"] . "</td><td>"
. $row["Points"]. "</td></tr>";
}
echo "</table>";
echo "\n<a href='mainpage.php'>click</a> here to return to main page";

 //}//else {echo"0 results";}
//end of table part */
?>
</table>
</body>

</html>