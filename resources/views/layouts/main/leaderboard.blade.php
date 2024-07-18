<!DOCTYPE html>
<html lang="en">

  <head>


    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>VoteNow</title>

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
              <li><a href="{{ route('vote.page') }}">Vote</a></li>
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
<body>
    <div class="col-lg-10 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">LEADERBOARD</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Rank</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Category</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Lane</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Point</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0"><h2 class="fw-semibold mb-0">1</h2></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Assassin</h6>
                        <span class="fw-normal">Burst Damage</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Ling</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Jungler</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">51</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h3 class="fw-semibold mb-0">2</h3></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Assassin</h6>
                        <span class="fw-normal">Damage Reap</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Fanny</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-secondary rounded-3 fw-semibold">Jungler</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">50</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h4 class="fw-semibold mb-0">3</h4></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Assassin</h6>
                        <span class="fw-normal">Burst Damage</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lancelot</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">Jungler</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">44</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Fighter</h6>
                        <span class="fw-normal">inisiator/regen</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Yu Zhong</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Exp Lane</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">38</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">5</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Fighter</h6>
                        <span class="fw-normal">Burst Damage</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Dyrroth</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Exp Lane</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">35</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">6</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Mage</h6>
                        <span class="fw-normal">Damage Reap</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Kagura</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Mid Lane</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">37</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">7</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Fighter</h6>
                        <span class="fw-normal">Burst Damage</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Zilong</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Exp Lane</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">38</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
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
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/isotope.min.js')}}"></script>
      <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
      <script src="{{asset('assets/js/counter.js')}}"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script src="{{ asset('aset') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('aset') }}/js/sidebarmenu.js"></script>
        <script src="{{ asset('aset') }}/libs/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('aset') }}/js/app.min.js"></script>
        <script src="{{ asset('aset') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="{{ asset('aset') }}/libs/simplebar/dist/simplebar.js"></script>
        <script src="{{ asset('aset') }}/js/dashboard.js"></script>

</body>
</html>
