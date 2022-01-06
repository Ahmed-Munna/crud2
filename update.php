<?php
    require('include/header.php');
    include('include/config.php');
    $id = $_GET["id"];
    $single_query = "SELECT * FROM user WHERE id=$id";
    $single_user  = mysqli_query($db_connect,$single_query);
    $single_assoc = mysqli_fetch_assoc($single_user);
?>

<section>
        <div class="container">
            <div class="row mt-5 border-1">
                <h3 class="text-center">Update form</h3>
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="update_user.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                    <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" value="<?php echo $single_assoc['name'] ?>" name="name">
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["name_err"])){
                                        echo $_GET["name_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" value="<?php echo $single_assoc['email'] ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["email_err"])){
                                        echo $_GET["email_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $single_assoc['pass'] ?>" id="exampleInputPassword1">
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["pass_err"])){
                                        echo $_GET["pass_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>

<?php
    require('include/footer.php');
?>