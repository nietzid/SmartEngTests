<?php
// include 'conn.php';
// $error = 0;

// session_start();
// if (!isset($_SESSION["login"])) {
//     header("Location: index.php");
// }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <title>EGQ</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 fixed-top" style=" background-color: #3E6D81 !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="/assets/img/logo-light.png" width="60%" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: 600;">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="index.php">Home&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="question_collection.php">Question Collection&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="generate.php">Generate&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="cbt.php">CBT&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="login.php">Sign In&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white !important;" aria-current="page" href="logout.php">Logout&emsp;</a>
                    </li>
                    <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class='dropdown-item' href='/'>
                            Masuk
                        </a>
                        <a class='dropdown-item' href='/'>
                            Profile
                        </a>
                    </div> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row p-5">
            <h4 class="text-center" style="color: #CA6035"><b>Which question will you choose?</b></h4>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="question-type" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/img/error_identification.png" alt="">
                            <br><br>
                            <b>
                                Error Identification
                            </b>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="question-type" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/img/sentence_completion.png" alt="">
                            <br><br>
                            <b>
                                Sentence Completion
                            </b>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="question-type" style="color: #3E6D81; text-decoration: none;">
                    <div class="card">
                        <div class="card-body">
                            <img src="/assets/img/vocabulary.png" alt="">
                            <br><br>
                            <b>
                                Vocabulary
                            </b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>