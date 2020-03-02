var commentVue = new Vue({
    el: '#comments',
    data: {
        comments: [],
        thisUser: [],
        error: ""
    },
    created: function() {
        this.loadComments();
    },
    methods: {
        loadComments: function() {
            var path = window.location.pathname.split("/");
            $.get("http://localhost:82/1CWK50-FRAMEWORKS/index.php/comments", { slug: path[4] }, function(data, status) {
                commentVue.comments = JSON.parse(data);
                console.log(commentVue.comments);
            });
        }
    }
});