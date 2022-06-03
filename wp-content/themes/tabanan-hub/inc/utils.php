<?php

/**
 * getFileVersionByLastMod
 * @param $filename
 * @return string
 */
function getFileVersionByLastMod($filename){
    if(file_exists($filename)){
        $modDateTime = date("YmdHis", filemtime($filename));
        return '?v=' . $modDateTime;
    }
}
