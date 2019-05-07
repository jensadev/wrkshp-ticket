<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    	function ticketPrice(Int $age) : Int {
            // Barnbiljetter, <18 kostar 10
            // Vuxenbiljetter, <65 kostar 20
            // Pensionärsbiljetter och annat kostar 15

            if($age < 18) {
                $price = 10;
            } elseif($age < 65) {
                $price = 20;
            } else {
                $price = 15;
            }
            return $price;
        }
    ?>

    <main role="main" class="container inner cover">

    <?php
        if (isset($_POST['submit'])) {
            echo "<div class='alert alert-primary' role='alert'>";
            echo "<p>Your ticket price is: " . ticketPrice($_POST['inputAge']) . "</p>";
            echo "</div>";
        }
    ?>
        <form class="form-signin" action="" method="POST">
            <div class="text-center mb-4">
                <img class="mb-4" src="img/button.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please enter your age for ticket price: </h1>
            </div>

            <div class="form-label-group">
                <label for="inputAge" class="sr-only">Age: </label>
                <input type="number" id="inputAge" name="inputAge" class="form-control" placeholder="Age" required autofocus>        
            </div>
            <button id="submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>