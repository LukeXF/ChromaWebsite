<div id="header">
<?php
    // integer starts at 0 before counting
    $i = 0;
    $dir = '/home/minecraft/multicraft/servers/CH-Factions/plugins/Essentials/userdata';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "There were $i files";
?>
<br><br><br>
-----
<br><br><br>
<?php

$directory = '/home';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

while($it->valid()) {

    if (!$it->isDot()) {

        echo 'SubPathName: ' . $it->getSubPathName() . "\n";
        echo '<br>SubPath:     ' . $it->getSubPath() . "\n";
        echo '<br>Key:         ' . $it->key() . "\n\n";
        echo '<br><br>';
    }

    $it->next();
}

?>