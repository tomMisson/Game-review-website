<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="application/css/custom.css">

<title><?php echo $title?></title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Games Reviews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="POST">
            
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button class="btn btn-outline-info my-2 my-sm-1 login" type="submit">Login</button>
        </form>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
        <div class="row">
            <?php
            foreach ($result as $row)
            {
              $title = $row->GameName;
              $desc = $row->GameBlurb;
              $img = $row->ReviewImage;
              $slug = $row->slug;
              echo"
              <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='application/images/' alt='Card image'>
                <div class='card-body'>
                  <h5 class='card-title'>$title</h5>
                  <p class='card-text'>$desc</p>
                  <a href='reviews/$slug' class='btn btn-primary'>Learn more</a>
                </div>
              </div>";
            }
            ?>
        </div>
    </div>
  </main>

  <footer class="page-footer font-small grey">
    <div class="footer-copyright text-center py-3">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/94/Manchester_Metropolitan_University_logo.svg/220px-Manchester_Metropolitan_University_logo.svg.png">
    </div>
    <button id="chatButton" class="open-button btn btn-success" onclick="openForm()">Chat</button>
    <div class="chat-popup pull-right" id="myForm">
      <form id="myform" class="form-container">
      </form>
    </div>
  </footer>

</body>

<!-- This section needs editing to create the chat system using HTML -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.5/socket.io.min.js"></script>


</html>