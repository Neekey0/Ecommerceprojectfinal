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
        .h2_font{
            font-size: 30px;
            padding-bottom: 30px;
        }
        .input_color{
            color: black;
        }
        .center{
            margin: auto;
            width:50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid aliceblue;
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

                @if(session()->has('message'))
                <div style="text-align: center;" class="alert alert-dark" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">

                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>

                </div>
                <table border="1" class="center">
                    <thead>
                        <tr>
                            <th> Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td><a onclick="return confirm('Are you sure you want to delete?')"  class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</td>

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
