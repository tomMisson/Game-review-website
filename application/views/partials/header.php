<?php 

if(isset($_POST['loginBTN']))
{
  if(isset($_SESSION['loggedIn']))
  {
    redirect('Login/logout');
  }
  else
  {
    redirect('Login');
  }
}

?>

<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
if(isset($_SESSION['loggedIn']))
{
  if($_SESSION['dark_mode'] == "0")
  {
    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
  }
  else{
    echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.4.1/darkly/bootstrap.min.css'>";
  }
}
else{
  echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
}
?>
<link rel="stylesheet" href="<?php echo base_url('application/css/custom.css'); ?>">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.5/socket.io.min.js"></script>

<script src=<?php echo base_url('application/scripts/chat.js'); ?>></script>

<title>Games Reviews</title>
</head>
<body class="text-center">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>">Games Reviews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="POST" action="Review/search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name='searchtxt'>
            <button name='searchBTN' class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
          <?php
            if($this->session->has_userdata('loggedIn'))
            {
              echo " <button name='loginBTN' class='btn btn-outline-info my-2 my-sm-1 login' type='submit'>Logout</button>";
            }
            else{
              echo "<button name='loginBTN' class='btn btn-outline-info my-2 my-sm-1 login' type='submit'>Login</button>";
            }
          ?>
      </div>
    </nav>
  </header>
  