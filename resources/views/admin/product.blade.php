<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                   <h1 class="font_size"> Add Products</h1>

                   <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                   <Div class="div_design">
                    <label>Product Title : </label>
                    <input class="text-color" type="text" name="title" placeholder="Write a title" required="">
                  </Div>
                  <Div class="div_design">
                    <label>Product Description : </label>
                    <input class="text-color" type="text" name="description" placeholder="Write a description" required="">
                  </Div>
                  <Div class="div_design">
                    <label>Product Price: </label>
                    <input class="text-color" type="number" name="price" placeholder="Write price" required="">
                  </Div>
                  <Div class="div_design">
                    <label>Discount Price : </label>
                    <input class="text-color" type="number" name="discount_price" placeholder="Write discount amount">
                  </Div>
                  <Div class="div_design">
                    <label>Product Quantity : </label>
                    <input class="text-color" type="number" min="0" name="quantity" placeholder="Write quantity amount" required="">
                  </Div>
                  <Div class="div_design">
                    <label>Product Category : </label>
                    <select class="text-color" name="category" required="">
                    <option value="" selected="">Add category here </option>

                    @foreach($category as $category)
                    <option value="{{$category->category_name}}"> {{$category->category_name}} </option>
                    @endforeach
                    </select>
                  </Div>

                  <Div class="div_design">
                    <label>Product Image Here : </label>
                    <input type="file" name="image" required="">
                  </Div>
                  <Div class="div_design">
                    <input type="submit" value="Add Product" class="btn btn-primary">
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
