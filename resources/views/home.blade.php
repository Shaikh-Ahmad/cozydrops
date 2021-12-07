<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

  
    <link rel="stylesheet" href="./css/app.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="icon" href="/storage/cozydrops/logo.png" type="image/icon type">
    <title>cozydrops</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #cc0202 !important">
        <div class="container" >
        
          <a class="navbar-brand text-white " style="font-size:22px" href="#" > <img src="{{asset('/storage/cozydrops/logo.png')}}" width="70px" height="20px" alt="" >   Cozydrops</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link text-white" href="#"><i class="fa fa-home"></i> Home</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link text-white" href="/fleet"><i class="fa fa-car"></i> Fleet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa fa-phone"></i> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      
      @if(session()->has('message'))
      
        <div class="alert alert-success m-0" >
            {{ session()->get('message') }}
        </div>
      @endif
      

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/storage/cozydrops/atlanta.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h2 style="text-shadow: 2px 2px 9px #000000;">ATLANTA</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/storage/cozydrops/wyoming.jpeg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h2 style="text-shadow: 2px 2px 9px #000000;">WYOMING</h2>
              </div>
            </div>
           
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
    
{{-- 
    <div class="container">

        <div class="owl-carousel owl-theme">
            
                <div class="col">
                    <img src="" alt="" width="100px" height="100px">
               </div>
               <div class="col">
                    <img src="" alt="" width="100px" height="100px">
               </div>
               <div class="col">
                    <img src="" alt="" width="100px" height="100px">
                </div>
                <div class="col">
                    <img src="" alt="" width="100px" height="100px">
                </div>    
            
        </div>

    </div> --}}
    
    
    <div class="container mt-4 mb-4">
        <div class="d-flex justify-content-center mb-4">
            <h1>Service Types</h1>
        </div>
        <div class="row">
            
                <div class="col-md-3 mb-2">
                    <div class="card shadow" >
                        <img class="card-img-top service-image " src="{{asset('/storage/cozydrops/hourly.jpg')}}" alt="Card image cap">
                        <div class="card-body card-body-service">
                          <p class="card-text">
                            Hourly trips are now easy and comfortable with our luxuries with any vehicle you desire and enjoy a complete new experience with us.
                          </p>
                        </div>
                        <div class="card-footer ">
                            Hourly
                        </div>
                    </div>
               </div>

               <div class="col-md-3 mb-2">
                    <div class="card shadow" >
                        <img class="card-img-top service-image" src="{{asset('/storage/cozydrops/point-to-point.jpg')}}" alt="Card image cap">
                        <div class="card-body card-body-service">
                            <p class="card-text">
                                Traveling with comfort is our company’s goal and top priority. Select your pick up point drop off location and pickup time, we will take care of...
                            </p>
                        </div>
                        <div class="card-footer">
                            Point-to-Point
                        </div>
                    </div>
               </div>

               <div class="col-md-3 mb-2">
                    <div class="card shadow" >
                        <img class="card-img-top service-image" src="{{asset('/storage/cozydrops/business.jpg')}}" alt="Card image cap">
                        <div class="card-body card-body-service">
                            <p class="card-text">You can completely rely on us while having an important business trip. We guarantee a successful and safe driving.</p>
                        </div>
                        <div class="card-footer">
                                Business & Tour Trips 
                        </div>
                    </div>                
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card shadow" >
                        <img class="card-img-top service-image" src="{{asset('/storage/cozydrops/airport.jpg')}}" alt="Card image cap">
                        <div class="card-body card-body-service">
                          <p class="card-text">Pick and drop services are a cinch with us, Just book your ride and specify your time, forget your worries and leave the rest for us.</p>
                        </div>
                        <div class="card-footer">
                                Airport Pick & Drop
                        </div>
                      </div>               
                </div>    
            </div>
        
    </div>


    <div class="container-fluid form-bg-cover" >
        
        <div class="row  p-4">

            <div class="col-md-6 p-4 d-flex justify-content-center align-items-center">

                <form action="/" method="post" class="col-md-10  p-4 form-style">
                  
                  @csrf

                  <div class="d-flex justify-content-center">
                        <h1 class="text-white p-2" style="border:2px solid rgb(255, 255, 255); border-radius:10px;">Book Now</h1>
                  </div>

                  @if(session()->has('message'))
                 
                    <div class="alert alert-success " >
                        {{ session()->get('message') }}
                    </div>
                  @endif

                 

                  <div class="form-row">
                  
                      <div class="form-group col-md-5">
                          {{-- <label for="inputAddress">Name</label> --}}
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                      </div>
      
                      <div class="form-group col-md-5 ">
                          {{-- <label for="inputEmail4">Email</label> --}}
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>
                    
                    
                  </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            {{-- <label for="inputAddress2">Date</label> --}}
                            <input type="date" class="form-control" name="date" id="date" placeholder="date" required>
                        </div>
                        <div class="form-group col-md-5 ">
                            {{-- <label for="inputAddress2">Time</label> --}}
                            <input type="time" class="form-control" name="time" id="time" placeholder="Time" required>
                        </div>
                    </div>

                  
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            {{-- <label for="">Pickup</label> --}}
                            <input type="text" class="form-control" name="pickup" id="pickup" placeholder="Pickup" required>
                        </div>
                        <div class="form-group col-md-5">
                            {{-- <label for="">Dropoff</label> --}}
                            <input type="text" class="form-control" name="dropoff" id="dropoff" placeholder="Dropoff" required>
                        </div>
                    </div>

                    <div class="form-group" style="margin-left:0px ">
                        {{-- <label for="inputAddress">Contact</label> --}}
                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact" required>
                          @if($errors->has('contact'))
                          <div class="error">{{ $errors->first('contact') }}</div>
                          @endif
                      </div>

                    <div class="form-group">
                        <select class="form-select " name="total_passengers"  aria-label="Default select example" required>
                            <option selected="true" disabled="disabled">Select Number of Passengers</option>    
                            <option value="3">Three</option>
                            <option value="6">Six</option>
                            <option value="14">Forteen</option>
                            <option value="More then 14">More then 14</option>
                          </select>    
                    </div>
                   
        
                    <div class="form-group">
                      {{-- <label for="details">Details</label> --}}
                      <textarea class="form-control" name="details" id="" cols="30" rows="4" placeholder="e.g: Flight details" required></textarea>
                    </div>
                  
        
                    <div class="form-group row ml-2">
        
                        <div class="form-check col">
                            <input class="form-check-input mt-4" type="hidden" name="service_type1" value="No"><input class="form-check-input" type="checkbox" name="service_type1" value="Yes" >

                            <label class="form-check-label" for="gridRadios1">
                              Point to point
                            </label>
                          </div>
                          <div class="form-check col">

                            <input class="form-check-input mt-4" type="hidden" name="service_type2" value="No" checked><input class="form-check-input" type="checkbox" name="service_type2" value="Yes">
                            <label class="form-check-label" for="gridRadios2">
                              Hourly
                            </label>
                        </div>
                      
                    </div>
                   
                    
                    <button id="btn1" type="submit" class="btn btn-outline-danger btn-lg" ><b>Book now</b></button>
                    {{-- <button id="btn2" class="btn-outline-danger btn-lg buttonload" style="display: none;">
                      <i class="fa fa-spinner fa-spin"></i>Loading
                    </button> --}}
                  </form>
            </div>

            {{-- <script>

         

              $(document).ready(function(){
                $("#btn1").click(function(){
                  $("#btn1").hide();
                });
                $("#btn1").click(function(){
                  $("#btn2").show();
                });

                setTimeout(function () {  
                $('#btn2').hide();  
                $("#btn1").show();
                }, 4000); 
                
              });
              
              </script>
             --}}

            <div class="col-md-6 d-flex justify-content-center mt-4">
               
                    <h1 style="color: rgb(255, 255, 255);text-shadow: 5px 5px 12px rgb(235, 14, 14);">
                        We provide you the best severvice in Town. 
                        Get Your Booking NOW.
                    </h1>
      
                
            </div>
            

        </div>
       


    </div>


  
    <div class="container mt-4 mb-4">
        <div class="d-flex justify-content-center">
            <h1>Fleet</h1>
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">SUV</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sadan</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sprinter Van</a>
            </div>
          </nav>

          <div class="container my-3 tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="row">

                    <div class="card mr-2" style="width: 19rem;">
                        <div class="card-body">
                          <img src="{{asset('/storage/cozydrops/suv_esc.jpg')}}" alt="" class="car-image">
                          <h6 class="card-subtitle mb-2 text-muted mt-1">Cadillac Escalade ESV</h6>
                        </div>
                    </div>
                    <div class="card mr-2" style="width: 19rem;">
                        <div class="card-body">
                          <img src="{{asset('/storage/cozydrops/suv_sabarban.jpg')}}" alt="" class="car-image">
                          <h6 class="card-subtitle mb-2 text-muted mt-1">Chevrolet Suburban</h6>
                        </div>
                    </div>
               
                    
                </div> 

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

       <div class="row">

            <div class="card mr-2" style="width: 19rem;">
                <div class="card-body">
                  <img src="{{asset('/storage/cozydrops/cadillac XTS.jpg')}}" alt="" class="car-image">
                  <h6 class="card-subtitle mb-2 text-muted mt-1">Cadillac XTS</h6>
                </div>
            </div>

            <div class="card mr-2" style="width: 19rem;">
                <div class="card-body">
                  <img src="{{asset('/storage/cozydrops/benz.jpg')}}" alt="" class="car-image">
                  <h6 class="card-subtitle mb-2 text-muted mt-1">Mecedes Benz S-class</h6>
                </div>
            </div>
            
        </div> 

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">

                    <div class="card mr-2" style="width: 19rem;">
                        <div class="card-body">
                          <img src="{{asset('/storage/cozydrops/sprinter.jpg')}}" alt="" class="car-image">
                          <h6 class="card-subtitle mb-2 text-muted mt-1">Mercedes Sprinter Van</h6>
                        </div>
                    </div>
                  
                    
                </div> 

            </div>
          </div>
        
   
    </div>

    <br>

    <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
                    <img src="{{asset('/storage/cozydrops/logo.png')}}" width="200px" height="70px"  alt="" class="">
                   
                </div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Fleet</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Contact</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 text-white">
					<h4>Socials</h4>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
						<li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
						<li><a href="#"><i class="fa fa-yelp"></i>  Yelp</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<p class="text-white">
                        Cozydrops provides premium and comfortable 24/7 car rental service. We are eager to provide luxurious, secure and best car renting experience considering customer value is our prior goal, therefore We mainly focus on every small detail to provide maximum satisfaction to our customers.
                        We provide vehicles of almost all categories with professionally trained and well-mannered drivers. We offer cars of campaigns, parties, meetings, long routes and tours, festivals and daily routine.
                    </p>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">Powered by <a href="https://madinc.me/" target="_blank" >MADINC</a> © All right Reversed.<a class="text-green ml-2" href="https://www.cozydrops.com" target="_blank">Cozydrops</a></p>
                    
                </div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

</body>

<style>

html, body {
        font-family:'Times New Roman', Times, serif;
    max-width: 100%;
    overflow-x: hidden;
    
}
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

.form-style{
  border-radius: 18px;
  background-color:rgba(255, 255, 255, 0.507);
  

}
.form-style:hover{
  background-color:rgba(255, 255, 255, 0.541);
  box-shadow: 0 8px 18px 0 rgba(0, 0, 0, 0.582), 0 16px 40px 0 rgba(0, 0, 0, 0.493);
  border-radius: 24px;
 
  
}


.form-bg-cover{
    background: url(/storage/cozydrops/atlanta.jpeg);
    background-size: cover;
    color: rgb(0, 0, 0);

}

.service-image{
   
    height:150px;
}

.card-body-service{
    height: 170px;
    font-family:'Times New Roman', Times, serif;
}
.car-image{
    width:260px;
    height:185px;
}

.carousel-item {
  height: 90vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.shadow{
  box-shadow: 0 16px 32px 0 rgb(121, 112, 112), 0 16px 40px 0 rgba(163, 157, 157, 0.808);
  border-radius: 20px;


}





    /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #cc0202;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #cc0202 !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}


</style>

{{-- <script>
  if(document.getElementById("gridRadios1").checked) {
    document.getElementById('gridRadios1disable').disabled = true;
}
if(document.getElementById("gridRadios2").checked) {
    document.getElementById('gridRadios2disable').disabled = true;
}
</script> --}}

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
</script>

  
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>