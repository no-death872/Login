<?php
$titre="login";
session_start();
include_once "header.php";

?>


<div style="padding-top: 40px" class="container" >
    <form action="process%20login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

        <?php
        if (isset($_SESSION['erreur'])){ ?>
<div class="container">
    <div class="alert alert-danger">

     <?php   echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);

        }

        ?>

    </div>
</div>


<?php
include_once  "footer.php"; ?>
