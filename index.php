<?php
$secret_key = ""; // Your Private Key that's used for ShareX connection
$sharexdir = "i/"; // where are your images stored
$domain_url = 'https://your-domain.com/'; // Your domain name
$lengthofstring = 6; // Lenght of the file name. Example: rgs63s.png

function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = '';
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

if(isset($_POST['secret'])) {
    if($_POST['secret'] == $secret_key) {
        $filename = RandomString($lengthofstring);
        $target_file = $_FILES["sharex"]["name"];
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES["sharex"]["tmp_name"], $sharexdir.$filename.'.'.$fileType)) {
            echo $domain_url.$sharexdir.$filename.'.'.$fileType;
        }
            else {
           echo 'File upload failed - CHMOD/Folder doesn\'t exist?';
        }
    }
    else {
        echo 'Invalid Secret Key';
    }
}
else {
    echo 'No data recieved. This is a ShareX Server, its open source, go check it out <a href="https://github.com/lanoow/sharex">here.</a>';
}
?>
