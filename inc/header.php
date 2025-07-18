<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Compass Hospitals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        Welcome to Care Comspass Hostpitals
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex  justify-content-end content ">

                            <?php
                           
                            echo isset($_SESSION['user_id'])? '<a href="dashboard.php" class="mx-3">Dashboard</a> | <a href="logout.php" class="mx-3">Log out</a>' : '<a href="register.php">Register</a> / <a href="login.php">Login</a> ';

                            ?>



                            

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/care-compass-hostpital.png" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php" id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php" id="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.php" id="doctors">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="appointments.php" id="appoinments">Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonials.php" id="testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" id="contact">Contact us</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>