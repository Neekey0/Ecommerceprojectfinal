<!DOCTYPE html>
<html>
   <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Basic -->
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
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    
      <style>
            .center
            {
                margin:auto;
                width: 80%;
                padding: 30px;
                text-align: center;

            }
            table,th,td{
                border: 1px solid chocolate;
                padding:10px;
            }
            .thdesign
            {
                font-size: 20px;
                padding: 10px;
                background-color: coral;
                color: white;
            }
            .img_design
            {
                height: 180px;
                width:250px;
            }
    </style>

   </head>
   <body>
    @include('sweetalert::alert');

      <div class="hero_area">


            @include('home.header');


               @if(session()->has('message'))
               <div style="text-align: center;" class="alert alert-success" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                   {{session()->get('message')}}

               </div>
               @endif



      <div class="center">
        <table>
            <tr>

                <th class="thdesign">Product title</th>
                <th class="thdesign">Product quantity</th>
                <th class="thdesign">Price</th>
                <th class="thdesign">Image</th>
                <th class="thdesign">Action</th>
            </tr>
            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <tr>
                <td style="font-size: 22px; font-weight:bold;">{{$cart->product_title}}</td>
                <td style="font-size: 22px; font-weight:italic;">{{$cart->quantity}}</td>
                <td style="font-size: 22px; font-weight:italic;">{{$cart->price}}</td>
                <td><img class="img_design" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="confirmation(event)" href="{{url('remove_cart',$cart->id)}}"> Remove Product</td>

            </tr>
            <?php $totalprice=$totalprice+150+ $cart->price ?>
            @endforeach

        </table>
      <div>
        <h2 style="font-size: 20px; padding:10px; color:crimson; font-weight:bolder; color:white; background-color: #ef5734; width:25%; margin:auto;" >Total Price with Delivery Charges($150) : $ {{$totalprice}} </h2>
      </div>

      <div>
        <h1 style="font-size: 25px; padding:15px; margin-bottom:10px; font-weight:bold;"> Proceed to Order :</h1>
        <a href="{{url('cash_order')}}" class="btn btn-success">Cash On Delivery</a>
        <a href="{{url('stripe',$totalprice)}}" class="btn btn-warning">Pay Using Card</a>
     
       <button style="background-color:#553a99;" class="btn btn-info" id="payment-button">Pay with Khalti</button>


      </div>


      </div>


      <!-- footer start -->

      <!-- footer end -->


      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Best Fashion Home </a><br>


         </p>
      </div>


<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {



                window.location.href = urlToRedirect;

            }


        });


    }
</script>

//Khalti

 <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>


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
