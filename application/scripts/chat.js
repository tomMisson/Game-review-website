$(document).ready(() => {
    const socket = io.connect("http://localhost:8080");
    $("#chatform").submit((e) => {
        e.preventDefault();
        socket.emit("client message", $("message").get(0).value);
        $("#message").get(0).value = "";
    });

    $("#myForm").click(() => {
        $("#chatform").show();
    })

    socket.on("server message", (data) => {
        $("#chatspace").append(data + "<br>");
    });
});