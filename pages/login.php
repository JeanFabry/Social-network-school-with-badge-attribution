<?php
    // include('./components/functions.php');

    if (!empty($_POST["email"])) {
        if (login($_POST["email"],$_POST["password"])) {
            header("location:index.php");
        }
        else{
            echo 'log not very ok';
        }
    }
?>
<div class="login_page">
    <div class="login_container">
        <form method="post" class="login_form">
            <div class="login_titles">
                <h1 class="welcome_title">Welcome</h1>
                <h2 class="BB_title">To Breaking Badges</h2>
            </div>
            <div>
                <input for="email" type="email" name="email" placeholder="Email" class="email_input"></input>
            </div>
            <div>
                <input for="password" type="password" name="password" placeholder="Password" class="psw_input"></input>
            </div>
            <div class="submit_input">
                <button type="submit" class="login_button">Log In</button>
            </div>
        </form>
    </div>
</div>