<?php session_start(); ?>
<?php include 'includes/header.php';?>
<?php 
    if(!empty($_SESSION['role'])) {
        $_SESSION['emailType'] = 'newAccount';
    }
    else {
        header('Location: ' . 'admin-login.php');
    }
?>
<section class="admin-login">
    <div class="container">
        <div class="logout">
            <?php include 'includes/logout.php';?>
        </div>
        <h2>Create a New Account</h2>
        <form action="send-email.php" method="post">
            <div>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email">
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</section>
<?php include 'includes/footer.php';?>