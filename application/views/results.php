<main>
<h1>Reviews</h1>
<?php
if(count($resultList)>0)
{
    foreach($resultList as $result)
    {
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