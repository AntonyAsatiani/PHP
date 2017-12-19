
$(function (){


 var socket = io.connect('http://localhost:3000');

 $('form').submit(function(){

 	
 	if($('#send_message').val() == '')
 		{
 			return false;
 		}
 		else
 		{
 			socket.emit('chat message', $('#send_message').val());
 		}
 	$('#send_message').val('');
 	return false;

 });
socket.on('chat message',function(msg){
	$('.list-unstyled').append($('<li>').text(msg));
	$('.list-unstyled').append($('<h6>').text(getCurrentTime()));
});

var getCurrentTime = function()
{
var time = new Date();
var currentTime = time.getHours() + ':' + time.getMinutes();
return currentTime;
};


});
