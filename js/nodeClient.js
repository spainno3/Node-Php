var socket = io.connect( 'http://localhost:8080' );

$( "#messageForm" ).submit( function() {
	var nameVal = $( "#nameInput" ).val();
	var msg = $( "#messageInput" ).val();
	
	socket.emit( 'message', { name: nameVal, message: msg } );
	
	// Ajax call for saving datas
	$.ajax({
		url: "./ajax/insertNewMessage.php",
		type: "POST",
		data: { name: nameVal, message: msg },
		success: function(data) {
			var actualContent = $( "#messages" ).html();
			var newMsgContent = '<li> <strong>' + nameVal + '</strong> : ' + msg + '</li>';
			var content = newMsgContent + actualContent;
			
			$( "#messages" ).html( content );
		}
	});
	
	return false;
});

socket.on( 'message', function( data ) {
	$('.new-message').html(data.message);
	$('#myModal').modal('show');
	var actualContent = $( "#messages" ).html();
	var newMsgContent = '<li> <strong>' + data.name + '</strong> : ' + data.message + '</li>';
	var content = newMsgContent + actualContent;
	
	$( "#messages" ).html( content );
});