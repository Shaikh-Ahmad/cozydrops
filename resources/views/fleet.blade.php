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
    <title>cozydrops-Fleet</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light fixed-top " style="background-color: #cc0202 !important">
        <div class="container" >
        
          <a class="navbar-brand text-white " style="font-size:22px" href="#" > <img src="{{asset('/storage/cozydrops/logo.png')}}" width="70px" height="20px" alt="" >   Cozydrops</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link text-white" href="/"><i class="fa fa-home"></i> Home</a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link text-white" href="#"><i class="fa fa-car"></i> Fleet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa fa-phone"></i> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    
  
    <div class="container mt-4 mb-4" style="margin-top: 100px !important">
        <div class="d-flex justify-content-center ">
        
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

.form-bg-cover{
    background: url(/storage/cozydrops/atlanta.jpeg);
    /* opacity: 0.5; */
    /* background: no-repeat; */
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
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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