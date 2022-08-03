<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <title>EGQ</title>
    <style>
        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 fixed-top" style=" background-color: white !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="static/plugins/images/assets/img/logo.png" width="60%" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: 600;">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3E6D81 !important;" aria-current="page" href="index.php">Home&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3E6D81 !important;" aria-current="page" href="test_collection.php">Question Collection&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3E6D81 !important;" aria-current="page" href="generate.php">Generate&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3E6D81 !important;" aria-current="page" href="cbt.php">CBT&emsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #3E6D81 !important;" aria-current="page" href="login.php">Sign In&emsp;</a>
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

    <div class="container-fluid mt-5">
        <div style="color: #CA6035;" class="row p-4 pb-0 pt-5">
            <h3>
                <b>
                    Add Question to Your Test!
                </b>
            </h3>
            <p style="color: black;">
                Below is your question collection. You can add the question that’s been generated to the test.
            </p>
            <div class="mb-2">
                <a href="cbt_test.php">
                    <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Test Preview</button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="accordion accordion-flush m-0" id="accordionFlushExample">

                <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            User Input Question
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-5" style="background-color: white !important;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illo iure, culpa sapiente, nulla minus perspiciatis mollitia neque praesentium alias beatae maiores possimus modi iste veniam? Eveniet similique autem quae?</div>
                    </div>
                </div>

                <div class="accordion-item m-3" style="border: 1px solid lightgrey; border-radius: 10px;">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" style="background-color: white !important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Short Answer Question
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-5" style="background-color: white !important;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit amet ipsa repudiandae porro illum quis nulla nobis, inventore laborum rem tempore architecto. Commodi nam numquam non. Est deleniti eum provident!</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>