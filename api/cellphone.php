<?php
$url = 'https://3g.163.com/touch/reconstruct/article/list/BAI6I0O5wangning/0-10.html';
$result = file_get_contents($url);
echo(substr($result,9,-1));
?>