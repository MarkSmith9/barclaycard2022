        <form autocomplete="off" method="POST" action="register.php">
            <a href="index.php"><img class="mb-4" src="../assets/img/cheese.png" alt="" ></a>
            <h1 class="h3 mb-3 fw-normal"><?=$welcome_message?></h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" 
                    name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
            <label for="floatingInput">User name (Email address)</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="fname" placeholder="your name" name="fname" 
                    value="<?php if(isset($_POST['fname'])) echo $_POST['fname']?>">
            <label for="fname">First name</label>
            </div>

            <div class="form-floating">
            <input type="text" class="form-control" id="lname" placeholder="your name" name="lname" 
                    value="<?php if(isset($_POST['lname'])) echo $_POST['lname']?>">
            <label for="lname">Last name</label>
            </div>
            
            <div class="form-floating">
            <input type="tel" class="form-control" id="phone" placeholder="phone number" name="phone" 
                    value="<?php if(isset($_POST['phone'])) echo $_POST['phone']?>">
            <label for="phone">Phone number</label>
            </div>

            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
            </div>


            
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Register</button>

            <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
        </form>
