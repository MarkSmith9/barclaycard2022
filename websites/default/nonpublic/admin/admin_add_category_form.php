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
                        <form autocomplete="off" method="POST" action="personal_page.php?page=add_category">
                            
                            
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="name" placeholder="Category name" value="<?php if(isset($_POST['name'])) echo $_POST['name']?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="description" placeholder="Category description" value="<?php if(isset($_POST['description'])) echo $_POST['description']?>">
                            </div>


                            <hr>

                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Create category">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->