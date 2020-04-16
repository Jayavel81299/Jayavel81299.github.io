<html>
<body>
<table width=50% border>
<tr><th>s.no</th><th>dishes</th><th>price</th></tr>
<tr><td>1</td><td>veg-biriyani</td><td>90</td></tr>
 <tr><td>2</td><td>pongal</td><td>20</td></tr>
<tr><td>3</td><td>idle</td><td>5</td></tr>
<tr><td>4</td><td>parotta</td><td>8</td></tr>
<tr><td>5</td><td>poori</td><td>10</td></tr>
</table>
<br>
<h3><i><marquee><font color="yellow">Online booking available in  my hotel</font></marquee></i></h3>
<h1><em><font size=3 color="white" > welcome Raddisson Hotel</font></em>
<h3><font color="red">Items:</form></h3>
<form>
<select type ="foods">
<option> </option>
<option>pongal</option>
<option>veg-biriyani</option>
<option>parotta</option>
<option>poori</option>
<option>dhosai</option>
</select>
<br>
<input type="submit" id="jaii" onclick="ss()">
<script type="text/javascript">
	function ss(){
		alert("order success!");
	}
</script>
</form>
<b><center><p><font color="yellow">WELCOME!</font></p></center></b>
<style>
	#jaii {
background-color:#4CAF50;
color:black;
border:2px solid black;
text-align:center;
text-decoration:none;
padding:5px 10px;
display:inline-block;
font-size:15px;
margin:8px 4px;
cursor:pointer;
}
	th{
		color:red;
	}
	tr{
		color:white;
	}
	 body{
    background-image: url("food.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
  }
a {
text-decoration:none;
display:inline-block;
padding: 8px 12px;
}
a:hover {
background-color:#ddd;
color:black;
}
.previous {
background-color:#f1f1f1;
color:black;
}
.next {
background-color:#4CAF50; 
color:black;
</style>
<center><a href="main.php" class="previous">&laquo; previous></a>
<a href="non-vegitable.php" class="next">&raquo;next></a>
</center>
</body>
</html>