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


<table>
<tr></tr>
<th>DriverLicensenumber</th>
<th>Lastname</th>
<th>Firstname</th>
<th>Middlename</th>
<th>Gender</th>
<th>DateofBirth</th>
<th>Address</th>
<th>County</th>
</tr>


</head>
<body>
   <form action="delinfo.php" method="post">
   License Number:<input type="text" name="dlnum">
  

   <input type="submit" value="insert">
   </form>
</body>
<?php
$con=mysqli_connect("localhost","PandemicSpark25","AARONBOSS+++","login");
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
echo "\n<a href='mainpage.php'>click</a> here to return to main page";

 //}//else {echo"0 results";}
//end of table part 
    

?>
</html>

