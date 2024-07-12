<!doctype html>
<html lang="en">

@include('layouts.admin.meta')

<body>
    <!--  Body Wrapper -->
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
        @include('layouts.admin.menu')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('layouts.admin.header')
            <!--  Header End -->

            <!--  Footer Start -->
            <div class="container-fluid">
                @yield('content')
                @include('layouts.admin.footer')
            </div>
            <!--  Footer End -->
        </div>
    </div>
    @include('layouts.admin.script')
</body>

</html>
