

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/register.css" rel="stylesheet">
    <link href="css/reg-btn.css" rel="stylesheet">
</head>

  <body>
    <div class="login">
      <h1>Register</h1>
          <form action="registervalid.php" method="POST">
              <input type="text" name="user_name" placeholder="Username" required="required"/>
              <input type="password" name="user_password" placeholder="Password" required="required"/>
              <button class="bubbly-button" type="submit" value="Log in">Submit</button>
          </form>
    </div>
  </body>
</html>


