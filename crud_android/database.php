<?php
if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if ($conn) {
        $sql = "DELETE FROM crud_table WHERE id = '. $id'";
        if (mysqli_query($conn, $sql)) {
            echo "Succesfully deleted";
        }
        else echo "Error: ";
    }else echo "Error: ";
}
?>