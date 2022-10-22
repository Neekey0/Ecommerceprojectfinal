<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css');
    <style>
        .tabledesign
        {
            border:2px solid white;
            width:100%;
            margin:auto;
            text-align: center;
        }
        .th
        {
            background-color:royalblue;
            font-size: 15px;

        }
        .img
        {
            height: 150px;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

             @include('admin.sidebar');

      <!-- partial -->
            @include('admin.header');

        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">


                <h2 style="text-align: center;  font-size:30px; padding-top:10px; padding-bottom:15px;">All Orders</h2>
                <div style="padding-left:350px; padding-bottom:30px;">
                    <form action="{{url('search')}}" method="GET">
                        @csrf
                        <input style="color:black;" type="text" name="search" placeholder="Search">
                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </form>
                </div>

                <table class="tabledesign">
                    <tr class="th">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                        <th>Send Email</th>

                    </tr>
                    @forelse($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>

                        <td>
                            <img class="img" src="/product/{{$order->image}}">
                        </td>
                        <td>
                            @if($order->delivery_status=='Processing')
                            <a onclick="return confirm('Are you sure this product is delivered?')" href="{{url('delivered',$order->id)}}"  class="btn btn-primary">Delivered</a>
                            @else
                            <p style="color:darkred; ">Delivered !!!</p>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info"href="{{url('print_pdf',$order->id)}}">Print PDF</a>
                        </td>
                        <td>
                            <a href="{{url('send_email',$order->id)}}" class="btn btn-secondary">Send Email </a>
                        </td>
                    </tr>
                        @empty
                      <tr>
                        <td colspan="16">
                            <p> No Data Found !!! </p>
                        </td>
                      </tr>


                    @endforelse
                </table>





            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
