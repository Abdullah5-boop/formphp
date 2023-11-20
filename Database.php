<?php


$fname = $_GET["FirstName"];
$lname = $_GET["LastName"];
$password = $_GET["Password"];
$city = $_GET["city"];
$Zip = $_GET["Zip"];

// echo " full name is {$fname} and {$lname}";


$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "formcse309";
$conn = "";
try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name,

    );
} catch (mysqli_sql_exception) {
    // echo"sonething is wrrong";
}
if ($conn) {
    // echo "server is connected";
}

$sql = "INSERT INTO `formcse309`(`fname`, `lname`, `password`, `zip`, `city`) VALUES ('$fname','$lname','$password',$Zip,'$city')";

try {
    mysqli_query($conn, $sql);
    echo "<div> Data is  register</div>";
} catch (mysqli_sql_exception) {
    echo " Data is not register";
}
mysqli_close($conn);
?>