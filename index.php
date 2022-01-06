<?php
    require('include/header.php');
    $country = ['Bangladesh','Iran','US','UK','China','Papua NewGini'];
    function contry($options){
        foreach($options as $option){
            printf('<option value="%s">%s</option>',strtolower($option),ucwords($option));
        }
    }
?>
<section>
        <div class="container">
            <div class="row mt-5 border-1">
                <h3 class="text-center">Regestation form</h3>
                <div class="col-3"></div>
                <div class="col-6">
                    <?php
                        if(isset($_GET["submit_success"])){?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET["submit_success"];?>
                            </div>
                        <?php }?>
                    <form action="post.php" method="post">
                    <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="name">
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
                            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                            <input type="text" class="form-control" name="password" id="exampleInputPassword1">
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["pass_err"])){
                                        echo $_GET["pass_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="conPassword" id="exampleInputPassword2">
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["cPass_err"])){
                                        echo $_GET["cPass_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="male" name="gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" value="female" name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                female
                            </label>
                            <strong class="text-danger">
                                <?php
                                    if(isset($_GET["gender_err"])){
                                        echo $_GET["gender_err"];
                                    }
                                ?>
                            </strong>
                        </div>
                        <select class="form-select my-3" name="country" aria-label="select">
                            <option selected disabled>Country</option>
                            <?php contry($country); ?>
                        </select>
                        <strong class="text-danger">
                                <?php
                                    if(isset($_GET["coun_err"])){
                                        echo $_GET["coun_err"];
                                    }
                                ?>
                            </strong>
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