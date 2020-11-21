<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/common-images/logo-nav.png')}}" class="navbar-image d-inline-block align-top" alt="">
          </a>
        <a class="navbar-brand" href="#"><strong>Multiservices45</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sticky-nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Sticky-nav">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
            </li>
        </ul>
    
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!-- Authentication Links -->                
            <li class="nav-item">
                <a class="nav-link" href="">ACCUEIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">GALERIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">PRESTATIONS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">PACKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">TARIFS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">CONTACT</a>
            </li>
        </ul>
    </div>
    </nav>
    <div class="view">
        <div class="flex-center">
          <a href="#scroll" class="btn btn-primary">Scroll Down</a>
        </div>
    </div>
</header>

<script>
    jQuery(function ($) {
      const SCROLLING_NAVBAR_OFFSET_TOP = 50;
      $(window).on('scroll', () => {
        const $navbar = $('.navbar');
        if (!$navbar.length) return;
        $('.scrolling-navbar')[$navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP ? 'addClass' : 'removeClass']('top-nav-collapse');
      });
    });
</script>