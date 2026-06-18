<?php
ob_start();
include 'index.php';
$content = ob_get_clean();
file_put_contents('index.html', $content);
echo "Compiled successfully!\n";
