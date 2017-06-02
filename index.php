<?php 
include_once( dirname( __FILE__ ) . '/include/Database.class.php' );
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		
		<title>Oh yeah</title>
	
		<link rel="stylesheet" href="css/bootstrap.css" />
		<style type="text/css">body { padding-top: 60px; }</style>
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		
		<link rel="stylesheet" href="css/index.css" />
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="index.php">Demo</a>
					
				</div>
			</div>
		</div>
		
		<div class="container">
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">New Message!</h4>
					</div>
					<div class="modal-body">
					  <p>New Message: </p><p class="new-message"></p>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			 </div>
		  </div>
		
			<h1>This is a simple application</h1>
			<p>
				Hello World!
			</p>
			
			<form class="form-inline" id="messageForm">
				<input id="nameInput" type="text" class="input-medium" placeholder="Name" />
				<input id="messageInput" type="text" class="input-xxlarge" placeHolder="Message" />
			
				<input type="submit" value="Send" />
			</form>
			
			<div>
				<ul id="messages">
					<?php 
						$sql = "SELECT id, name, message FROM messages ORDER BY id DESC";
						$result = $conn->query($sql);

						foreach( $result as $message ):
						?>
						<li> <strong><?php echo $message['name']; ?></strong> : <?php echo $message['message']; ?> </li>					
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- End #messages -->
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/node_modules/socket.io/node_modules/socket.io-client/dist/socket.io.js"></script>
		<script src="js/nodeClient.js"></script>
	</body>
</html>