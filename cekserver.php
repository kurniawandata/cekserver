<center>
Cek kernel <br>
<?php
echo php_uname();
?>
<br>
<br>
Cek sistem operasi<br>
<?php
echo PHP_OS;
?>
<br>
<br>

Center User<br>
<?php
for ($uid = 0; $uid < 4000; $uid++) { 
  $nothing = posix_getpwuid($uid); 
  if (!empty($nothing)) { 
    while (list($kunci, $data) = each($nothing)) { print "{$data}:"; } print "<br />"; 
  }
}
?>
</center>