<?php
$zip = new ZipArchive();
if ($zip->open('./inputactivity') === true) {
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


