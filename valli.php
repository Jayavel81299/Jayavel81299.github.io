
<!DOCTYPE html>
<html>
<head>
<title>Hotel web</title>
</head>
<div class="center">
<p class="awesome">Raddisson<br>koothanur-607 201</p>
</div>
<style>
  body{
    background-image: url("jaii.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
  }
.center {
margin: 0 auto;
}
.awesome {
font-family:futura;
font-style:italic;

width:100%;

margin: auto 0;
text-align:center;

color:#313131;
font-size:45px;
font-weight:bold;
position:absolute;
-webkit-animation:colorchange 15s infinite alternate;
}
@-webkit-keyframes colorchange {

0% {
color:blue;
}
10% {
color:#Be44ad;
}
20% {
color:#1abc9c;
}
30% {
color:#d35400;
}
40% {
color:#blue;
}
50% {
color:#34495e;
}
60% {
color:#blue
}
70% {
color:#2980b9;
}
80% {
color:#f1c40f;
}
90% {
color:#2980b9;
}
100% {
color:pink;
    }
}
</style>
<br>
<br><br><br><br><br>
<hr color="green">
<table width=100%>
<tr><th><a href="main.php" target="_self" style="color:yellow;font-weight: bold;text-decoration: none">Rooms</a></th>
<th><a href="vegitable.php"style="color:yellow;font-weight: bold;text-decoration: none">vegitable</th>
<th><a href="non-vegitable.php"style="color:yellow;font-weight: bold;text-decoration: none">non-vegitable</th></tr></table>
<h3><marquee><em><font size=4 color="orange">welcome to Raddisson Hotel</font></marquee></em></h3>
<u><b><p><i><font size=5 color="pink">Radisson Blu is designed for you</font></i></p></b></u>
<em><p><font size=4 color="white">
Choose stylish and elegant hotels that are created with you in mind.<br> Enjoy a warm welcome with our inviting ambience and thoughtful touches designed to please.<br> Let our attentive team take care of the small details that make a big difference to your stay in the most desirable of destinations,<br> which combine convenience and individuality.</font></p></em>
<form>
<h3><i><font color="#C0C0C0">feedback:</font><input type="feedback"></i></h3>
<style>
.button {
background-color:#f44336; /*red */
border : 2px solid black;
color : white;
padding : 10px 20px;
text-align: center;
text-decoration: underline;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
</style>
<button class="button" onClick="haii()">send</button>
<script type="text/javascript">
  function haii(){
    alert("feedback sended..")
  }
</script>
</form>
</head>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: blue;	
}
</style>
</head>
<body>

<h2><u><font color="white">Star Rating</font></u></h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
</body>
<br><br>

<style>
                   body { 
  background-color:pink;
  color:yellow;
                 }
                   .box {
	background-color:white;
	color:black;
	border:2px solid green;
	border-radius:10px;
                   }
                  </style>
                  <script>
                  function hidee(){
if(document.getElementById("chec").checked){
document.getElementById("details").style.display="none";
	}else{
document.getElementById("details").style.display="block";
	}
}
        </script>
</head>
<body>
<input type="checkbox" id="chec"
onClick="hidee()" class="chec"><b><em><font color="blue">click Hotel details!!!</font></em></b>
<fieldset id ="details" class="box">
  <div style="background-image: url('hotel.jpg'); width: 700px; height: 340px">
<em><h3><font color="yellow"><marquee direction="left">welcome our valli vilas hotel!!</marquee></font></h3></em>
<div class="top-left"><h4><font color="red">Place  :</font><font color="white">koothanur</font></h4></div>
<h4><img src="download.png" width="12 px";>:<font color="white">9080563251</font></h4></a>
<a href="linkimage.php"/>
<img src="jaya2.jpg" width=100 height=100></img></br></a>
<center><button onClick="myFunction()">welcome</button>
<a href="login.php ?>"><p id="demo" style="color:yellow;"></p></center></a>
<script>
function myFunction() {
document.getElementById("demo").innerHTML="logout";
}


</script>
</fieldset>
</div>
</body>
</html>