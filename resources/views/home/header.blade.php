 <!-- header section strats -->
 <header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
        <!--  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/logo.png" alt="#" />Best Fashion Homes</a> -->
        <a style="color: #e04646; font-size:30px; font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bolder; " class="navbar-brand" href="{{url('/')}}"><h2>BEST <em>FASHION <em> HOME</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
               {{-- <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="about.html">About</a></li>
                      <li><a href="testimonial.html">Testimonial</a></li>
                   </ul>
                </li> --}}
                <li class="nav-item">
                   <a class="nav-link" href="{{url('products')}}">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('blog')}}">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('show_cart')}}"><i class="fas fa-shopping-cart"></i></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('show_order')}}">Orders</a>
                 </li>
                 {{-- <form class="form-inline">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                 </form> --}}
                 @if (Route::has('login'))

                 @auth
                 <li class="nav-item">
                    <x-app-layout>

                    </x-app-layout>
                 </li>
                 @else


                 <li class="nav-item">
                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                    <a class="btn btn-dark" href="{{ route('register') }}">Register</a>
                 </li>
                 @endauth

                 @endif

             </ul>
          </div>
       </nav>
    </div>
 </header>
 <!-- end header section -->
