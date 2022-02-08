<?php session_start();?>

<?php
if(isset($_SESSION['access'])){
    if($_SESSION['access']>=500){
        if(isset($_GET['page']) && $_GET['page']=='staff'){
            require '../nonpublic/admin/admin_staff.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='add_staff'){
            require '../nonpublic/admin/admin_add_staff.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='delete_staff'){
            require '../nonpublic/admin/admin_delete_staff.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='edit_staff'){
            require '../nonpublic/admin/admin_edit_staff.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='profile_staff'){
            require '../nonpublic/admin/admin_staff_profile.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='customers'){
            require '../nonpublic/admin/admin_customers.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='delete_customers'){
            require '../nonpublic/admin/admin_delete_customers.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='edit_customers'){
            require '../nonpublic/admin/admin_edit_customers.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='categories'){
            require '../nonpublic/admin/admin_categories.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='delete_category'){
            require '../nonpublic/admin/admin_delete_category.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='add_category'){
            require '../nonpublic/admin/admin_add_category.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='edit_category'){
            require '../nonpublic/admin/admin_edit_category.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='lot'){
            require '../nonpublic/admin/admin_lot.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='add_lot'){
            require '../nonpublic/admin/admin_add_lot.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='delete_lot'){
            require '../nonpublic/admin/admin_delete_lot.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='edit_lot'){
            require '../nonpublic/admin/admin_edit_lot.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='profile_lot'){
            require '../nonpublic/admin/admin_lot_profile.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='add_lot_picture'){
            require '../nonpublic/admin/admin_add_lot_picture.php';
        }
        elseif(isset($_GET['page']) && $_GET['page']=='assign_stock'){
            require '../nonpublic/admin/admin_assign_stock.php';
        }
        












        else {
        require '../nonpublic/sections/admin_dashboard.php';
        }
    }

    if ($_SESSION['access']==1) {
        require '../nonpublic/sections/user_section.php';
    }
    
}

// else{
//     require '../nonpublic/utils/head.php';
//     echo '<h3 class="text-center my-3 centerMessage">Invalid operation</h3>';
//     echo '<form class="text-center" action="login.php"><button style="width: 150px" class="btn btn-lg btn-primary">Please log in</button></form>';
// }



if(isset($_GET['page']) && $_GET['page']=='add_to_basket'){
    require '../nonpublic/basket/add_to_basket.php';
}
elseif(isset($_GET['page']) && $_GET['page']=='basket'){
    require '../nonpublic/basket/basket.php';
}


require '../nonpublic/utils/footer.php';
