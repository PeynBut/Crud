<?php
if (!empty($_POST['data'])) {
    $data = $_POST['data'];
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if($conn){
        $sql = "insert into crud_table (data) VALUES ('$data')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        }
        else echo "Error: ";
    } else echo "Connection error";
}
?>