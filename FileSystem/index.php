<?php

$path = '/dir/myfile.php';
$file = "file.txt";
/*
Return file name
    echo basename($path);

file name w/ file ext
    echo basename($path,'.php');

Return directory
    echo dirname($path);

Check if file is exists
    echo file_exists($file);

Return absolute path
    echo realpath($file);

Check to see if file
    echo is_file($file);

Check if file is writtable
    echo is_writable($file);

Check if file is readable
    echo is_readable($file);

Check the file size
    echo filesize($file);


--Manipulate file

Create directory
    mkdir('testing');

Remove directory if empty
    rmdir('testing');

Copy file
    echo copy('file1.txt', 'file2.txt');

Rename file 
    echo rename('file1.txt', 'file.txt');

Delete a file
    echo unlink('file2.txt');

Write from file to string
    echo file_get_contents($file);

Write a string to the file
    echo file_put_contents($file, 'Goodbye World');
    $current = file_get_contents($file);
    $current .= ' Good Bye World';
    file_put_contents($file ,$current);

Oopen file for reading
    $handle = fopen($file ,"r");
    $data = fread($handle, filesize($file));
    echo $data;

*/
//Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);