<?php
session_start();


if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } else {
    $_SESSION['count']++;
  }

  echo "Variables de sessión establecidas correctamente  </br></br></br>";
?>




<html>
<body>

<h1>
<a href="tarea1.2.php" > Contador  </a>
</h1>


</body>


</html>

