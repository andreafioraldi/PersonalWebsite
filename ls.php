<?

$dir = $_GET['dir'];
$content = scandir($dir);
$subdirs = array();
$files = array();

foreach($content as $elem) {
    if($elem[0] != '.') {
        if(is_dir($dir.'/'.$elem))
            array_push($subdirs, $elem);
        else
            array_push($files, $elem);
    }
}

foreach($subdirs as $elem) {
    echo "$elem\n";
}
foreach($files as $elem) {
    $link = $dir.'/'.$elem;
    echo "<a href='$link'>$elem</a>\n";
}

?> 