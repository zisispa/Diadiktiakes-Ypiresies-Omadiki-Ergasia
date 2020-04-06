<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php login(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-3 text-dark">SearchAid</h1>
                <hr>
                <p class="text-dark">
                    Δημιούργησε το λογαριασμό σου για να απολαμβάνεις μοναδικές πρόσφορες από τα καταστήματα της γειτονίας σου άλλα και άλλες πρόσφορες!
                </p>
            </div>
            <div class="col">
                <div class="card">

                    <h5 class="card-header text-white text-center py-4">
                        <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body pt-0 mt-5">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" method="post">

                            <!-- Email -->
                            <div class="md-form mb-2">
                                <input type="text" id="usernameID" name="username" class="form-control"
                                    placeholder="Username" required>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="passwordID" name="password" class="form-control"
                                    placeholder="Password" required>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                name="submit" id="submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="./registration.php">Register</a>
                            </p>

                        </form>
                        <!-- Form -->

                    </div>

                </div>

            </div>
        </div>

    </div>
    <!--Bootstrap core JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
    </script>
    <!-- Core theme JS-->
    
</body>

</html>