<?php
require 'vendor/autoload.php';
//use GuzzleHttp\Client;
//use Http\Discovery\HttpClientDiscovery;
//use Http\Discovery\MessageFactoryDiscovery;

//$client = HttpClientDiscovery::find();
//$messageFactory = MessageFactoryDiscovery::find();
//$homeResponse = $client->sendRequest(
    //$messageFactory->createRequest('GET', 'http://httplug.io')
//);

//var_dump($homeResponse->getStatusCode()); // 200, hopefully

//$missingPageResponse = $client->sendRequest(
   // $messageFactory->createRequest('GET', 'http://httplug.io/missingPage')
//);

//var_dump($missingPageResponse->getStatusCode()); // 404

//$client = new Client();
//header('Content-Type: application/tezt');
$count = file_get_contents('inc.txt', true);
$path=$count.'rsstxt.txt';
$fp = fopen($path ,'wa');
$rss = simplexml_load_file('http://fakty.interia.pl/feed');
//echo '<h1>'. $rss->channel->title . '</h1>';

foreach ($rss->channel->item as $item) {
   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
   echo "<p>" . $item->pubDate . "</p>";
   echo "<p>" . $item->description . "</p>";
    echo "<p>" . $item-> category. "</p>";
// Open the file to get existing content
// Append a new person to the file
// Write the contents back to the file

$count=$count+1;
fwrite($fp, utf8_encode($item->title));
fwrite($fp, "\n");
 fwrite($fp, utf8_encode(strip_tags($item->description)));
 fwrite($fp,utf8_encode( strip_tags($item->category)));
 
}


 
 
 //$data=strip_tags($item->description);
  //$data=base64_encode('prezydent zniósł wizy do usa . polska ma procent odmów'); 
 //$lines  = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $data); ;
//$res = $client->request('GET', 'https://api.github.com/user', ['auth' => ['user', 'pass']]);
//echo $res->getStatusCode();

 
 
 
 //$u= json_encode($fp, $item->title ,true);
//echo var_dump( $u);
 $fpc = fopen('inc.txt', 'w');
fwrite($fpc,$count );
fclose($fpc);


 fclose($fp);
 include('rss.php');
  include ('rsswp98.php');
  
  // connect and login to FTP server
$ftp_server = "adakos.atthost24.pl";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, 'adakos_skegi', 'Wyborowa40%');

$file = "localfile.txt";

// upload file
if (ftp_put($ftp_conn,$path , $path, FTP_BINARY ))
  {
  echo "Successfully uploaded $file.";
  }
else
  {
  echo "Error uploading $file.";
  }

// close connection
ftp_close($ftp_conn);
?>
  

  
  ?>





   
   
   
   


