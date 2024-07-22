<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>VoteNow</title>
    <link rel="icon" href="{{ asset('assets/images/judul.png') }}" type="image/png">

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .header-area .main-nav ul.nav {
            flex-basis: 100%;
            margin-top: 30px;
            justify-content: right;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            position: relative;
            z-index: 999;
        }

        .header-area .main-nav .nav li:last-child {
            padding-right: 0px;
        }

        .header-area .main-nav .nav li {
            padding-left: 10px;
            padding-right: 10px;
            height: 100px;
            line-height: 100px;
        }

        .header-area .main-nav .nav li a {
            display: block;
            padding-left: 20px;
            padding-right: 20px;
            font-weight: 500;
            font-size: 15px;
            height: 40px;
            line-height: 40px;
            text-transform: capitalize;
            color: #1e1e1e;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
            border: transparent;
            letter-spacing: .25px;
        }

        .header-area .main-nav .nav li:last-child a {
            background-color: #fff;
            color: black;
            font-size: 14px;
            font-weight: 400;
            text-transform: none;
            border-radius: 20px;
            padding-left: 0px;
        }

        .header-area .main-nav .nav li:last-child a i {
            background-color: #f35525;
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            border-radius: 50%;
            margin-left: -1px;
        }

        .header-area .main-nav .nav li:last-child:hover a {
            background-color: white;
        }

        .header-area .main-nav .nav li:last-child:hover a i {
            color: #fff;
        }

        .header-area .main-nav .nav li:hover a {
            color: #f35525;
        }

        .header-area .main-nav .nav li a.active {
            color: #f35525;
        }


        .background-header .main-nav .nav li a.active {
            color: #f35525;
        }

        .header-area .main-nav .menu-trigger {
            cursor: pointer;
            position: absolute;
            top: 23px;
            width: 32px;
            height: 40px;
            text-indent: -9999em;
            z-index: 99;
            right: 20px;
            display: none;
        }

        .background-header .main-nav .menu-trigger {
            top: 22px;
        }

        .background-header .main-nav ul.nav {
            margin-top: 20px;
        }
    </style>


<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <h1>VoteNow</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#" id="homeNav">Home</a></li>
                            <li><a href="#" id="kategoriNav">Kategori</a></li>
                            <li><a href="{{ route('vote.page') }}">Vote</a></li>
                            <li><a href="{{ route('lead.page') }}">Leaderboard</a></li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="carosel">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Assasin</span>
                    <h2>ayo<br>Pilih hero mu segera</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <span class="category">Mage</span>
                    <h2>ayo<br>Pilih hero mu segera</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <span class="category">Fighter</span>
                    <h2>ayo<br>Pilih hero mu segera</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="section best-deal" id="best-deal-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>|Pilih Vote</h6>
                        <h2>Find Your Best Character now!</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                            data-bs-target="#penthouse" type="button" role="tab"
                                            aria-controls="penthouse" aria-selected="false">Fighter</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                                            data-bs-target="#appartment" type="button" role="tab"
                                            aria-controls="appartment" aria-selected="true">Asassin</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="villa-tab" data-bs-toggle="tab"
                                            data-bs-target="#villa" type="button" role="tab" aria-controls="villa"
                                            aria-selected="false">Mage</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="penthouse" role="tabpanel"
                                    aria-labelledby="penthouse-tab">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <img src="assets/images/deal-03.jpg" alt="">
                                        </div>
                                        <div class="col-lg-5">
                                            <h4>Extra Info About Hero</h4>
                                            <p>Fighter adalah role yang paling populer untuk digunakan oleh para
                                                pemain karena ada banyak pilihan hero yang bisa digunakan dan hampir
                                                semua Hero Fighter sangat kuat serta tidak bisa dibilang buruk.
                                                Fighter juga merupakan hero yang memiliki keseimbangan antara
                                                ofensif dan defensif.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                    aria-labelledby="appartment-tab">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <img src="assets/images/deal-01.jpg" alt="">
                                        </div>
                                        <div class="col-lg-5">
                                            <h4>Extra Info About Hero</h4>
                                            <p>Sesuai dengan namanya assassin merupakan hero spesialis untuk
                                                membunuh dan mengunci musuh ketika darah mereka sekarat.
                                                Hero assassin memiliki mobilitas tinggi dan mampu membunuh musuh
                                                mereka dengan cepat.Sebagai role gesit dengan damage tinggi,
                                                assassins selalu menjadi target utama lawan.
                                                Namun, menguasai hero assassin tidak hanya soal memburu kill, tetapi
                                                juga membawa tim menuju kemenangan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="villa" role="tabpanel"
                                    aria-labelledby="villa-tab">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <img src="assets/images/deal-02.jpg" alt="">
                                        </div>
                                        <div class="col-lg-5">
                                            <h4>Extra Info About Hero</h4>
                                            <p>Mage adalah sumber damage Magical yang akan mengangkat tim dengan damage
                                                magicalnya
                                                Biasanya ditempatkan di Mid karena dapat melakukan farming dengan
                                                mudah.Tugas seorang Mage juga sebenarnya melakukan rotasi dan membantu
                                                lane dimana Marksman berada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-5">
                <p>Copyright © 2024 VoteNow.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script>
        document.getElementById('kategoriNav').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('best-deal-section').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
    <script>
        document.getElementById('homeNav').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('carosel').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</html>
