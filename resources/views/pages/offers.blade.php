@extends('layouts.main')

@section ('page-title', 'Restaurant App')

@section('content')
<body class="antialiased">
        
  <section id="welcome">
    @include('components.menu-sidebar')
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>OFFERS</h1>
      <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
    </div>

  </section>
  <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
  <script src="/js/dist/FirstComp.js"></script>
  <script src="/js/dist/main.js"></script> -->
</body>
@endsection