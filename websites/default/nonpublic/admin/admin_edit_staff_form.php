<?php

$stmt = $pdo->prepare('SELECT * FROM sys.users WHERE id = :id');
$values = [
      'id' => $_GET['id']
];

$stmt ->execute($values);
$user = $stmt->fetch();

?>





<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?=$welcome_message?></h1>
                        </div>
                        <form autocomplete="off" method="POST" action="personal_page.php?page=edit_staff">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name" value="<?php if(isset($user['fname'])) echo $user['fname']?>">
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name" value="<?php if(isset($user['lname'])) echo $user['lname']?>">
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <input disabled type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="<?php if(isset($user['email'])) echo $user['email']?>">
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="phone" class="form-control form-control-user" name="phone" placeholder="Phone No." value="<?php if(isset($user['phone'])) echo $user['phone']?>">
                                </div>

                                

                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <input type="text" name="id" hidden value="<?php if(isset($user['id'])) echo $user['id']?>">
                            </div>

                            <hr>
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Edit account">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->