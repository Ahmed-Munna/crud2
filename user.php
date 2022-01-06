<?php
    include('include/config.php');
    require('include/header.php');
    $select_all_query   = "SELECT * FROM user WHERE status=1";
    $all_user           = mysqli_query($db_connect, $select_all_query);
    $select_all_trash_query   = "SELECT * FROM user WHERE status=0";
    $all_trash_user           = mysqli_query($db_connect, $select_all_trash_query);
?>

    <section>
        <div class="container">
            <div class="row">
                <h3 class="text-center">User list</h3>
                <div class="col-2"></div>
                <div class="col-8">
                <?php
                        if(isset($_GET["del_secc"])){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET["del_secc"];?>
                            </div>
                        <?php }?>
                <?php
                        if(isset($_GET["submit_success"])){?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET["submit_success"];?>
                            </div>
                        <?php }?>
                <table class="table table-info">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">GENDER</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($all_user as $user){?>    
                            <tr>
                            <td><?php echo $user["id"]?></td>
                            <td><?php echo $user["name"]?></td>
                            <td><?php echo $user["email"]?></td>
                            <td><?php echo $user["pass"]?></td>
                            <td><?php echo $user["gender"]?></td>
                            <td><?php echo $user["country"]?></td>
                            <td><a class="btn btn-primary" href="single_user.php?id=<?php echo $user['id']?>">View</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id']?>">Trash</a>
                            <a class="btn btn-success" href="update.php?id=<?php echo $user['id']?>">Update</a>
                        
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h3 class="text-center">Trash list</h3>
                <div class="col-2"></div>
                <div class="col-8">
                <?php
                        if(isset($_GET["per_del"])){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET["per_del"];?>
                            </div>
                        <?php }?>
                <table class="table table-info">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">GENDER</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($all_trash_user as $trash_user){?>    
                            <tr>
                            <td><?php echo $trash_user["id"]?></td>
                            <td><?php echo $trash_user["name"]?></td>
                            <td><?php echo $trash_user["email"]?></td>
                            <td><?php echo $trash_user["pass"]?></td>
                            <td><?php echo $trash_user["gender"]?></td>
                            <td><?php echo $trash_user["country"]?></td>
                            <td>
                            <a class="btn btn-success" href="renew.php?id=<?php echo $trash_user['id']?>">Back to</a>
                            <a class="btn btn-danger" href="per_del.php?id=<?php echo $trash_user['id']?>">Delete</a>
                            </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>


<?php
    require('include/footer.php');
?>