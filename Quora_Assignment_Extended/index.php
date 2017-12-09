<!DOCTYPE html>
<html>
<head>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<link rel = "stylesheet"
   type = "text/css"
   href = "login.css" />
<link rel = "stylesheet"
   type = "text/css"
   href = "myStyle.css" />  
   
   
   <script>
	 var count=1;
	 var count2=1;
	 var count3=1;
	 var count4=1;
   function setColor1(){
 
    var property = document.getElementById("btn");
    if (count == 0){
        property.style.backgroundColor = "#C32D20"
		document.getElementById("btn").value="Upvoted"
        count=1;        
    }
    else{
        property.style.backgroundColor = "#269053"
        count=0;
    }

}
	   function setColor2(){
 
    var property = document.getElementById("btn2");
    if (count2 == 0){
        property.style.backgroundColor = "#C32D20"
		document.getElementById("btn").value="Upvoted"
        count2=1;        
    }
    else{
        property.style.backgroundColor = "#269053"
        count2=0;
    }

}
   function setColor3(){
 
    var property = document.getElementById("btn3");
    if (count3 == 0){
        property.style.backgroundColor = "#C32D20"
		document.getElementById("btn").value="Upvoted"
        count3=1;        
    }
    else{
        property.style.backgroundColor = "#269053"
        count3=0;
    }

}
   function setColor4(){
 
    var property = document.getElementById("btn4");
    if (count4 == 0){
        property.style.backgroundColor = "#C32D20"
		document.getElementById("btn").value="Upvoted"
        count4=1;        
    }
    else{
        property.style.backgroundColor = "#269053"
        count4=0;
    }

}
</script>
<script>

      function myMap() {
        var myLatLng = {lat: 28.452, lng: 77.696}; 

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'placeQuestion'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-FEhFON5XE48cR9LgPX3lAC3IwOjLr4I&callback=myMap">
    </script>


<style>
header, footer {
    padding: 1em;
    color: white;
    background-color: grey;
    clear: left;
    text-align: center;
}
nav {
    float: left;
    max-width: 200px;
	margin-top: -50px;
    margin-left: -20px;
    padding: 2.7em;
    background-color: #FAFAFA;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}
nav2 {
    float: right;
    max-width: 170px;
    margin: 0;
    padding: 3em;
    background-color: white;
}
nav2 ul {
    list-style-type: none;
    padding: 0;
}
   
nav2 ul a {
    text-decoration: none;
}
article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: hidden;
    background-color: white;
}
        button{
            margin-left: 20px;
            border: none;
            background-color: #FAFAFA;
            font-size: 19px;
            /*cursor: pointer;*/
        }
		button2{
            margin-left: 20px;
            border: none;
            background-color: green;
            font-size: 19px;
            /*cursor: pointer;*/
        }
</style>
</head>
<body  style=" margin: 0 auto; padding: 0; border-collapse: collapse; background:white">
    <div style="position: fixed; height: 10%; width: 100%; margin-top: -15px; background: #F9CB97; box-shadow: 1px 1px 1px 1px #EAEEF5">
    <div style="text-align:center"><a href="" style="text-decoration:none"><h1 style="color: #E13918">Quora </h1>
	</a>
	<input type="text" placeholder="Search Quora" style = "margin-top:-30px;margin-left:1100px"></input>
	</div>





<nav>
  <ul>
    <li style = "width:100px;font-size:22px; color:red">Trending Stories</li>
	<br>
	<li style = "width:100px;font-size:14pxl color: grey" onclick= "document.getElementById('Delhi').style.display='block', document.getElementById('UP').style.display='none'" ><a href="#">DELHI</a></li>
	<li style = "width:100px;font-size:14px" onclick= "document.getElementById('UP').style.display='block', document.getElementById('Delhi').style.display='none'" ><a href="#">U.P.</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">CHENNAI</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">BANGLORE</a></li>
  </ul>
   <ul>
    <li style = "width:100px;font-size:22px; color:red">Recommended stories</li>
	<br>
	<li style = "width:100px;font-size:14pxl color: grey"><a href="#">Bollywood</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">Sports</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">Education</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">Entertainment</a></li>
  </ul>
<!-- <ul>
    <li style = "width:100px;font-size:22px; color:red">Trending stories</li>
	<br>
	<li style = "width:100px;font-size:14pxl color: grey"><a href="#">Government</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">Guru Ram Rahim</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">A magician</a></li>
	<li style = "width:100px;font-size:14px"><a href="#">Smartphones</a></li>
  </ul>
-->
  </nav>

<nav2>
  <ul>
            <li><button class = "profile-buttons" type="button" style="color: #71740E"><img src="https://image.flaticon.com/icons/png/512/46/46395.png" height= "20px">Answer</button></li>
            <li><button class = "profile-buttons" type="button" style="color: #71740E"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/194977-200.png" height= "20px">Notifications</button></li>
            <li><button class = "profile-buttons" type="button" style="color: #71740E"  onclick="document.getElementById('id01').style.display='block'"><img src="https://maxcdn.icons8.com/Share/icon/Users//user_male_circle_filled1600.png" height= "20px">Login</button></li>
			<li><button class="aq"; type="button">Ask Question</button></div></li>
			
  </ul>
</nav2>
<br><br><br>
<div id="googleMap" style="height:200px;width:60%;padding:40px; margin-left:180px" float = "center"></div>
<br><br><br>
<script src="Map.js" type="text/javascript"></script>
<!-- <article> -->
<div id= "Delhi" style="display:none">

<?php
    
$servername = "localhost";  
$username = "root";  
$password = ""; 
$db = "quora";
$tbl_name="question";	
$conn = mysqli_connect("$servername" , "$username" , "$password","$db") or die(mysqli_error());  

$sql = "SELECT ques_num, question, answer FROM delhi";

$res = mysqli_query($conn,$sql);
echo "<h2><center>TRENDING STORIES IN DELHI</h2>";
if ($res->num_rows > 0) {
    // output data of each row
	while($row=mysqli_fetch_assoc($res)){
	echo <<<END
				<article>
				<h1>Question $row[ques_num]: $row[question]</h1>
				<p>Answer: $row[answer]</p>
				<button type="button" id = "btn" style="color: #71740E; width: 70px; background-color: #C32D20; margin-left: 0px" value = "Upvote" onclick="setColor1('button', '#269053')"><img src="https://cdn3.iconfinder.com/data/icons/iconano-random-stuff/512/147-ThumbsUp-128.png" height= "20px"></button>
				<hr>
				</article>
END;
}
}	
   ?>
</div>
<div id= "Delhi" style="display:none">

<?php
    
$servername = "localhost";  
$username = "root";  
$password = ""; 
$db = "quora";
$tbl_name="question";	
$conn = mysqli_connect("$servername" , "$username" , "$password","$db") or die(mysqli_error());  

$sql = "SELECT ques_num, question, answer FROM delhi";

$res = mysqli_query($conn,$sql);
echo "<h2><center>TRENDING STORIES IN DELHI</h2>";
if ($res->num_rows > 0) {
    // output data of each row
	while($row=mysqli_fetch_assoc($res)){
	echo <<<END
				<article>
				<h1>Question $row[ques_num]: $row[question]</h1>
				<p>Answer: $row[answer]</p>
				<button type="button" id = "btn" style="color: #71740E; width: 70px; background-color: #C32D20; margin-left: 0px" value = "Upvote" onclick="setColor1('button', '#269053')"><img src="https://cdn3.iconfinder.com/data/icons/iconano-random-stuff/512/147-ThumbsUp-128.png" height= "20px"></button>
				<hr>
				</article>
END;
}
}	
   ?>
</div>    
<div id= "UP" style="display:none">
<?php
    
$servername = "localhost";  
$username = "root";  
$password = ""; 
$db = "quora";
$tbl_name="up";	
$conn = mysqli_connect("$servername" , "$username" , "$password","$db") or die(mysqli_error());  

$sql = "SELECT ques_num, question, answer FROM up";

$res = mysqli_query($conn,$sql);
echo "<h2><center>TRENDING STORIES IN Uttar Pradesh</h2>";
if ($res->num_rows > 0) {
    // output data of each row
	while($row=mysqli_fetch_assoc($res)){
	echo <<<END
				<article>
				<h1>Question $row[ques_num]: $row[question]</h1>
				<p>Answer: $row[answer]</p>
				<button type="button" id = "btn" style="color: #71740E; width: 70px; background-color: #C32D20; margin-left: 0px" value = "Upvote" onclick="setColor1('button', '#269053')"><img src="https://cdn3.iconfinder.com/data/icons/iconano-random-stuff/512/147-ThumbsUp-128.png" height= "20px"></button>
				<hr>
				</article>
END;
}
}	
   ?>
</div>   

<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <h1 style="text-align:center;color:#C10909" >Quora LOGIN </h1>
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me </input>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
<!-- Sign Up Form -->

<!--End -->  
</div>
<!--<footer>Made by Lakshay & Co.</footer>-->

<script>
// Get the modal

var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-FEhFON5XE48cR9LgPX3lAC3IwOjLr4I&callback=myMap"></script>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<br><br><br>	<footer>Copyright &copy; Lakshay Goel</footer>

</body>
</html>
