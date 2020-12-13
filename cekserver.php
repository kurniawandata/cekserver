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

Cek User linux di server / hosting<br>
<?php
for ($uid = 0; $uid < 5000; $uid++) { 
  $nothing = posix_getpwuid($uid); 
  if (!empty($nothing)) { 
    while (list($kunci, $cek) = each($nothing)) { print "{$cek}:"; } print "<br />"; 
  }
}
?>
</center>
