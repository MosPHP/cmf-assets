<?php
//移动静态资源到 public/asset/mos/目录下
$sourceDir = __DIR__.'/mos';
if(is_dir($sourceDir)){
    $destinationDir = __DIR__.'/../../../public/asset/';

// 确保目标目录存在
    if (!is_dir($destinationDir)) {
        mkdir($destinationDir, 0755, true); // 创建目标目录，如果不存在的话
    }

// 移动文件夹
    if (rename($sourceDir, $destinationDir . '/' . basename($sourceDir))) {
        echo "File moved successfully\n";
    } else {
        echo "移动静态文件失败\n";
    }
}else{
    echo "静态资源不存在\n";
}
