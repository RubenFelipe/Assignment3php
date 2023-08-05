<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <<link rel="stylesheet" type="text/css" href="Css/Style.css">
  <script src="JavaScript/Javascript.js" defer></script>
  <title>tennis</title>
</head>
<body>
<header>
        <?php include("includes/header.php"); ?>
  </header>

  <img src="images/jordan-Nike.png" alt="jordan Nike">
  <img src="images/jordan2-Nike.png" alt="jordan Nike">
  <img src="images/jordan3-Nike.png" alt="jordan Nike">
  
  <form action="/submit_content" method="post">
    <label for="title">product</label>
    <input type="text" id="title" name="title" required><br>
    
    <label for="content">comment</label>
    <textarea id="content" name="content" rows="4" cols="50" required></textarea><br>
    
    <input type="submit" value="Submit">
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
  </form>
</body>
</html>