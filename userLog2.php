<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colebro Search</title>
    
    <style>
        a{
            text-decoration: none !important;
        }
		
		#d1link {text-align:center;    
        display:block;}
		
    </style>
    
</head>
<body style="background-color:#ffffff;">


 
 <div id='d1' style="position:fixed; top:0px; left:0px; z-index:1"> 
    <canvas id="myCanvas">
    </canvas>
    </div>

    <div id='d2' style="position:fixed; top:-15px; left:10px; z-index:1"> 
        <a href="userLog2.php"><h1 style="color:#ffffff;  font-family:verdana; font-size: 40px;">COLEBRO</h1></a>
    </div>
	
	<div id='d4' style="position:absolute; top:80px; right:3%; z-index:1"> 
        <a href="logout.php"><h1 name style="color:#000000; font-family:arial; font-size:18px; text-decoration: underline;">Logout</h1></a>
    </div>
	
	<div id='d5' style="position:absolute; top:120px; left:3%; z-index:1"> 
        <a href="userLog2.php"><h1 name style="color:#000000; font-family:arial; font-size:18px; text-decoration: underline;">Search</h1></a>
    </div>
	
	<div id='d6' style="position:absolute; top:120px; left:10%; z-index:1"> 
        <a href="mylist.php"><h1 name style="color:#000000; font-family:arial; font-size:18px; text-decoration: underline;">My List</h1></a>
    </div>
	
	<div id='d4' style="position:absolute; top:120px; left:17%; z-index:1"> 
        <a href="upload.php"><h1 name style="color:#000000; font-family:arial; font-size:18px; text-decoration: underline;">Upload</h1></a>
    </div>
	
	<div id='d4' style="position:absolute; top:120px; left:24%; z-index:1"> 
        <a href="account.php"><h1 name style="color:#000000; font-family:arial; font-size:18px; text-decoration: underline;">Account</h1></a>
    </div>
	

	  <div id='colebro' style=" position: absolute; top:120px; left:28%;z-index:1"> 
        <a href="userLog2.php"><h1 style="color:#31a7e6;  font-family:verdana; font-size: 100px;">COLEBRO</h1></a>
    </div>

	
	<form action="search.php" method="post"> 
    
		
		
    <div id='d8' style="position:absolute; top:310px; left:370px; z-index:1"> 
    <input id="searh" name="search" size="71">
    </div>
	
	<div id='d11' style="position:absolute; top:340px; left:510px; z-index:1"> 
	<input type="radio" name="searchC" value="content"> By Content<br>
	</div>
	<div id='d12' style="position:absolute; top:340px; left:610px; z-index:1"> 
    <input type="radio" name="searchC" value="filename"> By File Name<br>
	</div>
    
    <div id='d10' style="position:absolute; top:370px; left:600px; z-index:1"> 
    <input type="submit" value="Search">
    </div>
    
    </form>
	
	
    
    <script>
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        ctx.canvas.width  = window.innerWidth;
        ctx.canvas.height = window.innerHeight;
        ctx.fillStyle = "#31a7e6";
        ctx.fillRect(0,0,3000,70);
        
    </script>
	
	<div id='d3' style="position:absolute; top:100px; left:2%; z-index:1"> 
    <label style="font-family: arial" for="usr">Active User: <?php session_start(); echo $_SESSION["activeuser"]?> </label>
    </div>
	
		<?php 
	if($_SESSION["activeuser"]==NULL)
		header ("Location: index.php");
	?>
   
    
</body>
</html>