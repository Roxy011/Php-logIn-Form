<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn Page</title>

  <style>
    body{
      background-color: #01070d;
      color: white;
      justify-content: center;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      align-items:center;
      display: flex;
    }
    form{
      column-gap: 100px;
      padding: 20px 30px;
      position: absolute;
      justify-content: center;
      gap: 20px;
      background-color: #03182d;
      top: 30%;
      border-radius: 10px;
      width: auto;
      height: auto;
    }
    label{
      font-size: large;
      font-weight: 2em;
      justify-content: space-between 20px;
    }

    #btn{
      padding: 7px;
      display: flex;
      position: relative;
      justify-content: center;
      text-align: center;
      border: none;
      background-color: white;
      border-radius: 5px;
    }

    #btn:hover {
      background-color:#1157c9c9;
      color: white;
    }

  </style>
</head>
<body>
  <form action="webpage.php" method="post">
    <label for="username">User Name: </label><br/>
    <input type="text" id="username" name="username"><br><br/>
    <label for="email">Email: </label><br/>
    <input type="text" id="email" name="email"><br/><br>
    <label for="phone">Phone Number: </label><br/>
    <input type="number" id="phone" name="phone"><br/><br>
    <label for="pass">Passowrd: </label><br/>
    <input type="password" id="pass" name="password"><br/><br>
    <button id="btn" name="submit" value="Submit">Submit</button>
  </form>
</body>
</html>