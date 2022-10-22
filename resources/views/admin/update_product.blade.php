<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/pulic">
    @include('admin/css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 30px;
        }
        .font_size{
            font-size: 30px;
            padding-bottom: 40px;
        }
        .text-color
        {
            color:black;
        }
        label{

            width:200px;
        }
        .div_design
        {
            padding-bottom: 15px;
        }
    </style
  </head>
  <body>
    <div class="container-scroller">

             @include('admin.sidebar');

      <!-- partial -->
            @include('admin.header');

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div style="text-align: center;" class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

                <div class="div_center">
                   <h1 class="font_size">Update Product</h1>

                   <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                   <Div class="div_design">
                    <label>Product Title : </label>
                    <input class="text-color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                  </Div>
                  <Div class="div_design">
                    <label>Product Description : </label>
                    <input class="text-color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
                  </Div>
                  <Div class="div_design">
                    <label>Product Price: </label>
                    <input class="text-color" type="number" name="price" placeholder="Write price" required="" value="{{$product->price}}">
                  </Div>
                  <Div class="div_design">
                    <label>Discount Price : </label>
                    <input class="text-color" type="number" name="discount_price" placeholder="Write discount amount" value="{{$product->discount_price}}">
                  </Div>
                  <Div class="div_design">
                    <label>Product Quantity : </label>
                    <input class="text-color" type="number" min="0" name="quantity" placeholder="Write quantity amount" required="" value="{{$product->quantity}}">
                  </Div>
                  <Div class="div_design">
                    <label>Product Category : </label>
                    <select class="text-color" name="category" required="">
                    <option value="{{$product->category}}" selected="">{{$product->title}}</option>
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}"> {{$category->category_name}} </option>
                    @endforeach
                    </select>
                  </Div>
                  <Div class="div_design">
                    <label>Current Product Image Here : </label>
                    <img style="margin: auto" height="100" width="100" src="/product/{{$product->image}}">
                  </Div>

                  <Div class="div_design">
                    <label>Change Product : </label>
                    <input type="file" name="image">
                  </Div>
                  <Div class="div_design">
                    <input type="submit" value="Update Product" class="btn btn-primary">
                  </Div>
                </form>
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
