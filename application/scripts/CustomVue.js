var commentVue = new Vue({
    el: '#comments',//selects element to latch on to 
    data: {
        //sets up default variables
        comments: [],
        thisUser: [],
        error: ""
    },
    created: function() {
        this.loadComments(); //calls load comments on create
    },
    methods: {
        loadComments: function() {
            var path = window.location.pathname.split("/");
            $.get("http://localhost:82/1CWK50-FRAMEWORKS/index.php/comments", { slug: path[4] }, function(data, status) {// fetches the comments for that specific review from the slug. 
                commentVue.comments = JSON.parse(data);

            });
        },
        postComment: function(username) {
            var path = window.location.pathname.split("/");
            var comment = $("#commentTXT").val();
            $("#commentTXT").val("");
            if(comment !== "")
            {
                $.post("http://localhost:82/1CWK50-FRAMEWORKS/index.php/post", { text: comment, slug: path[4] }, function(data, status) { // sends data to codeigniter to be saved to DB
                commentVue.comments.push({ "UserComment": comment, "UserName": username })// Adds the comment to the list so that it appears as soon as post is clicked
            });
            }
        }
    }
});