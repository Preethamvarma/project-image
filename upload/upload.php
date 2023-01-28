<?php 
require_once "db.php";

if (isset($_POST['submit'])) {

    $party_id = $_POST['party_id'];
    $leader_id = $_POST['leader_id'];
    $img_name = $_POST['img_name'];
    $date = $_POST['date'];
    $file = $_FILES['image']['name'];


    $query = "INSERT INTO image (party_id, leader_id, img_name, date, image) VALUES ('$party_id','$leader_id','$img_name','$date','$file')";

    $res = mysqli_query($conn, $query);

    if ($res) {

        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }
}
?>