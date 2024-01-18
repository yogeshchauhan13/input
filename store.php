<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'conn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $xyz=implode(",",$language);

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

    $filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmpname, "image/" . $filename);

    $sql = "INSERT INTO `user` (`name`,`password`,`gender`,`language`,`select`,`color`,`date`,`datetime_local`,`email`,`month`, `number`,`range`,`search`,`tel`,`time`,`url`,`week`,`file`,`textarea` )
    VALUES ('$name','$password','$gender','$xyz','$select','$color', '$date','$datetime_local','$email','$month','$number','$range','$search','$tel','$time','$url','$week' ,'$filename' ,'$textarea')";

 
    if ($conn->query($sql) === true) {
        header("Location: view.php");
    } else {
        echo "insert Error" . $conn->error;
    }
}


?>