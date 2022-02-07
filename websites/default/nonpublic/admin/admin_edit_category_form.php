<?php

$stmt = $pdo->prepare('SELECT * FROM sys.categories WHERE id = :id');
$values = [
      'id' => $_GET['id']
];

$stmt ->execute($values);
$category = $stmt->fetch();

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
                        <form autocomplete="off" method="POST" action="personal_page.php?page=edit_category">
                            
                            
                            <div class="form-group">
                                <input type="name" class="form-control form-control-user" name="name" placeholder="Category name" value="<?php if(isset($category['name'])) echo $category['name']?>">
                            </div>

                            <div class="form-group">
                                <input type="name" class="form-control form-control-user" name="description" placeholder="Category description" value="<?php if(isset($category['description'])) echo $category['description']?>">
                            </div>



                            <!-- the id secret -->
                            <div class="form-group">
                                <input type="text" name="id" hidden value="<?php if(isset($category['id'])) echo $category['id']?>">
                            </div>

                            <hr>

                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Edit category">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->