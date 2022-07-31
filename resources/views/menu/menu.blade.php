@extends('layouts.app')

@section ('page-title', 'Restaurant App')

@section('content')
<body class="antialiased">
        
  <section id="welcome">
    <div class="welcome-menu">
      <div class="logo">
        <img src="https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png">
      </div>
      <div class="menu">
        <div class="menu-title">
          CREAMPIE
        </div>
        <ul class="links">
          <li>
            <a href="#">Menu</a>
          </li>
          <li>
            <a href="#">Waitlist</a>
          </li>
          <li>
            <a href="#">Offers</a>
          </li>
          <li>
            <a href="#">Giftcards</a>
          </li>
        </ul>
      </div>
      <div class="social-icons">
        <a href="#">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      <div class="location">
        <div class="address">
          234 Main st,<br>
          New York, New York 11747
        </div>
        <div class="phone-number">
          <a href="tel:7182198652">718-219-8652</a>
        </div>
      </div>
    </div>
    <div class="welcome-jumbo">
      <div class="status">MENU</div>
      <h1>Billy Burger</h1>
      <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
    </div>
  </section>
  <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
  <script src="/js/dist/FirstComp.js"></script>
  <script src="/js/dist/main.js"></script> -->
    </body>
@endsection