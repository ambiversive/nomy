<?php
        $inputFile = '../cache/log';
        $fh = fopen($inputFile, 'r');
        $contents = fread($fh, 5120); // 5KB
        fclose($fh);

        $fileLines = explode("\n", $contents);
        $fz = $fileLines[0];
        $x = strpos($fz,'->');
        $y = substr($fz,$x,strlen($fz)); 
        $y = substr($y,6,strlen($y));
        $y = substr($y,0,-5);
        print $y;

$filename = '../links.html';
$somecontent = "<p><a href=\"http://localhost/nomy".$y."\">$y</a></p>";

// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }

    // Write $somecontent to our opened file.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }

    //echo "Success, wrote ($somecontent) to file ($filename)";

    fclose($handle);

} else {
    echo "The file $filename is not writable";
}

