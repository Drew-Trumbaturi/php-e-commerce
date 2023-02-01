<!-- Header -->
<?php
$title = "Login | E-Commerce";
require("header.php");
?>

<!-- Main Content -->
<main class="form-signin w-100 m-auto text-center d-flex align-items-center justify-content-center">
    <form>
        <img class="mb-4" src="assets/profile/beard.png" alt="" width="200" height="200">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <p class="text-center">I don't have an <a href="signup.php">account</a></p>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3 text-start">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        <?php include 'google-api/oauth.php'; ?>
    </form>
</main>


<!-- Footer -->
<?php require("footer.php") ?>