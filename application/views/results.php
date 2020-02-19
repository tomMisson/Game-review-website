<main>
<h1>Reviews</h1>
<?php

foreach($resultList as $result)
{
    $name = $result->GameName;
    $blurb = $result->GameBlurb;

    echo<<<_END
        <h3>$name</h3>
        <p>$blurb</p>
_END;
    
}

?>