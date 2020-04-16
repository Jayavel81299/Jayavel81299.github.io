<html>
<head>
<title>non-vegitarian</title>
<body bgcolor="yellow">
<b><font color="yellow">categories</font></b>
<table border="1">
<tr>
<th>s.no</th>
<th>items</th>
<th>price</th>
</tr>
<tr>
<td>1</td>
<td>chicken-biriyani</td>
<td rowspan=3>90</td>
</tr>
<tr>
<td>2</td>
<td>egg-rice</td>
</tr>
<tr>
<td>3</td>
<td>mutton</td>
</tr>
<tr>
<td>4</td>
<td> aamblet</td>
<td>20</td>
</tr>
<tr>
<td>5</td>
<td>chicken noodles</td>
<td>90</td>
<tr>
</table>
<br>
<b><em><font color="red">Order Now!!</font></em></b>
<br>
<select type="list">
<option></option>
<option>chicken-biriyani</option>
<option>egg-rice</option>
<option>mutton</option>
<option>aamblet</option>
<option>chicken-noodles</option>
</select>
</body>
<br>
<style>
	th{
		color:red;
	}
	tr{
		color:white;
	}
.button {
background-color:#4CAF50;
color:black;
border:2px solid black;
text-align:center;
text-decoration:none;
padding:5px 10px;
display:inline-block;
font-size:14px;
margin:8px 12px;
cursor:pointer;
}
</style>
</head>
<body>
<button class="button" onClick="ourFunction()">order</button>
<script type="text/javascript">
	function ourFunction(){
		alert("order successfully!");
	}
</script>
<br>
<br>
<br>
<br><br>
<center><b><em><font color="yellow">THANKING YOU!</font></em></b></center>
<br>
<style>
	body{
    background-image: url("food.jpg");
    background-repeat: no-repeat;
    background-attachment: scroll;
  }
a {
text-decoration:none;
display:inline-block;
padding:8px 16px;
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
color:white;
</style>
<center><a href="vegitable.php" class="previous">&laquo;previous></a>
<a href ="valli.php" class="next">&raquo;next></a></center>
</body> 
</html>