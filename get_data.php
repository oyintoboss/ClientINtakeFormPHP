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
        echo "<h3> Successfully Registered. </h3>";
    }

}
?>