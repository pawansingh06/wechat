<!DOCTYPE html>

<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
video {
  max-width: 100%;
  height: auto;
margin-left: 0px;
}
</style>

	<title>Leaflet maps</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



<style>
#mapid { width: 80%; 
	height: 450px;
	padding: 8px; 
margin:10px 15px;
/*position: absolute;*/
left: 11%;
border-radius: 8px;

}

</style>
<style >
	.container{
		left: 7%;
	}
</style>
<style>
.parallax {
  /* The image used */
  background-image: url("back.jpg");

  /* Set a specific height */
  min-height: 60px; 
  opacity: 0.2;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

</head>
<body style="background-color: rgb(17, 4, 34); background-position: center;



" >
<div class="parallax"></div>

   <div style="

   min-width: 300px: 
   max-width:800px;
   margin: auto;
   padding: 10px;
   height: 700px;
   border: 2px solid rgb(204, 0, 102);


   ">
   <h1 style="text-align: center;color:rgb(204, 0, 102); "> <em>ABOUT US</em></h1> 

   <p style="text-align: center;color:rgb(204, 0, 102); "><em>Our services help people connect, and when they’re at their best, they bring people closer together. <br>Our tools level the playing field so businesses grow, create jobs and strengthen the economy</em></p>




   

  <style>
  	div.gallery {
  		margin: 15px;
 
  
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  border-radius: 10px;
  padding: 10px;
  



}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 250px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

  </style> 	

<div class="gallery">
  
    <img src="pawan.jpg" alt="Cinque Terre" width="600" height="400">
  
  <div class="desc">
  	<h4 style="color:rgb(204, 0, 102);">Pawan Singh</h4><br>
  		<p style="color: blue">"Those words are quite literally painted on the walls. It’s a pretty amazing thing—from day one, your voice matters." </p>
  	📧<a href="#">pawan@gmail.com</a> 
  	<p style="color:rgb(204, 0, 102);"> Chief Executive Officer</p>

  	
  </div>
</div>

<div class="gallery">
 
    <img src="vivek.jpg" alt="Forest" width="600" height="400">
    <div class="desc">
  	<h4 style="color:rgb(204, 0, 102);">Vivek Partani</h4><br>
  	<p style="color: blue">" We all want to help our community have the safest and most positive experiences possible." </p>
  	📧<a href="#">vivek@gmail.com</a> 
  	<p style="color:rgb(204, 0, 102);">Creative Strategist</p>


  </div>
</div>

<div class="gallery">
      <img src="ishita.jpg" alt="Northern Lights" width="600" height="400">
 
  <div class="desc">
  	<h4 style="color:rgb(204, 0, 102);">Ishita Patri</h4><br>
  <p style="color: blue">" Help people stay close even when they are far apart privacy will always be ours priority." </p>
  	📧<a href="#">ishita@gmail.com</a> 
  	<p style="color:rgb(204, 0, 102);">Engineering Manager</p>
  	

  </div>
</div>

<div class="gallery">
  
    <img src="sarthak.jpg" alt="Mountains" width="600" height="400">
      <div class="desc">
  	<h4 style="color:rgb(204, 0, 102);">Sarthak Naik</h4><br>
  <p style="color: blue">" We have a responsibility to promote the best of what people can do together by keeping people safe." </p>
  	📧<a href="#">sarthak@gmail.com</a> 
  	<p style="color:rgb(204, 0, 102);">Chief Product Officerr</p>
  	
  </div>

</div>


<p style="text-align: center;color:rgb(204, 0, 102); "><em>At WeChat, we are constantly iterating, solving problems and working together to connect people all over the world. That’s why it’s important that our workforce reflects the diversity of the people we serve. Hiring people with different backgrounds and points of view helps us make better decisions, build better products and create better experiences for everyone.</em></p>
<p style="text-align: center;color:rgb(204, 0, 102); "><em>We work to make technology accessible to everyone, and our business model is ads so our services can be free.</em></p>









   </div>

   <div class="parallax"></div>
   <div class="parallax"></div>


	
	<div id="mapid">

		

	</div>


<!-- container -->
	<!-- <div class="">

<iframe src="https://www.google.com/maps/d/embed?mid=1gOK4-dm-JBHUVx-hBxQw7WucyT9sBSkf" width="420" height="400"></iframe></dir>

		
	</div> -->

	
<!-- <iframe src="https://www.google.com/maps/d/embed?mid=1gOK4-dm-JBHUVx-hBxQw7WucyT9sBSkf" width="620" height="400"></iframe></dir> -->


 <div class="parallax"></div>
   <div class="parallax"></div>




    

 
<div class="video" style="margin-left: 160px;margin-bottom: 20px;font-weight: bold;">

	<div style="margin-left: 80px;margin-top:10px;">
		<button
	 style="background-color:green;
	 width: 90px;
	 border: 2px solid #ccc;
	  margin-top:  10px;
	   border-radius: 7px;
	" onclick="playPause()">PLAY/PAUSE</button>
	<button
     style="background-color:rgb(16, 29, 212);
     border: 2px solid #ccc;
      width: 90px;
	  margin-top:  10px;

	   border-radius: 7px;
	" 
	 onclick="makeBig()">BIG</button>
	<button 
	 style="background-color:rgb(32, 148, 132);
	  width: 90px;
	 border: 2px solid #ccc;
	  margin-top:  10px;

	   border-radius: 7px;
	" 
	onclick="makeSmall()">SMALL</button>
	<button
	 style="background-color:rgb(155, 117, 190);
	  width: 90px;
	 border: 2px solid #ccc;
	 margin-top:  10px;
	   border-radius: 7px;
	" 

	 onclick="makeNormal()">NORMAL</button>
<br><br>
		

	</div>

	
	
	<video id="video1" width="500" controls>
  <source src="videoplay.mp4" type="video/mp4">
  <source src="videoplay.ogg" type="video/ogg">
  
</video>
</div>
<script>
	var myVideo=document.getElementById("video1");
	function playPause() {

		if(myVideo.paused)
			myVideo.play();
			else
				myVideo.pause();
	}
		function makeBig() {

		myVideo.width=1100;

	}
	function makeSmall() {

		myVideo.width=320;
		
	}
		function makeNormal() {

		myVideo.width=450;
		
	}

	

</script>



<div class="parallax"></div>




</body>



<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script src="leaflet.js">
</script>
</html>
