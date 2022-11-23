<?php
require 'conn.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AGQ</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ps-3 pe-3 fixed-top" style=" background-color: white !important; box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.35);">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php">
                <img src="static/plugins/images/assets/img/logo.png" width="60%" alt="">
            </a>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pb-0" style="font-weight: 600;">
                    <li class="nav-item pb-0">
                        <p class="nav-link">Home&emsp;</p>
            </li>
            </ul>
        </div> -->
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-weight: 600;">
                <li class="nav-item"> -->
            <!-- </li>
                </ul> -->
        </div>
    </nav>

    <div class="p-5 pb-3 font-poppins">
        <?dd($question)?>
        <p id="demo" class="mt-4" style="color: #3e6d81; font-size: 20px; font-weight: 600; text-align: right;"></p>
        <div class="row mb-4 mt-2 gap-4">
            <?php
            $data_soal = mysqli_query($conn, "select * from test");
            $nomor = 1;
            $batas = 1;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($conn, "select * from test");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_soal = mysqli_query($conn, "select * from test limit $halaman_awal, $batas");
            $nomor = $halaman_awal + 1;
            while ($soal = mysqli_fetch_array($data_soal)) { ?>
                <div class="col-lg-9 col-md-9 col-12 p-4" style="text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Cumque repellendus consequatur eveniet
                        laborum. Rerum in perferendis labore officiis
                        reprehenderit officia quas dolore minus, saepe
                        repudiandae laudantium aliquam temporibus, inventore
                        maxime? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Cumque repellendus consequatur
                        eveniet laborum. Rerum in perferendis labore
                        officiis reprehenderit officia quas dolore minus,
                        saepe repudiandae laudantium aliquam temporibus,
                        inventore maxime? Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Cumque repellendus
                        consequatur eveniet laborum. Rerum in perferendis
                        labore officiis reprehenderit officia quas dolore
                        minus, saepe repudiandae laudantium aliquam
                        temporibus, inventore maxime? Lorem ipsum dolor sit
                        amet consectetur adipisicing elit. Cumque
                        repellendus consequatur eveniet laborum. Rerum in
                        perferendis labore officiis reprehenderit officia
                        quas dolore minus, saepe repudiandae laudantium
                        aliquam temporibus, inventore maxime?
                    </p>
                    <?php echo $soal['question']; ?>
                    <!-- <p>
                        1. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Perspiciatis laudantium numquam
                        maiores nisi aut? Molestias rem, at ratione esse
                        eius aliquid voluptatem animi. Totam tempore amet
                        rerum fugit, sapiente rem.
                    </p> -->
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="option" value="A" />
                        <label class="form-check-label">
                            <?php echo $soal['option_A']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="option" value="B" />
                        <label class="form-check-label">
                            <?php echo $soal['option_B']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="option" value="C" />
                        <label class="form-check-label">
                            <?php echo $soal['option_C']; ?>
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="option" value="D" />
                        <label class="form-check-label">
                            <?php echo $soal['option_D']; ?>
                        </label>
                    </div>
                    <div class="row mt-3" style="float: right">
                        <a <?php if ($halaman < $total_halaman) {
                                echo "href='?halaman=$next'";
                            } ?>>
                            <button class="btn" style="background-color: #3e6d81; width: 150px; color: white;">
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <div class="col-lg col-md col p-4" style="background-color: white;text-align: justify; box-shadow: 0px 0px 10px -2px rgba(0, 0, 0, 0.35);">
                <div class="row row-cols-5 gap-3" style="text-align: center;">
                    <?php for ($x = 1; $x <= $total_halaman; $x++) { ?>
                        <a style="background-color: lightgray;" class="page-link" href="?halaman=<?php echo $x ?>">
                            <?php echo $x; ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("August 2, 2022 17:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = "<span class='iconify-inline' data-icon='fluent:timer-12-regular' style='color: #3e6d81;'></span>   " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>