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

    $("#darkSwitch").change(function() {
        if (this.checked) {
            $('link[href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"]').attr('href', 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/darkly/bootstrap.min.css');
            $.ajax({
                type: "POST",
                url: "someFileToUpdateTheSession.php",
                data: "1",
                success: function() {
                    console.log("Updated");
                }
            });
        } else {
            $('link[href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/darkly/bootstrap.min.css"]').attr('href', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
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