new Vue({
    el: '#commentsSection',
    data: {
        newComment: null,
        comments: [],
        thisUser: [],
    },
    created: function() {
        this.loadComments();
    },
    methods: {
        loadComments: function() {
            this.$http.get('http://localhost/web-design/index.php/response', function(data, status) {
                if (status == 200) {
                    this.comments = data;
                }
            });
        },
        POST: function(setComment) {
            //Send the new comment to the database.
            this.$http.post('http://localhost/web-design/index.php/home/SendComment', { UserComment: setComment })
                .then((resp) => {
                    console.log(resp.data);
                });
        },
        addRow: function(newComment) {
            this.$http.get('http://localhost/web-design/index.php/response-user', function(data, status) {
                if (status == 200) {
                    thisUser = data;
                    if (newComment) {
                        this.comments.push({ UserComment: newComment, UserName: thisUser[0].UserName }); // Add a new comment to the array.
                        this.POST(newComment);
                    } else {
                        alert('Please enter some text before commenting.');
                    }

                }
            });
        }
    }
});