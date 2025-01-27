<?php
$zip = new ZipArchive();
if ($zip->open('./your_elearning.zip') === true) {
    if ($zip->extractTo('./')) {
        $zip->close();
        echo 'Unzip Complete';
    } else {
        echo 'Extract Error';
    }
} else {
    echo 'Open Error';
}
?>
