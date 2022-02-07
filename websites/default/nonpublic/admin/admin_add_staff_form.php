<?php require '../nonpublic/utils/pdo.php';?>

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
                        <form autocomplete="off" method="POST" action="personal_page.php?page=add_staff">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']?>">
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']?>">
                                </div>

                            </div>
                            
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>">
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="phone">Phone Number</label>

                                    <input type="phone" class="form-control form-control-user" name="phone" placeholder="Phone No." value="<?php if(isset($_POST['phone'])) echo $_POST['phone']?>">
                                </div>

                                <div class="col-sm-6">
                                    <label for="branch">Branch</label>

                                    <select class="form-control form-control-user" name="branch" id="branch">

                                    <?php 
                                    $branch = findAll($pdo, 'branches');
                                    print_r($branch);

                                    foreach($branch as $opt){
                                        echo '<option value="'.$opt['id'].'">'.$opt['name'].'</option>';
                                    }
                                    ?>
					                </select>




                                </div>

                                

                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                            </div>

                            <hr>

                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Create account">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->