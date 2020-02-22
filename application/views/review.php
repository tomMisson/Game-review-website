<main>
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
                    <h6>$blurb</h6>
                    <p>$content</p>
                </section>
            </div> 
_END;
           
        }        
    ?>
    
    <div id="commentSection">
        <h2>Comments</h2>
        <form>
            <textarea rows="5" cols="100"></textarea>
        </form>
    </div>
</main>