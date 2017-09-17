        <?php 
        if(isset($_GET['page'])) {
            //Part admin
            if ($_GET['page'] == "admin") {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == "viewmaskapai") {
                        include 'admin/viewmaskapai.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "delete") {
                                include 'admin/deletemaskapai.php';
                            } elseif($_GET['act'] == "edit") {
                                include 'admin/editmaskapai.php';
                            }
                        }
                    } elseif ($_GET['menu'] == "insertmaskapai"){
                        include 'admin/insertmaskapai.php';
                    } elseif ($_GET['menu'] == "viewcustomer") {
                        include 'admin/viewcustomer.php';

                        if(isset($_GET['act'])) {
                            if($_GET['act'] == "delete") {
                                include 'admin/deletecustomer.php';
                            } elseif($_GET['act'] == "edit") {
                                include 'admin/editcustomer.php';
                            }
                        }
                    } elseif ($_GET['menu'] == "insertcustomer"){
                        include 'admin/insertcustom.php';
                    }
                } else {
                    include 'defaultcontent.php';
                }
            
            } elseif($_GET['page'] == 'customer') {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'viewmaupesan'){
                     include 'customer/viewallpenerbangan.php';
                    }
                } else {
                    include 'customer/myflight.php';
                }
            } elseif($_GET['page'] == 'maskapai') {
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'viewpesawat'){
                        include 'maskapai/viewlistpesawat.php';
                    } elseif ($_GET['menu'] == 'viewjamterbang'){
                        include 'maskapai/viewjamterbang.php';
                    }


                } else {
                    include 'maskapai/viewpesawat.php';
                }

            }
        }

        ?>
