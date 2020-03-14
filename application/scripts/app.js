var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

// Create a new server using the listen function, specifying the port number here.
app.listen(8080, () => {
    console.log("Server started");
});
// Handle if the user connecting is new or not.
var newConnection = true;

// Handle the head response.
function handler(req, res) {
    fs.readFile(__dirname + '/index.html',
        function(err, data) {
            if (err) {
                res.writeHead(500);
                return res.end('Error loading index.html');
            }
            res.writeHead(200);
            res.end(data);
        });
}

//when server recives a connection
io.on('connection', (socket) => {
    console.log('User connected to the server');

    //when a user sends a message 
    socket.on('client message', (data, admin) => {
        console.log(Date.now() + ' Client message: ' + data);
        socket.emit('server message', data, admin); // message is sent back to the user UI 
        socket.broadcast.emit('server message', data, admin); // it is also broadcast to the rest of the listening sockets
    });
});