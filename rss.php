<?php
$count = file_get_contents('inc.txt', true);
$fp = fopen($count.'rsstxt.txt' ,'wa');
$rss = simplexml_load_file('http://fakty.interia.pl/feed');
echo '<h1>'. $rss->channel->title . '</h1>';

foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
   
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file

$count=$count+1;
fwrite($fp, $item->title);
fwrite($fp, "\n");
 fwrite($fp, strip_tags($item->description));
$fpc = fopen('inc.txt', 'w');
fwrite($fpc,$count );
fclose($fpc);
$zip = new ZipArchive;
if ($zip->open($count.'.zip') === TRUE) {
    $zip->addFile($count.'rsstxt.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
}
 fclose($fp);
?>





   
   
   
   


