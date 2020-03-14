<main>
    <div class="container">
        <?php 
            foreach ($result as $review) //goes through the list of results matching the exact slug ( will only ever be one due to SQL LIMIT )
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
            //Restricts the ability to comment to only signed in users 
                if($this->session->has_userdata('loggedIn'))
                {
                    $username = $this->session->userdata('username');
                    //passes username to the comment function so that the UID can be retrived (is not the most efficent solution and not ideal for enterprise apps however was the easiest option without changing the db schema)
                    echo<<<_END
                    <div id="commentForm">
                        <textarea name="commentBody" class="form-control" id="commentTXT" placeholder="Enter a comment..." rows="2" cols="100"></textarea>
                        <button id="commentBTN" class="btn btn-primary" type="submit" v-on:click="postComment('$username')">Submit</button> 
                    </div>
_END;
                }
            ?>
            <!-- Vue js dynamic rendering component (loops through for every comment that is saved -->
            <div id="commentarea" v-for="comment in comments">
                <h3>{{comment.UserName}}</h3>
                <p>{{comment.UserComment}}</p>  
            </div>
        </div>
    <div>
</main>