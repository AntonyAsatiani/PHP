 

var app = require('express');
var http = require('http').Server(app);
var io = require('socket.io').listen(http);

io.on('connection',function(socket){
	console.log('user connected');

socket.on('chat message', function(msg){
	io.emit('chat message', msg);
});


socket.on('disconnect', function(){
	console.log('user disconnect');
});


});



http.listen(3000,function(){
	console.log("listen to 3000:");
})