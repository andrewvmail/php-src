--TEST--
Phar::getSupportedCompression() (bz2 and zlib)
--SKIPIF--
<?php if (!extension_loaded("phar")) print "skip"; ?>
<?php if (!extension_loaded("spl")) print "skip SPL not available"; ?>
<?php if (!extension_loaded("bz2")) print "skip bz2 not available"; ?>
<?php if (!extension_loaded("zlib")) print "skip zlib not available"; ?>
--INI--
phar.require_hash=0
--FILE--
<?php
var_dump(Phar::getSupportedCompression());
?>
===DONE===
--EXPECT--
array(2) {
  [0]=>
  string(2) "GZ"
  [1]=>
  string(5) "BZIP2"
}
===DONE===