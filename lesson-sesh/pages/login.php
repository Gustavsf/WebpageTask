<form action="login.php" method="POST">

<?php
    if(isset($_GET['error']) && $_GET['error'] == 1){
?>
        <div>
            slikti
        </div>
<?php
    }
?>


    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="submit" value="Login">
    </div>

</form>