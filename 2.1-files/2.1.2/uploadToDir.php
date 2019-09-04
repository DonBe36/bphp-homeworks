<?php
$uploadsDir = '/uploads';
$fileName = 'picture';
if(isset($_POST['upload'])) {
    uploadFileToDir($uploadsDir, $fileName);
};
function uploadFileToDir($uploadsDir='', $fileName='') 
{
    $extType = [
        'gif', 
        'jpg', 
        'jpe', 
        'jpeg', 
        'png',
    ];
    if ($_FILES[$fileName]['error'] === 0) {
        $tmpName = $_FILES[$fileName]['tmp_name'];
        
        if (is_uploaded_file($tmpName)) {
            $pathParts = pathinfo($_FILES[$fileName]['name']);
            if (in_array($pathParts['extension'], $extType)) {
                return move_uploaded_file(
                    $tmpName,
                    $uploadsDir.$pathParts['basename']
                );
            };
        };
    };
};