<?php
require_once 'eb.combinefiles.php';
$conf = array
(
'fileList' => array(
'_addams.css',
'_batman.css',
'_godzilla.css'
),'cacheDir' => './cache/',
'cacheExt' => '.css',
'lifeTime' => 864000,
'compress' => array('gzip', 'css'),'mimeType' => 'text/css',
'encoding' => 'utf-8'
);
CombineFiles::getInstance()
->setConf($conf)
->combine();
?>