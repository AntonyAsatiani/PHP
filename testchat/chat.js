var app = require('express')();
//var http = require('http').Server(app);
var server = app.listen(3000);	
var io = require('socket.io').listen(server);


app.get('/', function(req,res){
	res.sendfile(__dirname + '/application/views/chat.php');

});

io.on('connection', function(socket){
	console.log('a user connected');
});

server.listen(3000, function(){

console.log('listening on *:3000');
});