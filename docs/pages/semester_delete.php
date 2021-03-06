<html>
    <head>
        <?php include_once "../partials/title.php"; ?>
        <?php include_once "../partials/common_lib.php"; ?>
        <script src="../js/semester_add.js"></script>
        <?php
            include_once "../db/connection.php";
            include_once "../db/semester_db.php";
            include_once "../grid/common_grid.php";
            include_once "../grid/semester_grid.php"; 
        ?>
    </head>
    <body>
        <?php include_once "../partials/menu.php"; ?>
        <div class='container-fluid'>
            <form action='semester_delete.php' method="post">
                <div class='bg-light border border-info row p-2 ml-2 mr-2 mt-3'>
                    <div class='col-md-12'>
                        <h1 class='text-center' style='font-weight:300;'>Delete Semester</h1>
                        <hr class='mt-1 mb-3 bg-info'>
                    </div>
                    <div class='col-md-3'>
                    </div>
                    <div class='col-md-4'>
                        <?php
                            if(isset($_POST['branchlist'])){
                                branchDropdown('branchlist', $_POST['branchlist']);
                            }else{
                                branchDropdown('branchlist', "");
                            } 
                        ?>
                    </div>
                    <div class='col-md-5'>
                        <input type="submit" value="VIEW" class='btn btn-primary'>
                    </div>
                </div>
            </form>
            <div class='bg-light border border-info row p-2 ml-2 mr-2 pb-3'>
                <div class='col-md-3'>
                </div>
                <div class='col-md-7'>
                    <?php
                        if(isset($_POST['branchlist'])){
                            semester_delete($_POST['branchlist']);
                        }
                    ?>  
                </div>
                <div class='col-md-2'>  
                </div>
            </div>
        </div>

    </body>
</html>