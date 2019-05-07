<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    pre {
        color: #fff;
    }
    </style>
</head>
<body>
    <main role="main" class="container inner cover">

        <?php    
            if (isset($_POST['submit'])) {
                echo "<pre>" . print_r($_POST, 1) . "</pre>";
            }
        ?>
        <form class="form-signin" action="" method="POST">
            <div class="text-center mb-4">
                <img class="mb-4" src="img/button.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            </div>

            <div class="form-label-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>        
            </div>
            <div class="form-label-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input id="inputRemember" name="inputRemember" type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        </form>
    </main>
</body>
</html>