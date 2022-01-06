<?php
    include('include/config.php');
    require('include/header.php');
    $id = $_GET["id"];
    $single_query = "SELECT * FROM user WHERE id=$id";
    $single_user  = mysqli_query($db_connect,$single_query);
    $single_assoc = mysqli_fetch_assoc($single_user);
?>

<section>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header text-center"><h3>Single User Information</h3></div>
                        <div class="card-footer">
                            <table class="table table-dark">
                                <div class="row">
                                        <tr>
                                            <th>NAME</th>
                                            <td><?php echo $single_assoc["name"] ?></td>
                                        </tr>  
                                        <tr>
                                            <th>EMAIL</th>
                                            <td><?php echo $single_assoc["email"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>PASSWORD</th>
                                            <td><?php echo $single_assoc["pass"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>GENDER</th>
                                            <td><?php echo $single_assoc["gender"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>COUNTRY</th>
                                            <td><?php echo $single_assoc["country"] ?></td>
                                        </tr>
                                </div>
                            </table>
                        </div>
                        <a href="user.php" class="btn text-danger">Back</a>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>


<?php
    include('include/footer.php');
?>