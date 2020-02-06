<main>
    <h3>
    <?php 
        foreach ($result as $review)
        {
            echo $review->GameName;
        }        
    ?>
    </h3>
</main>