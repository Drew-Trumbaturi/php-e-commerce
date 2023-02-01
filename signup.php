<!-- Header -->
<?php
$title = "Register | E-Commerce";
require("header.php")
?>

<!-- Main Content -->
<section id="register">
    <div class="upload-profile-image pb-5 text-center ">
        <div class="parent">
            <div class="child">
                <img class="camera-icon " src="./assets/camera-solid.svg" alt="camera">
            </div>
            <img class="img rounded-circle" style="width: 12rem; height: 12rem;" src="./assets/profile/beard.png" alt="profile">
            <input type="file" class="form-control" name="profileUpload" id="upload-profile">
            <small class="form-text">Choose Image</small>
        </div>
    </div>

    <main class="w-50 m-auto">
        <h1 class="h3 fw-normal text-center">Please enter your details to register</h1>
        <p class="text-center">I already have an <a href="login.php">account</a></p>
        <p class="muted small text-danger">* required</p>

        <form id="registration-form">
            <div class="align-items-center">
                <div class="row">
                    <div class="col-lg-4 mb-2 form-floating">
                        <input class="form-control" type="text" name="firstname" id="floatingFirstName" placeholder="First Name">
                        <label for="floatingFirstName" class="mx-2">First Name<span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>

                    <div class="col-lg-4 mb-2 form-floating">
                        <input class="form-control" type="text" name="lastname" id="floatingLastName" placeholder="Last Name">
                        <label for="floatingLastName" class="mx-2">Last Name<span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>

                    <div class="col-lg-4 form-floating mb-2">
                        <input class="form-control" type="text" name="username" id="floatingUsername" placeholder="Username">
                        <label for="floatingUsername" class="mx-2">Username<span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-2">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingEmail">Email address<span class="text-danger">*</span></label>
                    <div class="invalid-feedback">
                        Invalid Email.
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 form-floating mb-2">
                        <input type="password" class="form-control " id="Password" placeholder="Password" required>
                        <label for="floatingPassword" class="mx-2">Password<span class="text-danger">*</span></label>
                        <div id="passwordValidation" class="invalid-feedback">
                            <small id="validation_error" class="text-danger"></small>
                        </div>
                    </div>

                    <div class="col-lg-6 form-floating mb-2">
                        <input type="password" class="form-control " id="ConfirmPassword" placeholder="Comfirm Password">
                        <label for="floatingConfirmPassword" class="mx-2">Confirm Password<span class="text-danger">*</span></label>
                        <div id="confirmPasswordValidation" class="invalid-feedback">
                            <small id="confirmation_error" class="text-danger"></small>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 mb-2">
                        <select class="form-select p-3" aria-label="Default select example">
                            <option selected>Select gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div>

                    <div class="col-lg-6 mb-2 form-floating">
                        <input class="form-control" type="date" name="birthday" id="birthday">
                        <label for="birthday">Date of birth:<span class="text-danger">*</span></label>
                        <div class="invalid-feedback">
                            Please enter a valid date.
                        </div>
                    </div>
                </div>


                <div class="form-check form-check-inline mt-4 mb-3">
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" value="I agree to the terms and conditions">
                    <label class="form-check-label" for="terms">I agree to the <a href="#">terms and conditions</a><span class="text-danger">*</span></label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>

                <?php include 'google-api/oauth.php'; ?>
            </div>
        </form>
    </main>
</section>


<!-- Footer -->
<?php require("footer.php") ?>