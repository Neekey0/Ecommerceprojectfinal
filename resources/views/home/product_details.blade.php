<!DOCTYPE html>
<html>
   <head>

    {{-- <base href="/public"> --}}
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Best Fashion Home </title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

   </head>
   <body>
      <div class="hero_area">
        @include('sweetalert::alert');

               @include('home.header');

      <div style="margin-left:250px;">
        <div class="row">
        <div class="box">

           <div style="float:left; width:40%; height:50px;" class="img-box">
              <img style="width:500px; height:450px;" src="/product/{{$product->image}}" alt="">
           </div>
           <div  style="float:right; width:60%; height:450px; padding-left:170px;" class="detail-box">
              <h4 style="color:#000000; text-transform: uppercase; font-size:30px; font-weight:bolder; ">
                 {{$product->title}}
              </h4>
               @if($product->discount_price!=null)
                       <h6 style="color: red">Discount price <br>
                           $ {{$product->discount_price}}
                       </h6>
                       <h6 style="text-decoration: line-through; color:blue;">Price<br>
                           $ {{$product->price}}
                       </h6>
                  @else
                           <h6 style="color: blue">Price<br>
                               $ {{$product->price}}
                           </h6>
               @endif
               <h6> <strong>Product category :</strong> {{$product->category}}</h6>
               <h6> <strong>Product details: </strong>{{$product->description}}</h6>
               <h6> <strong>Available quantity:</strong> {{$product->quantity}}</h6>
               <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                <input type="number" name="quantity" min="1" value="1" style="width:80px;">

                    </div>
                        </div>
                    <div class="col-md-4">
                <input style="background-color: #ee4c58; font-size:18px;" class="btn btn-primary" type="submit" value="Add to Cart">

                    </div>

            </form>
           </div>
         </div>
        </div>
     </div>

    </div>

      <!-- footer start -->
        @include('home.footer');
      <!-- footer end -->


      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Best Fashion Home </a><br>


         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
