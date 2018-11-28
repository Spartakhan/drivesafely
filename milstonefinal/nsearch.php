<html>
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

<?php
$connnection=mysqli_connect("localhost","PandemicSpark25","AARONBOSS+++","login");

if (isset($_GET ['keywords'])){


 $keywords=$connnection->escape_string ($_GET ['keywords']);
 
 $sql="
 SELECT DriverLicensenumber,Lastname,Firstname,Middlename,Gender,DateofBirth,Address,County
 FROM motorist
 WHERE Lastname LIKE   '%{$keywords}%'
 OR Firstname LIKE '%{$keywords}%'
 ";


 $resul=$connnection->query($sql);
if ($resul->num_rows > 0){
while ($row=$resul->fetch_assoc()){
echo "<tr><td>" . $row ["DriverLicensenumber"]. "</td><td>". $row["Lastname"]."</td><td>".$row["Firstname"]."</td><td>".$row["Middlename"]."</td><td>".$row["Gender"]."</td><td>".$row["DateofBirth"]."</td><td>".$row["Address"]."</td><td>".$row["County"]."</td></tr>";
}
}
}
 ?>




 


</table>
</html>