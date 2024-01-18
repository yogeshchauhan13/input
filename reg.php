<?php
include 'header.php';
include 'conn.php';

?>

<div class="contain">
    <div class="container">
        <h1 class="well">Registration Form</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form action="store.php" method="post" enctype="multipart/form-data">

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="name" placeholder="Enter First Name Here.."
                                    class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Enter your email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>



                        <div class="form-group ">
                            <label for="">Gender : </label>
                            <input type="radio" id="html" name="gender" value="Male" required="required" />
                            <label for="male">Male</label>
                            <input type="radio" id="css" name="gender" value="Female" required="required" />
                            <label for="female">Female</label>
                            <input type="radio" id="javascript" name="gender" value="Other" required="required" />
                            <label for="other">Other</label>

                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="favcolor">Select your favorite color:</label>
                                <input type="color" id="favcolor" name="color" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="birthdaytime">Birthday (date and time):</label>
                                <input type="datetime-local" id="birthdaytime" name="datetime_local"
                                    class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="myfile">Select a file:</label>
                                <input type="file" id="myfile" name="file" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="bdaymonth">Birthday (month and year):</label>
                                <input type="month" id="bdaymonth" name="month" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="quantity">Quantity (between 1 and 5):</label>
                                <input type="number" id="quantity" name="number" min="1" max="5" class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="vol">Volume (between 0 and 50):</label>
                                <input type="range" id="vol" name="range" min="0" max="50" class="form-control"
                                    required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="gsearch">Search Google:</label>
                                <input type="search" id="gsearch" name="search" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="phone">Enter your phone number:</label>
                                <input type="tel" id="phone" name="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                    class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="appt">Select a time:</label>
                                <input type="time" id="appt" name="time" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="week">Select a week:</label>
                                <input type="week" id="week" name="week" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="select">Choose a car:</label>
                                <select name="select" id="select" class="form-control">
                                    <option value="volvo" required>Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group gender">
                            <label for="">Language : </label>
                            <div class="">
                                <input type="checkbox" id="vehicle1" name="language[]" value="HTML" required>
                                <label for="html">HTML</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="vehicle2" name="language[]" value="CSS">
                                <label for="cs">CSS</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="php" name="language[]" value="PHP">
                                <label for="php">PHP</label>
                            </div>
                        </div>

                        <div class="form-group">

                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="textarea"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input type="url" placeholder="Enter Website Name Here.." name="url" class="form-control"
                                required>
                        </div>
                        <button type="reset" class="btn btn-lg btn-info">Reset</button>
                        <button type="submit" class="btn btn-lg btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>