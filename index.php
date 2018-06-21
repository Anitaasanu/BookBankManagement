<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <title>Home page </title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css" >

 <link rel="stylesheet" href="css/style2.css" >
	</head>
	<body>
	<div class="header" style="width:90%;float:left;">
  <img src="images/logo1.jpg" style="width:11%;height:4%;"alt="logo" />
  <div  class="btn-group btn-group-lg" >
        <button class="btn btn-primary btn-block" style="top:25px; right:10%;left:30%;background:#0101A9;text-decoration:none;" type="submit" ><a href="register.php"style="color:white;">Register</a></button>
      </div>
    <h1 class="middle-nav-headache" style="font-family:serif;font-style:italic; font-size:350%;color:#0101A9">Welcome To Book Bank</h1>

     
	 </div>


		  <div  class="btn-group btn-group-lg" >
        <button class="btn btn-primary btn-block" style="top:25px;background:#0101A9" type="submit" ><a href="login.php"style="color:white;">LogIn</a></button>
      </div>


		 <!--<div class="me">
		 <img src="images/58.jpg" style="width:1367px;height:565px;" alt="" />
		 </div> -->

		 <div class="slideshow-container">

<div class="mySlides fade">

  <img src="images/58.jpg" style="width:100%;height:100%; right:10%;">

</div>

<div class="mySlides fade">

  <img src="images/53.jpg" style="width:100%;height:100%;">

</div>

<div class="mySlides fade">

  <img src="images/img3.jpg" style="width:100%;">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
