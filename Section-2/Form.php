<h1>Form Example</h1>
<form action="#" method="POST">
	  <span>Email:
			<input type="email" name="email">
		</span>
		<?php
			if(isset($_POST["login"])) {
				$email = $_POST['email'];
				if (!$email) echo "<span style='color: red;'>Enter your email</span>";
				else echo "<span style='color: green;'>OK !!!!</span>";
			}
		?>
		<br />
		<span>User Name:
			<input type="text" name="username" require>
		</span>
		<?php
			if(isset($_POST["login"])) {
				$username = $_POST['username'];
				if (!$username) echo "<span style='color: red;'>Enter your username</span>";
				else echo "<span style='color: green;'>OK !!!!</span>";
			}
		?>
		<br />
		<span>Password:
			<input type="password" name="password" require>
		</span>
		<?php
			if(isset($_POST["login"])) {
				$password = $_POST['password'];
				if (!$password) echo "<span style='color: red;'>Enter your username</span>";
				else echo "<span style='color: green;'>OK !!!!</span>";
			}
		?>
		<br />
		<span>
			<input type="submit" name="login" value="Login">
		</span>
</form>
<?php

?>