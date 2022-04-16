<?php
  $data = file_get_contents("storedxss.txt);
  eval($data);
?>
