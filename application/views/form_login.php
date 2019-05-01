<html>
<head>
<meta charset="utf-8">
<title>Bengkel | PT. RAJAWALI</title>
<link href="<?php echo base_url().'assets/css/' ?>login_style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
 
<body>
	<div class="main">
		<div class="user">
			
		</div>
		<div class="login">
			<div class="inset">
					<?php echo form_open('auth/login'); ?>
					 <center><div id='loginText'>LOGIN</div><br>
					 <span><div id='titleTextLogin'>BENGKEL PT. RAJAWALI</div></span><br></center>		
			     <div>
						<span><label>Username</label></span>
						<span><input type="text" name="username" class="textbox"></span>
					 </div>
					 <div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" class="password"></span>
					 </div>
					<div class="sign">
						<div class="submit">
						  <input type="submit" name="submit" value="LOGIN" >
						</div>
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>