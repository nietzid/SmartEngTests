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

    <div class="container p-4 pt-5 mt-5">
        <h3 style="color: #3E6D81;" class="pb-3">
            <b>
                Detail Test.
            </b>
        </h3>
        <form method="post" action="">
            <table class="table">
                <tr>
                    <td width="15%">Test Name</td>
                    <td>
                        <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": English Test 1">
                    </td>
                </tr>
                <tr>
                    <td>Question Type</td>
                    <td>
                        <input disabled style="background-color: white; border: none;" type="text" name="testcode" class="form-control" id="testcode" placeholder="Test Code" value=": Error Identification, Grammar Coorection, dst">
                    </td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>
                        <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": Sunday, Aug 15 2022">
                    </td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td>
                        <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": 9:30 AM">
                    </td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td>
                        <input disabled style="background-color: white; border: none;" type="text" name="name" class="form-control" id="name" placeholder="Input Name" value=": 10:30 AM">
                    </td>
                </tr>
            </table>

            <div class="mb-2 mt-2">
                <a href="cbt_test.php">
                    <button type="button" name="submit" class="btn btn-block text-light mt-4 ps-5 pe-5" style="background-color: #3E6D81; float: right;">Do Test</button>
                </a>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>