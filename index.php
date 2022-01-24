<?php
	try{
		if (!file_exists('anti_ddos/start.php'))
			throw new Exception ('anti_ddos/start.php does not exist');
		else
			require_once('anti_ddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">'.
			'The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load '.
			'properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>

<?php
 try{
  if (!file_exists('anti_ddos/start.php'))
   throw new Exception ('anti_ddos/start.php does not exist');
  else
   require_once('anti_ddos/start.php'); 
 } 
 //CATCH the exception if something goes wrong.
 catch (Exception $ex) {
  // et's print a message saying there is an error
  echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the 'catch Exception' to see what happening!</div>';
  //Print out the exception message.
  //echo $ex->getMessage();
 }
 // cp -r AntiDDOS-system/ /var/www/html/
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/flottant.css">
		<title>Example Webpage</title>
	</head>
	<body>
		<center>
			<div class="container">
				<a href="https://github.com/Sanix-Darker">
					<img src="https://1.bp.blogspot.com/-pi3te7XWuN4/Xvbe7k5UK3I/AAAAAAAAIes/D0oKLmXs21QMkQGn3iN-CHjAtFoU6c9-ACLcBGAsYHQ/s640/logo%2Bblog.png" style="border-radius: 100%;width:200px;"><br>
					Anti DDos by CaraWudy 
				</a>
				<p>This web Site is protected by AntiDDOS-System PHP.</p>
			</div>
		</center>
	</body>
</html>
