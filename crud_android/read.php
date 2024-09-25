<?php
$data = array();
$conn = mysqli_connect("localhost", "root", "", "crud");
if ($conn) {
    $sql = "select * from crud_table where id = '1'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) != 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i] = $row;
            $i++;
        }
        echo json_encode($data);
    }
}else echo "Connection error";
?>
