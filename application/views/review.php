<main>
    <div class="container">
        <?php 
            foreach ($result as $review)
            {
                $name = $review->GameName;
                $blurb = $review->GameBlurb;
                $content =  $review->GameReview;
                $image =  $review->ReviewImage;
                $img = $img = base_url() . "application/images/" . $image;

                echo<<<_END
                <h1>$name</h1>
                <div id ="reviewWrapper">
                    <aside>
                        <img src='$img' width='400' height='600'>
                    </aside>
                    <section>
                        <h5><strong>$blurb</strong></h5>
                        <p>$content</p>
                    </section>
                </div> 
_END;
            
            }        
        ?>
        <div id="comments">
            <h2>Comments</h2>
            <?php
                $username = $this->session->userdata('username');
                if($this->session->has_userdata('loggedIn'))
                {
                    echo<<<_END
                    <div id="commentForm">
                        <textarea name="commentBody" class="form-control" id="commentTXT" placeholder="Enter a comment..." rows="2" cols="100"></textarea>
                        <button id="commentBTN" class="btn btn-primary" type="submit" v-on:click="postComment('$username')">Submit</button>
                    </div>
_END;
                }
            ?>
            <div id="commentarea" v-for="comment in comments">
                <h3>{{comment.UserName}}</h3>
                <p>{{comment.UserComment}}</p>  
            </div>
        </div>
    <div>
</main>