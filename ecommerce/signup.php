<!-- Header -->
<?php
$title = "Register | E-Commerce";
require("header.php")
?>

<!-- Main Content -->
<main class="form-signin w-50 m-auto">
    <form>
        <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Please enter your details to register</h1>
        <p class="muted small text-danger">* required</p>

        <div class="row">
            <div class="col-lg-6 mb-2 form-floating">
                <input class="form-control" type="text" name="firstname" id="floatingFirstName" placeholder="First Name">
                <label for="floatingFirstName">First Name<span class="text-danger">*</span></label>
            </div>

            <div class="col-lg-6 mb-2 form-floating">
                <input class="form-control" type="text" name="lastname" id="floatingLastName" placeholder="Last Name">
                <label for="floatingLastName">Last Name<span class="text-danger">*</span></label>
            </div>
        </div>

        <div class="form-floating mb-2">
            <input class="form-control" type="text" name="username" id="floatingUsername" placeholder="Username">
            <label for="floatingUsername">Username<span class="text-danger">*</span></label>
        </div>

        <div class="form-floating mb-2">
            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address<span class="text-danger">*</span></label>
        </div>

        <div class="form-floating mb-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password<span class="text-danger">*</span></label>
        </div>

        <div class="form-floating mb-2">
            <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Comfirm Password">
            <label for="floatingConfirmPassword">Confirm Password<span class="text-danger">*</span></label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>

    </form>
</main>

<!-- Footer -->
<?php require("footer.php") ?>