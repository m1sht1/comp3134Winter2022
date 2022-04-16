<html>
<head>
  <title>csfr</title>
</head>
<body>
  <?php session_start();  $_SESSION["confirmation"] = "asdfasdf";?>
  <form name="theform">
     <input type="hidden" name="username" value="host">
     <input type="hidden" name="password" value="pass">
     <input type="hidden" name="confirmation" value="helloworld">
  </form>
  <script>
    document.theform.action = "/wk12/csfr.php";
    document.theform.submit();
  </script>
</body>
</html>

