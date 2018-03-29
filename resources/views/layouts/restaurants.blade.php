 <!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Foodoor.in</title>
      <link rel="icon" href="/images/resource/favicon.ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css" />
      <link rel="stylesheet" href="/css/icons.css">
      <link rel="stylesheet" href="/css/animate.min.css">
      <link rel="stylesheet" type="text/css" href="/css/style.css" />
      <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
      <link rel="stylesheet" type="text/css" href="/css/chosen.css" />
      <link rel="stylesheet" type="text/css" href="/css/colors.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
   </head>
   <body>
      <div class="theme-layout" id="scrollup">
         <div class="responsive-header">
            <div class="responsive-menubar">
               <div class="res-logo"><a href="/" title=""><img src="/images/resource/logo.png" alt=""></a></div>
               <div class="menu-resaction">
                  <div class="res-openmenu">
                     <img src="/images/icon.png" alt=""> Menu
                  </div>
                  <div class="res-closemenu">
                     <img src="/images/icon2.png" alt=""> Close
                  </div>
               </div>
            </div>
            <div class="responsive-opensec">
               <div class="btn-extars">
                  <a href="{{ route('register') }}" title="" class="post-job-btn">Sign Up</a>
                  <ul class="account-btns">
                     <li class=""><a title="" href="{{ route('login') }}">Login</a></li>
                  </ul>
               </div>
               <!-- Btn Extras -->
               <!-- <form class="res-search">
                  <input placeholder="Job title, keywords or company name" type="text">
                  <button type="submit"><i class="la la-search"></i></button>
               </form> -->
               <div class="responsivemenu">
                  <ul>
                     <li class="">
                        <a href="{{ route('restaurants') }}" title="">Home</a>
                     </li>
                     <li class="">
                        <a href="{{ route('restaurants.list') }}" title="">Restaurants</a>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="{{ route('restaurants.list') }}" title="">Categories</a>
                        <ul>
                         @foreach($cuisines as $cuisine)
                           <li><a href="{{ route('restaurants.list.cuisine', ['cuisine' => $cuisine->id]) }}" title="">{{ $cuisine->name }}</a></li>
                         @endforeach
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <header class="style2">
            <div class="menu-sec">
               <div class="container">
                  <div class="logo">
                     <a href="/" title=""><img src="/images/resource/logo.png" alt=""></a>
                  </div>
                  <!-- Logo -->
                  @guest
                  <div class="btn-extars">
                     <a href="{{ route('register') }}" title="" class="post-job-btn">Sign Up</a>
                     <a href="{{ route('login') }}" title="" class="post-job-btn m-l-15">Login</a>
                  </div>
                  @endguest
                  <!-- Btn Extras -->
                  <nav>
                     <ul>
                        <li class="">
                           <a href="{{ route('restaurants') }}" title="">Home</a>
                        </li>
                        <li class="">
                          <a href="{{ route('restaurants.list') }}" title="">Restaurants</a>
                        </li>
                        <li class="menu-item-has-children">
                          <a href="{{ route('restaurants.list') }}" title="">Cuisines</a>
                           <ul>
                             @foreach($cuisines as $cuisine)
                           <li><a href="{{ route('restaurants.list.cuisine', ['cuisine' => $cuisine->id]) }}" title="">{{ $cuisine->name }}</a></li>
                         @endforeach
                           </ul>
                        </li>
                        @auth
                         <li class="menu-item-has-children">
                          <a href="{{ route('home') }}" title="">My Account</a>
                           <ul>
                              <li><a href="#" title=""><i class="fa fa-user"></i> Manage Profile</a></li>
                              <li><a href="#" title=""><i class="fa fa-file-text"></i> My Orders</a></li>

                              <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>  {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                           </ul>
                        </li>
                        @endauth
                     </ul>
                  </nav>
                  <!-- Menus -->
               </div>
            </div>
         </header>


         @include('flash::message')

         @yield('content')


 <footer>
            <div class="block">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 column">
                        <div class="widget">
                           <div class="about_widget">
                              <div class="logo">
                                 <a href="index.html" title=""><img src="/images/resource/logo.png" alt=""></a>
                              </div>
                              <span>Ranchi, India</span>
                              <span>+1 246-345-0695</span>
                              <span>info@foodoor.in</span>
                              <div class="social">
                                 <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                 <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                 <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                 <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                 <a href="#" title=""><i class="fa fa-behance"></i></a>
                              </div>
                           </div>
                           <!-- About Widget -->
                        </div>
                     </div>
                     <div class="col-lg-4 column">
                        <div class="widget">
                           <h3 class="footer-title">Necessary Links</h3>
                           <div class="link_widgets">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <a href="#" title="">Privacy &amp; Seurty </a>
                                    <a href="#" title="">Terms of Serice</a>
                                    <a href="#" title="">Disclaimers </a>	
                                 </div>
                                 <div class="col-lg-6">
                                    <a href="#" title="">How It Works </a>
                                    <a href="#" title="">For Restaurants </a>
                                    <a href="#" title="">Contact Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 column">
                        <div class="widget">
                           <div class="download_widget">
                              <a href="#" title=""><img src="/images/resource/dw2.png" alt=""></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-line">
               <span>© 2018 Foodoor.in All rights reserved. Design by Solicitous</span>
               <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
            </div>
         </footer>
      </div>
      
      <script src="/js/jquery.min.js" type="text/javascript"></script>
      <script src="/js/modernizr.js" type="text/javascript"></script>
      <script src="/js/script.js" type="text/javascript"></script>
      <script src="/js/wow.min.js" type="text/javascript"></script>
      <script src="/js/slick.min.js" type="text/javascript"></script>
      <script src="/js/parallax.js" type="text/javascript"></script>
      <script src="/js/select-chosen.js" type="text/javascript"></script>
   </body>
</html>