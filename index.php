<?php
  include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="formContaner">
            <div class="CenteRangle">
                <h2 class="formHeader">Sign Up!</h2>
                <div class="formContentContainer">
                    <form>
                        <input type="text" name="firstName" class="formInput" placeholder="First Name" required />
                        <input type="text" name="lastName" class="formInput" placeholder="Last Name" required />
                        <input type="text" name="email" class="formInput" placeholder="Email" required />
                        <input type="text" name="phoneNumber" class="formInput" placeholder="Phone Number" required />
                        <input type="submit" class="submitButton" name="submitButton" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>