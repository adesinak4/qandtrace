<?php
include 'connection.php';
session_start();
 
if(!isset($_SESSION['email'])){
    header('Location: log%20in.php');
    exit;
} else {
    // Show users the page!
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Q 'n' Trace</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <form method="POST" action="modified.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="store" required>
                                            <option selected="selected"><?php echo $_GET['store']; ?></option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="PICK A DATE" name="date" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>-->
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="time" required>
                                            <option disabled="disabled" selected="selected">Time</option>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='11:00'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>11:00</option>";
                                            }
                                                else
                                                echo "<option disabled>11:00</option>";
                                            ?>   
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='11:30'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>11:30</option>";
                                            }
                                                else
                                                echo "<option disabled>11:30</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='12:00'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>12:00</option>";
                                            }
                                                else
                                                echo "<option disabled>12:00</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='12:30'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>12:30</option>";
                                            }
                                                else
                                                echo "<option disabled>12:30</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='13:00'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>13:00</option>";
                                            }
                                                else
                                                echo "<option disabled>13:00</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='13:30'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>13:30</option>";
                                            }
                                                else
                                                echo "<option disabled>13:30</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='14:00'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>14:00</option>";
                                            }
                                                else
                                                echo "<option disabled>14:00</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='14:30'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>14:30</option>";
                                            }
                                                else
                                                echo "<option disabled>14:30</option>";
                                            ?>
                                            <?php
                                            $sql1 = $conn->query("SELECT * FROM ".$_GET['store']." WHERE time='15:00'");
                                            $row_count= mysqli_num_rows($sql1);
                                            if ($row_count < 10) {
                                                echo "<option>15:00</option>";
                                            }
                                                else
                                                echo "<option disabled>15:00</option>";
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
