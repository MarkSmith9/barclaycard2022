<?php require '../nonpublic/admin/admin_head.php'?>
<?php require '../nonpublic/utils/functions.php'?>
<?php require '../nonpublic/utils/pdo.php';?>



<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    
    <!-- Sidebar -->
    <?php require '../nonpublic/admin/admin_sidebar.php'?>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <!-- Topbar -->
    <?php require '../nonpublic/admin/admin_topbar.php'?>
    <!-- End of Topbar -->



    <!-- Begin Page Content -->
    <div class="container-fluid">

                    
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Products</h1>
                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary">Items </h5>
                                <button onClick="window.location.href='personal_page.php?page=add_lot'" class="btn btn-lg btn-info">Add item</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>Product number</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Product number</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php 
                                    
                                    $stmt = $pdo->prepare('SELECT * FROM items');
                                    $values = [];
                              
                                    $stmt->execute($values);

                                    foreach($stmt as $lot){
                                        $category_name = find($pdo, 'categories', 'id', $lot['category']);

                                        echo '<tr>';
                                        echo '<td>'.sprintf("%08d", $lot['id']).'</td>';
                                        echo '<td>'.$lot['name'].'</td>';
                                        echo '<td>'.$lot['description'].'</td>';
                                        echo '<td>£ '.number_format($lot['price'],2,",",".").'</td>';
                                        echo '<td>'.$lot['stock'].'</td>';
                                        echo '<td>'.$category_name[0]['name'].'</td>';

                                        




                                        
                                        echo '<td>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=profile_lot&id='.$lot['id'].'"><button class="btn btn-sm btn-success">View</button></form>
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=edit_lot&id='.$lot['id'].'"><button class="btn btn-sm btn-warning">Edit</button></form>
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=delete_lot&id='.$lot['id'].'"><button name="submit" class="btn btn-sm btn-danger">Delete</button></form>
                                                </div>
                                            </td>';
                                        echo '</tr>';

                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php require '../nonpublic/admin/admin_footer.php'?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->


</div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php require '../nonpublic/admin/admin_logout_modal.php'?>
    <?php require '../nonpublic/admin/admin_js.php'?>
</body>
</html>