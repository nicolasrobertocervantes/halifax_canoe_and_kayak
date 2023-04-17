<?php session_start(); ?>
<?php include 'includes/header.php';?>
<?php
    // Get the form data
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $role = $_POST['role'];

    //Create sessions
    if(empty($title)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        $_SESSION['title'] = $title;
    }
    if(empty($firstName)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        $_SESSION['firstName'] = $firstName;
    }
    if(empty($lastName)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        $_SESSION['lastName'] = $lastName;
    }
    if(empty($role)){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        $_SESSION['role'] = $role;
    }
    
?>
<section class="links">
    <div class="container">
        <div class="logout">
            <?php include 'includes/logout.php';?>
        </div>
        <?php if($role == "admin") : ?>
            <h2>Welcome Admin</h2>
            <a href="new-account.php">New Account</a><br>
            <a href="isnt-working.php">Isn't Working</a>
        <?php elseif($role == "manager") : ?>
            <h2>Welcome Manager</h2>
            <a href="lost-password.php">Lost Password</a><br>
            <a href="isnt-working.php">Isn't Working</a>
        <?php elseif($role == "ceo") : ?>
            <h2>Welcome CEO</h2>
            <a href="need-help.php">Need Help</a><br>
            <a href="isnt-working.php">Isn't Working</a>
        <?php else :?>
            <?php header('Location: ' . 'admin-login.php'); ?>
        <?php endif; ?>
    </div>
</section>
<?php include 'includes/footer.php';?>