<!DOCTYPE html>
<html>
   <head>
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
    <style>
        .center
        {
            margin-left:100px;
            width:80;
            text-align: center;
            padding: 30px;

        }
        table,th,td{
            border:2px solid black;
        }
        .th
        {
            background-color:coral;
            padding: 10px;
            color: white;
            font-size: 18px;
        }

    </style>
    </head>
   <body>
    @include('sweetalert::alert');

               @include('home.header');

              <h3 style="text-align:center; font-size:24px;"> YOUR ORDER LIST </h3>


        <div class="center">
            <table>
                <tr>
                    <th class="th">Product title</th>
                    <th class="th">Quantity</th>
                    <th class="th">Price</th>
                    <th class="th">Payment Status</th>
                    <th class="th">Delivery Status</th>
                    <th class="th">Image</th>
                    <th class="th">Cancel Order</th>

                </tr>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img height="200" width="200" src="product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status=='Processing')
                        <a onclick="return confirm('Are you sure you want to cancel this order?')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>

                   @else
                   <p style="color:darkblue;">Not Allowed</p>
                   @endif



                    </td>
                </tr>
               @endforeach

            </table>
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
