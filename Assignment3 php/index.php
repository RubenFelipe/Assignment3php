<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Css/Style2.css">
    <script src="JavaScript/Javascript.js" defer></script>
    <title>Login Page</title>
</head>
<body>
    <body>
        <div class="container">
            <div class="imagen">
                <img src="images/principal_image.png" alt="Imagen">
              </div>
    <div class="text-container">
    <h1>Welcome, login to continue</h1>
    <form action="Page.php" method="post">
        <label for="username">User:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="button" value="Long in" onclick="moveNextPage()">
    </div>
    </form>
</body>
</html>

