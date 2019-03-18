<?php
    require_once("classes/User.class.php");
    if( !empty($_POST) ){
        $user = new User();
        $user->setEmail(htmlspecialchars($_POST['email']));
        $user->setPassword($_POST['password']);
        $user->setPasswordConfig($_POST['passwordConfig']);
        
        if( $user->register() ){
            //echo "😂😂😂";
            header('Location: artist.php');
        }
        //var_dump($result);


        

        //if($password == $passwordConfirm){

        //}
        //else {
        //    $error = true;
        //}
        
        
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/logStyle.css">
    <title>Spotify - Log In</title>
</head>
<body>
    <header>
        <div class="logo"></div>
    </header>
    <main>
        <div class="spotifyLogin">
            <div class="form form--login">
                <form action="" method="post">
                    <h2 form__title>Sign up for an account</h2>
                    <?php if( isset($error) ): ?>
                        <div class="form__error">
                            <p>
                                Sorry, er liep iets fout! Gelieve het formulier correct in te vullen.
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="form__field">
                        <label for="Email">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="form__field">
                        <label for="Password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form__field">
					    <label for="password_confirmation">Confirm your password</label>
					    <input type="password" id="password_confirmation" name="passwordConfig">
				    </div>

                    <div class="form__field">
                        <input type="submit" value="Sign in" class="btn btn--primary">
                    </div>

                    <div>
                        <p>Already an account? <a href="login.php">Log in here</a></p>
                    </div>
                </form>
            </div>
        </div>

    </main>
</body>
</html>