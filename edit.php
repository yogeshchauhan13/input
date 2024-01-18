<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'conn.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $xyz = implode(",",$language);
    $select = $_POST['select'];
    $color = $_POST['color'];
    $date = $_POST['date'];
    $datetime_local = $_POST['datetime_local'];
    $email = $_POST['email'];
    $month = $_POST['month'];
    $number = $_POST['number'];
    $range = $_POST['range'];
    $search = $_POST['search'];
    $tel = $_POST['tel'];
    $time = $_POST['time'];
    $url = $_POST['url'];
    $week = $_POST['week'];
    $textarea = $_POST['textarea'];
    // $filename = $_FILES['file']['name'];
    // $tmpname = $_FILES['file']['tmp_name'];
    // move_uploaded_file($tmpname, "image/" . $filename);

    if ($_FILES['file']['name'] != '') {
        $filename = $_FILES['file']['name'];
        $tmpname = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmpname, "image/" . $filename);
    } else {
        // If no new file is uploaded, retain the existing file name
        $sql = "SELECT * FROM `user` WHERE `id`='$id'";
        $result = ($conn->query($sql));
        $row = $result->fetch_assoc();
        $filename = $row['file'];
    }


    $sql = "UPDATE `user` SET `name`='$name',`password`='$password',`gender`='$gender',`language`='$xyz',`select`='$select',
    `color`='$color', `date`='$date',`datetime_local`='$datetime_local',`email`='$email', `month`='$month',`number`='$number',
    `range`='$range',`search`='$search',`tel`='$tel',`time`='$time',`url`='$url',`week`='$week',`textarea`='$textarea',`file`='$filename'  WHERE `id`='$id'";

    if ($conn->query($sql) == true) {
        header("Location: view.php");
    } else {
        echo "update Error" . $conn->error;
    }

}

?>