<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div>
        <p>SIGN UP</p>
        <div id="div2">
            <form action="database/handler.inc.php" method="post">
                <label for="username">USERNAME</label>
                <br>
                <input type="text" name="username" id="text">
                <br>
                <label for="username">EMAIL</label>
                <br>
                <input type="text" name="email" id="text">
                <br>
                <label for="username">DATE OF BIRTH</label>
                <br>
                <input type="date" name="dob" id="text">
                <br>
                <label for="username">PHONE</label>
                <br>
                <input type="text" name="phone" id="text">
                <br>
                <label for="username">PASSWORD</label>
                <br>
                <input type="password" name="paswd" id="text">
                <br>
                <input type="submit" value="REGISTER" id="register">
            </form>
            <br>

        </div>
    </div>
</body>
</html>