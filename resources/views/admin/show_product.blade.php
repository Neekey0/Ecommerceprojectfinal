<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css');
    <Style>
        .center
        {
            margin: auto;
            text-align: center;
            border: 2px double seashell;
            margin-top: 30px;
        }
        .image_size
        {
            width: 150px;
            height: 150px;
        }
    </Style>
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
                @if(session()->has('message'))
                <div style="text-align: center;" class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

                <h2  style="font-size:30px; text-align:center; padding:10px;">All Products</h2>

                <table class="center">
                    <tr style="background-color: royalblue;">
                    <th style="padding:10px;">Product title</th>
                    <th style="padding:10px;">Description</th>
                    <th style="padding:10px;">Quantity</th>
                    <th style="padding:10px;">Category</th>
                    <th style="padding:10px;">Price</th>
                    <th style="padding:10px;">Discount price</th>
                    <th style="padding:10px;">Product Image</th>
                    <th style="padding:10px;">Delete</th>
                    <th style="padding:10px;">Edit</th>


                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="image_size" src="/product/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                        </td>

                    </tr>
                    @endforeach

                </table>


            </div>
        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
