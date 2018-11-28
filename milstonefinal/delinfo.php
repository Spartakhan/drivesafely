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
$dlnum=$_POST['dlnum'];

$sql="DELETE FROM motorist WHERE DriverLicensenumber=$dlnum ";
if (!mysqli_query($con,$sql))
{
echo 'not deleted';
}
else 
{
    echo'deleted';
    echo"<br>";
    echo "\n<a href='delpage.php'>click</a> here to delete again";
    echo"<br>";
    echo "\n<a href='delinfo.php'>click</a> here to return to main page";}

?>
<?php

 //table part
 $sqll="SELECT *FROM motorist";
 $resul = $con->query($sqll);
 //if ($result->num_rows > 0) {
  // output data of each row
  while($row=$resul->fetch_assoc())
   {
    echo "<tr><td>" . $row ["DriverLicensenumber"]. "</td><td>". $row["Lastname"]."</td><td>".$row["Firstname"]."</td><td>".$row["Middlename"]."</td><td>".$row["Gender"]."</td><td>".$row["DateofBirth"]."</td><td>".$row["Address"]."</td><td>".$row["County"]."</td></tr>";
}
echo "</table>";


 //}//else {echo"0 results";}
//end of table part 
?>

</table>
</body>

</html>