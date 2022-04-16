<html>
<head>
  <title>csfr</title>
</head>
<body>
   <form method="get">
     <label for="username">User: </label>
     <input type="text" id="username" name="username">
     <label for="password">Password: </label>
     <input type="password" id="password" name="password">
     <input type="submit">
   </form>
   
   <div>

     <?php
       $username = $_GET['username'];
       $password = $_GET['password'];

       if (!empty($username) && !empty($password)) {
          if ($username == "host" && $password == "pass")
            echo "success";
          else
	    echo "failed";
       }
     ?>
   </div>
</body>
</html>

