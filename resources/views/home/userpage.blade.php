<!DOCTYPE html>
<html>
   <head>


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


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var botmanWidget ={
        introMessage:'Hi I am from Best Fashion',
        aboutText:'Admin'
    };
</script>
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
      <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> 
    </head>
   <body>


    @include('sweetalert::alert');

      <div class="hero_area">


               @include('home.header');



         <!-- slider section -->

              @include('home.slider');

         <!-- end slider section -->
      </div>
      <!-- why section -->

             @include('home.why');

      <!-- end why section -->

      <!-- arrival section -->
             {{-- @include('home.new_arrival'); --}}

      <!-- end arrival section -->

      <!-- product section -->

              @include('home.product');

      <!-- end product section -->

         {{-- Comment and reply system starts here --}}
         <div style="text-align: center; background-color:#b7b7b7; padding-bottom:30px;">
            <h1 style="font-size: 30px; padding-top:10px;"> Comment Your Views Here : </h1>
            <form action="{{url('add_comment')}}" method="POST">
                @csrf
                <textarea style="height:150px; width:600px;" name="comment" placeholder="Comment something here....."></textarea>
                    <br>
              <input type="submit" class="btn btn-primary" value="Comment">
            </form>
        </div>

        <div style="padding-left:40%; background-color:#f2f6fa;">
             <h1 style="font-size:20px; padding-bottom:20px;">All Comments:::</h1>

        @foreach ($comment as $comment)

        <div>
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>

            <a style="color:royalblue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
            @foreach($reply as $rep)
            @if($rep->comment_id==$comment->id)
                <div style="padding-left:3%; padding-bottom:10px;">
                    <b>{{$rep->name}}</b>
                    <p>{{$rep->reply}}</p>
            <a style="color:royalblue;" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

                </div>
            @endif
        @endforeach

        </div>
        @endforeach



{{-- Reply textbox --}}

        <div style="display: none;" class="replydiv">
            <form action="{{url('add_reply')}}" method="POST">
                @csrf
            <input type="text" id="commentId" name="commentId" hidden="">
            <textarea style="height: 100px; width:500px;" name="reply" placeholder="Write Something Here..."></textarea>
            <br>
          <button type="submit" class="btn btn-light">Reply</button>

            <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">Close</a>
        </form>
        </div>

        </div>



      <!-- subscribe section  @include('home.subscribe'); -->
      <!-- end subscribe section -->


      <!-- client section -->



      <!-- end client section -->



      <!-- footer start -->
        @include('home.footer');
      <!-- footer end -->


      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Best Fashion Home </a><br>


         </p>
      </div>

            <script>
                function reply(caller)
                {
                    document.getElementById('commentId').value=$(caller).attr('data-Commentid');
                        $('.replydiv').insertAfter($(caller));

                        $('.replydiv').show();
                }
                function reply_close(caller)
                {

                        $('.replydiv').hide();
                }
            </script>
//Refresh
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
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
