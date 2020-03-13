$(document).ready(() => {

    var isVisible = false;
    var isAdmin = false;
    var socket = io.connect("http://localhost:8080");

    $("#submit").click(function() {
        $.get("http://localhost:82/1CWK50-FRAMEWORKS/index.php/dm", function(data, status) {if (data==="1"){isAdmin = true}});
        socket.emit('client message', $("#message").get(0).value, isAdmin);
        $("#message").get(0).value = "";
    });

    socket.on("server message", (data,admin) => {
        console.log(data);

        if(admin){
            $("#textspace").append("<p><strong>" + data + "</strong></p>");
        }
        else
        {
            $("#textspace").append("<p>" + data + "</p>");
        }
    });



    socket.on('connect_error', () => {
        $("#chatButton").attr("disabled", true);
    });

    socket.on("connect", () => {
        $("#chatButton").attr("disabled", false);
    })

    socket.on("disconnect", () => {
        $("#chatButton").attr("disabled", true);
    })

    $("#chatButton").click(() => {
        if (isVisible) {
            $("#chatspace").css("visibility", "hidden");
            isVisible = false;
        } else {
            $("#chatspace").css("visibility", "visible");
            isVisible = true;
        }
    })

    $("#darkSwitch").change(function() {
        if (this.checked) {
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/dm", { "dark-mode": 1 }, function(data, status) {});
            location.reload();
        } else {
            $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/dm", { "dark-mode": 0 }, function(data, status) {});
            location.reload();
        }
    });

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