$(document).ready(() => {
    const socket = io.connect("http://localhost:8080");
    $("#submit").submit((e) => {
        e.preventDefault();
        socket.emit("client message", $("message").get(0).value);
        $("#message").get(0).value = "";
    });

    socket.on("server message", (data) => {
        $("#chatspace").append(data + "<br>");
    });

    $("#chatButton").click(() => {
        $("#chatspace").show();
        
    })

    

    
});