<?php
    $handle = fopen('http://www.baidu.com', 'r');
    $content = '';
    while(!feof($handle)){
        $content .= fread($handle, 8080);
    }
    echo $content;
    fclose($handle);
?>