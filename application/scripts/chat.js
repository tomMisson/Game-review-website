$(document).ready(() => {

    var isVisible = false;
    var isAdmin = false;
    var socket = io.connect("http://localhost:8080");

    //When submit is pressed to send a message to the server
    $("#submit").click(function() {
        $.get("http://localhost:82/1CWK50-FRAMEWORKS/index.php/getAdmin", async function(data, status) {await data; 
        if (data==="1")
        {
            isAdmin = true
        }
     
            socket.emit('client message', $("#message").get(0).value, isAdmin);
            $("#message").get(0).value = "";
        });
    });

    //When a message is recived from the server, it differentiates if it was an admin message or not
    socket.on("server message", (data,admin) => {

        if(admin){
            $("#textspace").append("<p><strong>" + data + "</strong></p>");
        }
        else
        {
            $("#textspace").append("<p>" + data + "</p>");
        }
    });



    //When theres an error with the connection it disables the button
    socket.on('connect_error', () => {
        $("#chatButton").attr("disabled", true);
    });

    //When the server connects, the button is enabled
    socket.on("connect", () => {
        $("#chatButton").attr("disabled", false);
    })

    //if theres a disconnect or the server isnt running then the button is disabled
    socket.on("disconnect", () => {
        $("#chatButton").attr("disabled", true);
    })

    //Toggle view of the chat window
    $("#chatButton").click(() => {
        if (isVisible) {
            $("#chatspace").css("visibility", "hidden");
            isVisible = false;
        } else {
            $("#chatspace").css("visibility", "visible");
            isVisible = true;
        }
    })


    //Send request to codeigniter with a value to change the to update the darkmode to (toggling its value)
    $("#darkSwitch").change(function() {
        if (this.checked) {
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/dm", { "dark-mode": 1 }, function(data, status) {});
            location.reload();
        } else {
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/dm", { "dark-mode": 0 }, function(data, status) {});
            location.reload();
        }
    });

    //Send request to codeigniter with a value to change the to update the admin to (toggling its value)
    $("#adminSwitch").change(function() {
        if (this.checked) {
            document.cookie = "admin=1";
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/admin", { "admin": 1 }, function(data, status) {});
        } else {
            document.cookie = "admin=0";
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/admin", { "admin": 0 }, function(data, status) {});
        }
    });

});