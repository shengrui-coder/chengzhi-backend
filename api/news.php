<?php
$url = 'https://3g.163.com/touch/reconstruct/article/list/BBM54PGAwangning/0-20.html';
$result = file_get_contents($url);
echo(substr($result,9,-1));
?>