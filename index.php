<?php
// Index file for Collective Memory of WWII Data Visualization
// Ruth Shaffer

//Starts a session so a token can be passed
session_start();
$page_title = "in eleven countries";
$css_reference = "assets/css/index.css";
include("includes/headerIndex.php");?>
<!-- Wrapper -->
<div id="wrapper">
<!-- Banner -->
	<section id="intro" class="main">
		<h4>
			Please log in to view data
		</h4>
		<div id="formWrapper">
			<form action="login.php" method="POST">
				<label>Username: </label> 
				<input type="text" name="username" />
				<br> <label>Password: </label> 
				<input type="password" name="password" />
				<br> 
				<input type="submit" value="Log in" />
			</form>
		</div>
	</section>
<!-- Footer -->
<?php include("includes/footer.html");?>
</div>
<!-- Scripts-->
<?php include("includes/scripts.html");?>
</body>
</html>
