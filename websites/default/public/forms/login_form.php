<form autocomplete="off" method="POST" action="login.php">
    <a href="index.php"><img class="mb-4" src="../assets/img/cheese.png" alt="Go to main page" ></a>
    <h1 class="h3 mb-3 fw-normal"><?=$welcome_message;?></h1>



    <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" 
                    name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
            <label for="floatingInput">User name (Email address)</label>
    </div>

    <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
    </div>

    

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Log in</button>
    <p class="mt-5 mb-3 text-muted"><a href="register.php">If you don't have an account yet please register here</a> </p>


    <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
  </form>