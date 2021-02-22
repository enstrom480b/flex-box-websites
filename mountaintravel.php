<html>
<body>
<header>
<h2><a href="#">Mountain Travel</a></h2>
<nav>
<li><a href="#">Tours</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>

</nav>
</header>

<section class="hero">
<div class="background-image">
<div class="hero-content-area">
<h1>Mountain Travel</h1>
<h3>Unmissible adventure tours around the world</h3>
<a href="#" class="btn">contact us now</a>
</div>
</div>
</section>
<section class="destinations">
<h3 class="title">some of our destinations:</h3>
<p>tired of the ocean?are the plains too plain? come along with us on one of our mountain adventures
here are some pictures from people who have had elelvated experience with us
</p>
<hr></hr>
<ul class="grid">
<li class="small small1"></li>
<li class="large large1"></li>
<li class="large large2"></li>
<li class="small small2"></li>
</ul>
</section>
<section class="packages">
<h3 class="title">Tour Packages</h3>
<p>we offer a variry of packages.wether you've climbed everet
 or dont even know what a mountain is we've got the best
 perfection for you</p>
 <hr></hr>
 <ul class="grid">
 <li>
 <i class="fa fa-compass fa-4x"></i>
 <h4>Guided Trips</h4>
 <p>Looking for the complete experience?take a tour with one of our experts.theyll show you secrets that youre likely to miss otherwise</p>
 </li>
  <li>
 <i class="fa fa-camera-retro fa-4x"></i>
 <h4>Photo Trips</h4>
 <p>want to experience natures beauty without all of that anoying exercise ? take a photo tour on one of our mountain buses</p>
 </li>
  <li>
 <i class="fa fa-bicycle fa-4x"></i>
 <h4>Biking Trips</h4>
 <p>if Bicycles are more your speed ,consider taking a tour through one of our mountain bike paths
 we'll provide the bikes,and lunch too!</p>
 </li>
  <li>
 <i class="fa fa-flag-checkered fa-4x"></i>
 <h4>Racing Trips</h4>
 <p>Got a  competitive spirit?sign up one of our mountain marathons!try to reach the summit before anyone else</p>
 </li>
 </ul>
 
</section>
<section class="testimonials">
<h3 class="title">Testimonials from our customers</h3>
<hr>
<p class="quote"><p><em>wow!this</em> tour me realize how much i love mountains.after going on one of these tours, i can safely say that they are myu favourite geographic feature.</p>
<p class="author">Kyle Simpson</p>
<p class="quote"><p><em>wow!this</em> tour me realize how much i love mountains.after going on one of these tours, i can safely say that they are myu favourite geographic feature.</p>
<p class="author">Simona Davies</p>
<p class="quote"><p><em>wow!</em>this tour me realize how much i love mountains.after going on one of these tours, i can safely say that they are myu favourite geographic feature.</p>
</section>

<section class="contact">
<h3 class="title">Learn More</h3>
<p>want to know about our upcoming mountain-related events,or come to one of our mixers? jsut sign up 
for our mailing list .no spam from us,we promise!</p>
<hr>
<form>
<input type="email" placeholder="email">
<a href="#" class="btn">subscribe now</a>
</form>
</section>
</body>

<footer>
<p>iamges courtesy of</p>
<p>why are you reading this</p>
</footer>
</html>
<style>
footer{
display:flex;
align-items:center;
justify-content:space-around;
background-color:#607d8b;
color:#fff;
padding:20px 0;
}
footer p{
	
text-transform:uppercase;
font-size:14px;
opacity:3;
align-self:center;	
}
.contact form{
display:flex;
align-items:center;
justify-content:center;
flex-wrap:wrap;
width:60%;
}
.contact form input{
padding:15px;
margin-right:30px;
font-size:18px;
color:#555;
flex:1;	
	
}
.contact form .btn{
padding:18px 42px;	
}


.testimonials .quote{
font-size:22px;
font-weight:300;
line-height:1.5;
margin:30px 0 25px;
	
}
.packages .grid li{
padding:50px;
flex-basis:50%;
text-align:center;
}
.packages .grid li i{
	color:#8c9eff;
}
.packages .grid li h4{
font-size:30px;
margin:25px 0;
}
.background-image{
background-image:url('imagefolder/beach.jpeg');
background-size:cover;
background-position:center;
}
.small1{
background-image:url('imagefolder/mountain1.jpg');
}
.small2{
background-image:url('imagefolder/mountain2.jpg');
}
.large1{
background-image:url('imagefolder/mountain3.jpg');
}
.large2{
background-image:url('imagefolder/mountain4.jpg');
}
ul{
list-style-type:none;	
}
.grid{
width:100%;
display:flex;
flex-wrap:wrap;
justify-content:center;
}
hr{
width:250px;
height:3px;
background-color:#3f51b5;
border:0;
margin-bottom:50px;	
}
*{
margin:0;
padding:0;
box-sizing:border-box;	
}
html{
font:normal 16px sans-serif;
color:#555;	
}
nav{
list-style:none;
}
a{
text-decoration:none;	
opacity:0.75; 
color:#fff;
}
header{
position:absolute;
width:100%;
display:flex; 
justify-content:space-between;
align-items:center;	
padding:35px 100px 0;
animation:1s fadein 0.5s forwards;
color:#fff;
}
header h2{
font-family:'Quicksand',sans-serif;	
}
header nav{
display:flex;
margin-right:-15px;
}
header nav li{
margin:0 15px;	
}
@keyframes fadein{
100%{
opacity:1;
}
}
a{	
text-decoration:none;
opacity:0.75;	
}
a:hover{
opacity:1;	
}
a.btn{
text-transform:uppercase;	
font-weight:bold;
text-align:center;
background-color:#3f51b5;
opacity:1;
}
section{
display:flex;
flex-direction:column;
padding:100px 80px;
align-items:center;	
}

.hero{
position:relative;
justify-content:center;
text-align:center;
min-height:100vh;	
}

.hero .background-image{
position:absolute;
top:0;
left:0;	
width:100%;
height:100%;
background-size:cover;
z-index:1;
background-color:#80a3db;
color:#fff;
}
.hero h1{
font:bold 60px "Opens Sans",sans-serif;
margin-bottom:40px;	
}
.hero h3{
font:normal 28px "Open Sans",sans-serif;
margin-bottom:40px;	
}
.hero a.btn{
padding:20px 46px;	
}
section h3.title{
text-transform:capitalize;
font:bold 32px "Open Sans",sans-serif;
margin-bottom:30px;
text-align:center;
}

section p{
max-width:775px;
line-height:2;
padding:0 20px;
margin-bottom:30px;
text-align:center;
}
.destinations .grid li{
height:350px;
padding:20px;
background-clip:content-box;
background-size:cover;
background-position:center;
}
.destinations .grid li.small{
flex-basis:30%;
}

.destinations .grid li.large{
flex-basis:70%;
}

section:not(.hero):nth-child(even){
	background-color:#f5f5f5;
	
}


</style>