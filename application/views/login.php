<main>
        <form class="form-signin" method="POST" action="Login/login" >
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <?php
            if(isset($errorMSG))
            {
                    echo "<strong><p class='error'>$errorMSG</p></strong>";
            }
            ?>
            
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name= "password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
</main>