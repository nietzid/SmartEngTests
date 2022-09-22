@extends('layouts.app')

@section('content')
<div style="background-color: #3E6D81;">
    <div class="container-fluid pb-5">
        <div class="row p-5">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="assets/img/header-img.png" class="flex" width="70%" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="display: flex; align-items: center">
                <div class="wrap">
                    <div class="row" style="color: white;">
                        <br><br>
                        <h1 style="font-size: 50px;"><b>English Test Generator</b></h1>
                        <p>English Test Generator is a website for generating <br> articles into English test questions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <h1 class="text-center pt-5">
        <b style="color: #3E6D81">
            WHAT IS <span style="color: #CA6035;">IELTS?</span>
        </b>
    </h1>
    <p class="text-center pt-4 pb-4">
        <i>
            “ The International English Language Testing System (IELTS) is the world's most popular English language proficiency test for higher education and global migration. “
        </i>
    </p>

    <h1 class="text-center pt-5">
        <b style="color: #3E6D81">
            WHAT IS <span style="color: #CA6035;">TOEFL?</span>
        </b>
    </h1>
    <p class="text-center pt-4">
        <i>
            “ The TOEFL (Test of English as a Foreign Language) is a standardized academic English test primarily taken by students applying to universities in the United States.. “
        </i>
    </p>
</div>

<div class="box p-5" style="background-color: #F1F1F1;">
    <h1 class="text-center">
        <b style="color: #CA6035;">
            Our Feature
        </b>
    </h1>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                <p style="color: #CA6035; font-size:x-large;">Generate Question</p>
                <p>
                    Question Generation aims to generate valid and fluent questions according to the given passage and targeted answers from several sentences or texts entered.
                    Questions can be used in many scenarios, such as automated tutoring systems, improving the performance of the Question Answerer model, enabling chatbots to lead conversations, and generating test questions.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <img src="assets/img/generate.png" class="flex" width="60%" alt="">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <img src="assets/img/cbt.png" class="flex" width="60%" alt="">
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                <p style="color: #CA6035; font-size:x-large;">Computer Based Test</p>
                <p>
                    What is CBT? Computer Based Test (CBT) or Computer Based Test is a test with an implementation system using a computer as a medium for conducting tests. The presentation and selection of Computer CBT questions is done computerized so that each participant who takes the test gets a different package of questions.
                    This system was developed to minimize cheating or leakage of questions that often occur during exams, to prevent question limitations, damage to questions so that results do not come out after being checked.
                    The CBT system will reduce implementation costs because of course there is no need to print questions and answer sheets with paper, distribute questions, escort questions from security forces and reduce the cost of correcting exam results by scanning LJK and scoring which takes longer.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5 pt-5 pb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col ps-5">
                    <h1 style="color: #CA6035;" class="pt-5">
                        <b>
                            Upgrade to premium
                        </b>
                    </h1>
                    <p>
                        Get the most out of SmartEngTest now!
                    </p>
                    <a href="<?= url('userpages/upgrade-account') ?>">
                        <button class="btn mt-2" style="background-color: #3E6D81; color: white; width: 30%">Upgrade Account</button>
                    </a>
                </div>
                <div class="col flex">
                    <img src="assets/img/saly-1.png" width="50%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="foooter" style="background-color: #F1F1F1;">
    <div class="row m-5 mb-0 mt-3">
        <div class="col-lg-6 col-md-6 col-sm-12 p-5">
            <p class="pb-2 pt-3" style="color: #3E6D81; font-weight: bold;">
                About US
            </p>
            <p style="font-size:14px; text-align: justify;">
                Smart EngTest is a website for generating articles into English test questions. This website is made to help teachers and students .
            </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 p-5">
            <div class="row pb-2 pt-3">
                <div class=" col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="user_guide" style="text-decoration: none; color: black; font-size: 14px">User Guide</a> <br><br>
                    <a href="user_guide" style="text-decoration: none; color: black; font-size: 14px">Demo</a> <br><br>
                    <a href="index.php" style="text-decoration: none; color: black; font-size: 14px">Upgrade Account</a> <br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Computer Based Test</a> <br><br>
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Generate Question</a> <br><br>
                    <a href="#about" style="text-decoration: none; color: black; font-size: 14px">Question Collection</a> <br><br>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <a href="#faq" style="text-decoration: none; color: black; font-size: 14px">Test Collection</a> <br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="fooooter" style="background-color: white;">
        <p class="p-3 mb-0 text-center" style="font-size: 13px">
            © 2022 ET-Generator. All Rights Reserved.
        </p>
    </div>
</div>
@endsection