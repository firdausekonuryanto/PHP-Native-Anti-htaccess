<?php
echo "<h1>cleaning .htaccess</h1>";
echo "<hr>";
function getDirContents($dir)
{
    $files = scandir($dir);


    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
            echo "<font color='red'>" . $path . "</font><br>";
            if (str_contains($path, '.htaccess')) {
                echo "<b>$path</b>";
                // unlink($path);
            }
        } else if ($value != "." && $value != "..") {
            getDirContents($path);
            $results[] = $path;
            echo "<font color='blue'>" . $path . "</font><br>";
        }
    }
}
getDirContents('c:/xampp\htdocs/anti_malware');
