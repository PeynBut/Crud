<?php
if (!empty($_POST['data']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $data = $_POST['data'];
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if ($conn) {
        $sql = "update crud_table set data = '" . $data . "' where id = " . $id;
        if (mysqli_query($conn, $sql)) {
            echo "success";
        }
        else echo "update operation failed";
    }
}
?>