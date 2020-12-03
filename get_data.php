<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>

<?php


if(isset($_POST['fullname'])){
    //---------  DECLARING VARIABLE IN PHP --------
    $fullname = $_POST['fullname'];
    $companyname = $_POST['companyname'];
    $website = $_POST['website'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    //--x------  DECLARING VARIABLE IN PHP -----x--

    //---------  CONNECTING TO CLIENTFORM DATABASE --------
    $conx = mysqli_connect("localhost","root","","clientform");
    //---------  CONNECTING TO CLIENTFORM DATABASE --------
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
//---------  INSERT INTO CLIENTFORM DATABASE --------
    $sql = "INSERT INTO `clientintakeform` (`FullName`, `CompanyName`, `website`, `address`, `state`, `country`, `city`, `postalCode`, `Id`) VALUES ('$fullname', '$companyname', '$website', '$address', '$state', '$country', '$city', '$postalcode', NULL)";
//--x------  INSERT INTO CLIENTFORM DATABASE -----x--

//---------  DATABASE RESULT --------
    $result = mysqli_query($conx,$sql);
//--x------  DATABASE RESULT -----x--

    if($result == true){
        echo "<h3>
         Successfully Registered. 
         </h3>";
    }

    mysqli_select_db($conx,"ajax_demo");
$sql2="SELECT * FROM clientintakeform";
$result2 = mysqli_query($conx,$sql2);

echo "<div style='overflow-x: auto;'>   <table> <tr>
<th>Id</th>
<th>FullName</th>
<th>CompanyName</th>
<th>Website</th>
<th>Address</th>
<th>State</th>
<th>Country</th>
<th>City</th>
<th>Postal Code</th>
</tr>";
while($row = mysqli_fetch_array($result2)) {
  echo "<tr>";
  echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['FullName'] . "</td>";
  echo "<td>" . $row['CompanyName'] . "</td>";
  echo "<td>" . $row['website'] . "</td>"; 
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['country'] . "</td>"; 
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['postalCode'] . "</td>";
  echo "</tr>";
}
echo "</table> </div>";
}
?>