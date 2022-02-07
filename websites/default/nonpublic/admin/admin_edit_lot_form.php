<?php

$stmt = $pdo->prepare('SELECT * FROM sys.items WHERE id = :id');
$values = [
      'id' => $_GET['id']
];

$stmt ->execute($values);
$lot = $stmt->fetch();

// echo $auction['name'];
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
                        <form autocomplete="off" method="POST" action="personal_page.php?page=edit_lot">
                            
                            
                        <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-user" name="name" id="name" placeholder="Name" value="<?php if(isset($lot['name'])) echo $lot['name']?>">
                                </div>

                                <div class="col-sm-6">
                                    <label for="artist">Artist</label>
                                    <input type="text" class="form-control form-control-user" name="artist" id="artist" placeholder="Artist" value="<?php if(isset($lot['artist'])) echo $lot['artist']?>">
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control form-control-user" name="description" id="description" placeholder="Description" value="<?php if(isset($lot['description'])) echo $lot['description']?>">
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="year">Year</label>
                                    <input type="text" class="form-control form-control-user" name="year" id="year" placeholder="Year" value="<?php if(isset($lot['year'])) echo $lot['year']?>">
                                </div>

                                
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control form-control-user" name="price" id="price" placeholder="Price" value="<?php if(isset($lot['price'])) echo $lot['price']?>">
                                </div>

                                <div class="col-sm-6">
                                    <label for="classification">Classification</label>
                                    <select class="form-control form-control-user" name="classification" id="classification">
                                        <option value="Landscape">Landscape</option>
                                        <option value="Seascape">Seascape</option>
                                        <option value="Portrait">Portrait</option>
                                        <option value="Figure">Figure</option>
                                        <option value="Still life">Still life</option>
                                        <option value="Nude">Nude</option>
                                        <option value="Animal">Animal</option>
                                        <option value="Abstract">Abstract</option>
                                        <option value="Other...">Other...</option>
					                </select>




                                </div>
                            </div>



                            <!-- the id secret -->
                            <div class="form-group">
                                <input type="text" name="id" hidden value="<?php if(isset($lot['id'])) echo $lot['id']?>">
                            </div>

                            <hr>

                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Edit lot">
                     
                        </form>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

</div> <!-- end container-->