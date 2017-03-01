<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('http://extratorrent.cc/rss.xml?cid=8&type=last');
include("dbconfig.php");

$xmlObject = $xmlDoc->getElementsByTagName('item');
$itemCount = $xmlObject->length;
$torrext = ('.torrent');

for ($i=0; $i < $itemCount; $i++){
	$name = $xmlObject->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
	$pubD  = $xmlObject->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;
	$siz  = $xmlObject->item($i)->getElementsByTagName('size')->item(0)->childNodes->item(0)->nodeValue;
	$hash  = $xmlObject->item($i)->getElementsByTagName('info_hash')->item(0)->childNodes->item(0)->nodeValue;
	$magarrays  = $xmlObject->item($i)->getElementsByTagName('magnetURI')->item(0)->childNodes->item(0)->nodeValue;
	$filename = $name . '' . $torrext; //use as save_as too
	$date = date("Y-m-d H:i:s", strtotime($pubD));
	$magdec = urldecode($magarrays);
	$expld = (explode("&amp;tr=",$magdec));


 $statement = $link->prepare("INSERT INTO `code1` (info_hash, name, filename, save_as, size, added, announce, descr, visible, external, category) VALUES ('$hash', '$name', '$filename', '$filename', '$siz', '$date', '$expld[1]', 'No description given.', 'yes', 'yes', '41')");

$statement->execute(array(
     "info_hash" => "$hash",
     "name" => "$name",
     "filename" => "$filename",
     "save_as" => "$filename",
     "size" => "$siz",
     "added" => "$date",
     "announce" => "$expld[1]",
     "descr" => "No description given.",
     "visible" => "yes",
     "external" => "yes",
     "category" => "41"
));
}
  print "and the Tv Section.";


?>
