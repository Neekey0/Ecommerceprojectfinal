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


<style>
  .contact
  {
    position:relative;
    height:100px;
    padding-top:250px;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
  }
  .contact .content{
   width:100%;
    text-align:center;
    padding-bottom:20px;

  }
/* .contact .content h3{
    font-size:20px;
    font-weight:500;
    color:black;
} */
.contact .content p{
    font-weight:300;
    color:black;
}
.container
{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;


}
.container .contactinfo
{
    width:30%;
    display:flex;
    flex-direction:column;
    padding-left:20px;
}
.container .contactinfo .box
{
    position:relative;
    display:flex;

}
.container .contactinfo .box .icon
{
    min-width:60px;
    height:40px;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:50%;
   color:#666666;
font-size:20px;
}
.container .contactinfo .box .text{
    display:flex;
    flex-direction:column;
    margin-left:10px;
    flex-direction:column;

}
.contactform
{
    padding:40px;
    background-color:#c9c9c9;
     width:40%;
}
.map
{
    padding-left:20px;
    width:50%;
}
</style>

  </head>
   <body>



               @include('home.header');

               <section class="contact">
               <div class="content">
                 <h3>GET IN TOUCH </h3>
                 </div>

                 @if(session()->has('message'))
                 <div style="text-align: center;" class="alert alert-dark" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                     {{session()->get('message')}}

                 </div>
                 @endif

                <div class="container">
                        <div class="contactform">

                                <form action="{{url('contact')}}" method="POST">
                                        @csrf
                                    <h5> Send Message </h5>

                                    <div class="inputbox">
                                    <span>Email</span>
                                    <input type="text" name="email" placeholder="Email here" required="">
                                    </div>
                                    <div class="inputbox">
                                    <span>Type your message...</span>

                                    <textarea placeholder="Type message here" name="message" required=""></textarea>
                                    </div>
                                    <div class="inputbox">
                                    <input type="submit" name="" value="Submit">

                                    </div>
                                </form>
                        </div>

                        <div class="contactinfo">
                            <div class="box">
                            <div class="icon"><i class="fas fa-map-marker"></i></div>
                            <div class="text">
                                <h5>Address:</h5>
                                <p>Kathmandu, Nepal</p>
                            </div>
                            </div>
                            <div class="box">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="text">
                                <h5>Phone:</h5>
                                <p>4579-342-23<br> 93-334-232</p>
                            </div>
                            </div>
                            <div class="box">
                            <div class="icon"> <i class="fas fa-envelope"></i></div>
                            <div class="text">
                                <h5>Email</h5>
                                <p>bestfashion@gmail.com</p>
                            </div>
                            </div>
                            <div class="box">
                            <div class="text">
                                <h5>Find us more on:</h5>

                            </div>
                             </div>
                            <div class="box">
                            <div class="icon"><i class="fab fa-facebook-f"></i></div>
                            <div class="icon"><i class="fab fa-twitter"></i></div>
                            <div class="icon"><i class="fab fa-instagram"></i></div>

                            <div class="icon"><i class="fab fa-fab fa-youtube"></i></div>
                            </div>
                        </div>



                 <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.276891987676!2d85.29111310794943!3d27.70903193370121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1666173088918!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>

                </div>
                </section>




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
