<?php
session_start();
session_destroy();

?><script>alert("Se ha cerrado la sesi\u00f3n");</script><?
echo '<html><head><meta http-equiv="REFRESH" content="0; url=ce_acceso.php"></head></html>';
?>
