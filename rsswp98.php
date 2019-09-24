<?php

$rss = simplexml_load_file('https://www.tvn24.pl/wiadomosci-z-kraju,3.xml');
echo  $rss->channel->title  ;
$count = file_get_contents('inc.txt', true);
$fp = fopen($count. 'tvn24.txt' ,'wa');

echo  $rss->channel->title  ;
foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link  . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
    echo "<p>" . $item-> category. "</p>";
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file
}
$count=$count+1;
fwrite($fp, $item->title);
fwrite($fp, "\n");
foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
   
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file

fwrite($fp, "\n");
 fwrite($fp, strip_tags($item->description));
 fwrite($fp, strip_tags($item->category));
}
 fclose($fp);
?>


   
   
   
   


