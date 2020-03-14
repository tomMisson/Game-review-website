<main>
<h1>Reviews</h1>
<?php
//itterates through the list of results if there is any
if(count($resultList)>0)
{
    foreach($resultList as $result)
    {
        //takes db data and stores it
        $name = $result->GameName;
        $slug = $result->slug;
        $blurb = $result->GameBlurb;

        echo<<<_END
        <span class='Searchterm'>
            <h3><a href='review/$slug'>$name</a></h3>
            <p>$blurb</p>
        </span>
_END;
    
    }
}
else{
    echo "<h4 class='error'>No reviews found</h4>";
}
?>
</main>