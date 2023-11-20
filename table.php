<?php
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
    echo "sonething is wrrong";
}
if ($conn) {
    echo "server is connected";
}
$sql = "SELECT * FROM `formcse309` ";
try {
    $result = mysqli_query($conn, $sql);
    echo "<div> Data is  register</div>";
} catch (mysqli_sql_exception) {
    echo " Data is not register";
};
mysqli_close($conn);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body>
    <!-- <div class="w-100 h-[50vh] flex justify-center ">
        <table class="table-auto border">
            <thead>
                <tr class="border">
                    <th class="border">fname</th>
                    <th class="border">Lname</th>
                    <th class="border">pass</th>
                    <th class="border">zip</th>
                    <th class="border">city</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border">
                    <td class="border"></td>
                    <td class="border">
                    <td>
                    <td class="border"></td>
                    <td class="border"></td>
                    <td class="border"></td>
                </tr>

            </tbody>
        </table>
    </div> -->
    <div class="w-50 text-xl ">

    <?php

    while ($row = $result->fetch_assoc()) {
        echo $row['fname'];
        echo $row['lname'];
        echo $row['zip'];
        echo $row['city'];
        echo "<br>";
    }

    ?>
    </div>
</body>

</html>