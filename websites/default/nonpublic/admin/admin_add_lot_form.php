<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?=$welcome_message?></h1>
                        </div>
                        <form autocomplete="off" method="POST" action="personal_page.php?page=add_lot">
                            
                            
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Name" value="<?php if(isset($_POST['name'])) echo $_POST['name']?>">
                                </div>

                                <div class="col-sm-6">
                                    <label for="stock">stock</label>
                                    <input type="text" class="form-control form-control-user" name="stock" id="stock" placeholder="stock" value="<?php if(isset($_POST['stock'])) echo $_POST['stock']?>">
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control form-control-user" name="description" id="description" placeholder="Description" value="<?php if(isset($_POST['description'])) echo $_POST['description']?>">
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="price">price</label>
                                    <input type="text" class="form-control form-control-user" name="price" id="price" placeholder="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']?>">
                                </div>

                                
                            </div>


                            <div class="form-group row">
                                

                                <div class="col-sm-6">
                                    <label for="category">category</label>
                                    <select class="form-control form-control-user" name="category" id="category">
                                    <?php 
                                    $category = findAll($pdo, 'categories');
                                    print_r($category);

                                    foreach($category as $categ){
                                        echo '<option value="'.$categ['id'].'">'.$categ['name'].'</option>';
                                    }
                                    ?>
					                </select>
                                </div>


                                



                            </div>





                            <hr>

                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Add item">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->