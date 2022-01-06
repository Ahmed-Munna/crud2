<?php
    include('include/config.php');
    require('include/header.php');
    $select_all_query   = "SELECT * FROM user";
    $all_user           = mysqli_query($db_connect, $select_all_query);
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
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $user['id']?>">Delete</a>
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


<?php
    require('include/footer.php');
?>