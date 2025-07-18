<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="processCreate.php" method="post">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"/>
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" id="confirm"/>
    </div>
    <div>
        <label for="fullname">Fullname</label>
        <input type="text" name="fullname" id="fullname"/>
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone"/>
    </div>
    <div>
        <input type="submit" value="Create" />
    </div>
    </form>
</body>
</html>