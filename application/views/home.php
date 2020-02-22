<main>
  <div class="container">
      <div class="row">
          <?php
          foreach ($result as $row)
          {
            $title = $row->GameName;
            $desc = $row->GameBlurb;
            $image = $row->ReviewImage;
            $slug = $row->slug;

            $img = base_url() . "application/images/" . $image;
            echo"
            <div class='card' style='width: 21rem;'>
              <img class='card-img-top' src='$img' alt='Card image' width='400' height='500'>
              <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$desc</p>
                <a class='btn btn-primary' href='".base_url()."index.php/review/".$slug."'>Read review</a>
              </div>
            </div>";
          }
          ?>
      </div>
  </div>
</main>

 