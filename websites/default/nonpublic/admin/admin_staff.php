<?php require '../nonpublic/admin/admin_head.php'?>
<?php require '../nonpublic/utils/pdo.php';?>
<?php require '../nonpublic/utils/functions.php';?>


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
<h1 class="h3 mb-2 text-gray-800">STAFF PERSONEL</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary">Employees</h5>
                                <button onClick="window.location.href='personal_page.php?page=add_staff'" class="btn btn-lg btn-info">Add staff</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Branch</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No.</th>
                                            <th>Branch</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php 
                                    
                                    $stmt = $pdo->prepare('SELECT * FROM users WHERE access > 499');
                                    $values = [];
                              
                                    $stmt->execute($values);

                                    foreach($stmt as $user){
                                        echo '<tr>';
                                        echo '<td>'.$user['fname'].' '.$user['lname'].'</td>';
                                        echo '<td>'.$user['email'].'</td>';
                                        echo '<td>'.$user['phone'].'</td>';
                                        $branch_name = find($pdo, 'branches', 'id', $user['branch']);
                                        // print_r($branch_name);
                                        echo ($user['branch'] == 1000) ? "<td>Admin</td>" : '<td>'.$branch_name[0]['name'].'</td>';
                                        echo ($user['access'] == 1000) ? "<td>Admin</td>" : "<td>Staff</td>";
                                        echo '<td>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=profile_staff&id='.$user['id'].'"><button class="btn btn-sm btn-success">View</button></form>
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=edit_staff&id='.$user['id'].'"><button class="btn btn-sm btn-warning">Edit</button></form>
                                                <form autocomplete="off" method="POST" action="personal_page.php?page=delete_staff&id='.$user['id'].'"><button name="submit" class="btn btn-sm btn-danger">Delete</button></form>
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