$(document).ready(() => {

    var isVisible = false;
    var socket = io.connect("http://localhost:8080");

    $("#submit").click(function() {
        socket.emit('client message', $("#message").get(0).value);
        $("#message").get(0).value = "";
    });

    socket.on("server message", (data) => {
        console.log(data);
        $("#textspace").append(data + "<br>");
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
            $('link[href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"]').attr('href', 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/darkly/bootstrap.min.css');
            document.cookie = "dark_mode=1";
            $.ajax({
                type: "POST",
                url: "http://localhost:82/1CWK50-FRAMEWORKS/index.php/Api/dark_mode",
                data: "1",
                success: function() {
                    console.log("Updated");
                }
            });
        } else {
            $('link[href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/darkly/bootstrap.min.css"]').attr('href', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
            document.cookie = "dark_mode=0";
            $.ajax({
                type: "POST",
                url: "http://localhost:82/1CWK50-FRAMEWORKS/index.php/Api/dark_mode",
                data: "0",
                success: function() {
                    console.log("Updated");
                }
            });
        }
    });
});