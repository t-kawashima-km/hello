<html>
 <head>
  <title>HELLO PHP</title>
 </head>
 <body>
  <?php
  echo '<P><h1>Hello World!</h1></P>';
  $ip = gethostbyname(gethostname());
  echo 'IP: '.$ip;
 ?>
  <h3>hook test</h>
 </body>
</html>
