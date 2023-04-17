<?php include 'includes/header.php';?>

<section class="admin-login">
    <div class="container">
        <h1>Welcome To Your IT Support System</h1>
        <form action="problem.php" method="post" id="adminLogin">
            <div>
                <label for="title">Title:</label><br>
                <select name="title" id="title">
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                    <option value="3">Miss</option>
                </select>
            </div>
            <div>
                <label for="firstName">First Name:</label><br>
                <input type="text" id="firstName" name="firstName">
            </div>
            <div>
                <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div>
            <label for="role">Role:</label><br>
            <select name="role" id="title">
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="ceo">CEO</option>
            </select>
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</section>

<?php include 'includes/footer.php';?>