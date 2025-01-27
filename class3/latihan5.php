<?php
$tmp = 2901;

unset($tmp);

if (isset($tmp)) {
    echo $tmp;
} else {
    echo "Variabel \$tmp tidak ada.";
}
?>
