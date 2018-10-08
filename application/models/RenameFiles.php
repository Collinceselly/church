<?php
 $path = '.';
 $files = scandir($path);
$new_file = array();
$count = 0;
foreach ($files as $file) {
    if (strpos($file, "_model.php")) {
        $count += 1;
        $new_file =array_map('ucfirst', explode('_', $file));
        end($new_file);
        unset($new_file[key($new_file)]);
        $new_filename = implode('', $new_file);
        echo $file . "\t" . $new_filename.".php" . "\n";

        rename($file, $new_filename.".php");
        $new_file = array();
    }
}
