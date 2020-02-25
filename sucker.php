<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>
		<h3> Your information has been recorded</h3>
		<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST["name"]=="" || $_POST["section"]=="" || $_POST["card"]=="" || $_POST["cc"]==""){
			?>
		<h1> Sorry</h1>
		<h3> You did not fill the form completely</h3>
		<a href="webpage.php" > Go back </a>
		<?php 
		}
		else {
		$name = $_POST['name'] ;
		file_put_contents("sucker.txt", $name,FILE_APPEND);
		$semicolon=';';
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
		$section= $_POST['section'] ;
		file_put_contents("sucker.txt", $section,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
		$card=$_POST['card'] ;
		file_put_contents("sucker.txt", $card,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
		$cc= $_POST['cc'];
		file_put_contents("sucker.txt", $cc,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
		$newline="<br>";
		file_put_contents("sucker.txt", $newline,FILE_APPEND);?>
		<dl>
			<dt> Name</dt>
			<dd> <?= $name?>  </dd>
		</dl>

		<dl> 
			<dt> Section </dt>
			<dd> <?= $section ?></dd>
		</dl>

		<dl>
			<dt> Card </dt>
			<dd> <?= $card ?>  <?= "(" . $cc . ")"?>  </dd>
	<pre> Here is the database <br/>
<?php echo file_get_contents("sucker.txt");
		 ?>
		 	<a href="webpage.php" > Go back </a>
	</pre>
			
		</dl>

<?php
}
}?> 
		
		
	</body>
</html>  