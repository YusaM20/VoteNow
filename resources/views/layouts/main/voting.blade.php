<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>VoteNow</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">

    <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->

    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
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
                        <a href="index.html" class="logo">
                            <h1>VoteNow</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('home') }}" id="homeNav">Home</a></li>
                            <li><a href="#" id="kategoriNav">Kategori</a></li>
                            <li><a href="property-details.html">Vote</a></li>
                            <li><a href="{{ route('lead.page') }}">Leaderboard</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i> Profile</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Home</a> / Vote</span>
                    <h3>Vote now</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <ul class="properties-filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".adv">Assassin</a>
                </li>
                <li>
                    <a href="#!" data-filter=".str">Mage</a>
                </li>
                <li>
                    <a href="#!" data-filter=".rac">Fighter</a>
                </li>
            </ul>
            @foreach ($heros as $value)
                @php
                    // Tentukan kelas berdasarkan peran
                    $roleClass = '';
                    if ($value->role === 'Assassin') {
                        $roleClass = 'adv';
                    } elseif ($value->role === 'Mage') {
                        $roleClass = 'str';
                    } elseif ($value->role === 'Fighter') {
                        $roleClass = 'rac';
                    }
                @endphp
                <div class="row properties-box">
                    <div
                        class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 {{ $roleClass }}">
                        <div class="item">
                            <a href="#"><img src="{{ asset($value->image) }}" alt=""></a>
                            <span class="category">{{ $value->role }}</span>
                            <h4><a href="property-details.html">{{ $value->name }}</a></h4>
                            <ul>
                                <li>Lane: <span>{{ $value->lane }}</span></li>
                                <li>tipe: <span>{{ $value->specially }}</span></li>
                                <li>atk tipe: <span>{{ $value->type }}</span></li>
                            </ul>
                            <div class="main-button">
                                <form action="/vote/store/{{ $value->id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="hero_id" value="{{ $value->id }}">
                                    <button class="w-50 btn btn-lg btn-dark" type="submit">Vote</button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
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
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

        <script>
            function confirmVote() {
                return confirm('Apakah Anda akan memilih hero ini?');
            }
        </script>
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
        @endif
</body>

</html>
