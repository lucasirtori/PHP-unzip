<?php
require_once('pclzip.lib.php');
$archive = new PclZip('archive.zip');
if (($v_result_list = $archive->extract()) == 0) {
  die("Error : ".$archive->errorInfo(true));
}
echo "<pre>";
echo "Decompressione completata con successo!";
echo "</pre>";
?>