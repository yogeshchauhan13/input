<?php

include 'header.php';

include 'conn.php';

$id = $_GET['upid'];
$sql = "SELECT * FROM `user` WHERE `id`='$id'";
$result = ($conn->query($sql));
$row = $result->fetch_assoc();
$a = $row['language'];
$b = explode(",", "$a");

?>


<div class="contain">
    <div class="container">
        <h1 class="well">Registration Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="name" placeholder="Enter First Name Here.."
                                    class="form-control" value="<?php echo $row['name'] ?>">
                            </div>


                            <div class="col-sm-6 form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" id="password" name="password" class="form-control"
                                    value="<?php echo $row['password'] ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email">Enter your email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="<?php echo $row['email'] ?>">
                        </div>



                        <div class="form-group">
                            <p><b>Gender</b></p>
                            <input type="radio" id="html" name="gender" value="Male" <?php if ($row['gender'] == 'Male') {
                                echo "checked";
                            } ?>>
                            <label for="male">Male</label><br>
                            <input type="radio" id="css" name="gender" value="Female " <?php if ($row['gender'] == 'Female') {
                                echo "checked";
                            } ?>>
                            <label for="female">Female</label><br>
                            <input type="radio" id="javascript" name="gender" value="Other " <?php if ($row['gender'] == 'Other') {
                                echo "checked";
                            } ?>>
                            <label for="other">Other</label>
                        </div>



                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="favcolor">Select your favorite color:</label>
                                <input type="color" id="favcolor" name="color" class="form-control"
                                    value="<?php echo $row['color'] ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="date" class="form-control"
                                    value="<?php echo $row['date'] ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="birthdaytime">Birthday (date and time):</label>
                                <input type="datetime-local" id="birthdaytime" name="datetime_local"
                                    class="form-control"
                                    value="<?php echo date('Y-m-d\TH:i', strtotime($row['datetime_local'])); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="myfile">Select a file:</label>
                                <input type="file" id="myfile" name="file" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="bdaymonth">Birthday (month and year):</label>
                                <input type="month" id="bdaymonth" name="month" class="form-control"
                                    value="<?php echo $row['month']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="quantity">Quantity (between 1 and 5):</label>
                                <input type="number" id="quantity" name="number" min="1" max="5" class="form-control"
                                    value="<?php echo $row['number'] ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="vol">Volume (between 0 and 50):</label>
                                <input type="range" id="vol" name="range" min="0" max="50" class="form-control"
                                    value="<?php echo $row['range'] ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="gsearch">Search Google:</label>
                                <input type="search" id="gsearch" name="search" class="form-control"
                                    value="<?php echo $row['search'] ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="phone">Enter your phone number:</label>
                                <input type="tel" id="phone" name="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                    class="form-control" value="<?php echo $row['tel'] ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="appt">Select a time:</label>
                                <input type="time" id="appt" name="time" class="form-control"
                                    value="<?php echo date('H:i', strtotime($row['time'])); ?>">
                                <!-- https://stackoverflow.com/questions/32849332/html-input-type-time-set-value-using-php -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="week">Select a week:</label>
                                <input type="week" id="week" name="week" class="form-control"
                                    value="<?php echo $row['week'] ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="select">Choose a car:</label>
                                <select name="select" id="select" class="form-control">
                                    <option value="volvo" <?php if ($row['select'] == 'volvo') {
                                        echo "selected";
                                    } ?>>Volvo
                                    </option>
                                    <option value="saab" <?php if ($row['select'] == 'saab') {
                                        echo "selected";
                                    } ?>>Saab
                                    </option>
                                    <option value="opel" <?php if ($row['select'] == 'opel') {
                                        echo "selected";
                                    } ?>>Opel
                                    </option>
                                    <option value="audi" <?php if ($row['select'] == 'audi') {
                                        echo "selected";
                                    } ?>>Audi
                                    </option>
                                </select>
                            </div>                    
                        </div>




                        <div class="form-group">
                            <p><b>Language</b></p>
                            <input type="checkbox" id="html" name="language[]" value="HTML" <?php
                            if (in_array("HTML", $b)) {
                                echo "checked";
                            }
                            ?>>
                            <label for="html">HTML</label><br>

                            <input type="checkbox" id="css" name="language[]" value="CSS" <?php
                            if (in_array("CSS", $b)) {
                                echo "checked";
                            }
                            ?>>
                            <label for="css">CSS</label><br>

                            <input type="checkbox" id="php" name="language[]" value="PHP" <?php
                            if (in_array("PHP", $b)) {
                                echo "checked";
                            }
                            ?>>
                            <label for="php">PHP</label>
                        </div>

                        <div class="form-group">

                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"
                                name="textarea"> <?php echo $row['textarea'] ?> </textarea>
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" placeholder="Enter Website Name Here.." name="url" class="form-control"
                                value="<?php echo $row['url'] ?>">
                        </div>
                        <div class="">
                            <button type="reset" class="btn btn-lg btn-info">Reset</button>
                            <button type="submit" class="btn btn-lg btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>