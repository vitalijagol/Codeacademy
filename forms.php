<?php
  if($_SERVER["REQUEST_METHOD"] =='POST'){
      $file = 'formos.txt';
      $previousData = file_get_contents($file);
      $postData = $_POST['name']. " ". $_POST['email']. " ". "\n";
      file_put_contents($file, $previousData.$postData );
  }

?>
<html>
  <body>
    <form method="post action="formos.txt">
      <input type="text" value="Name" required>
      <input type="email" value="Email" required>
      <button name="submit" value="submit">Submit</button>
    </form>
  </body>
</html>