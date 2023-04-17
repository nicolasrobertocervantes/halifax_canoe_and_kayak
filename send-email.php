<?php session_start(); ?>
<?php include 'includes/header.php';?>
<?php 
    if(!empty($_SESSION['emailType']) && !empty($_SESSION['role'])) {
        $emailType = $_SESSION['emailType'];
    }
    else {
        header('Location: ' . 'admin-login.php');
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }
    else {
        if($emailType == "newAccount"){
            header('Location: ' . 'new-account.php');
        }
        elseif($emailType == "lostPassword") {
            header('Location: ' . 'lost-password.php');
        }
    }
?>
<section class="admin-login">
    <div class="container">
        <div class="logout">
            <?php include 'includes/logout.php';?>
        </div>
        <h2>Send Email</h2>
        <?php 
            if($emailType == "newAccount"){
                echo 'Create a new account with ' . $email;
            }
            elseif($emailType == "lostPassword"){
                echo 'Sorry, you lost your password for email ' . $email;
            }
        ?>
    </div>
</section>
<?php include 'includes/footer.php';?>