--TEST--
cligen_exit() - free cligen handle
--EXTENSIONS--
cligen
--FILE--
<?php
$h = cligen_init();
var_dump(cligen_exit($h) == 0);
?>
--EXPECT--
bool(true)
