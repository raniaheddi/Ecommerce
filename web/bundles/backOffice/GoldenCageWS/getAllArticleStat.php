<?php
include 'conf.php';

$con = mysql_connect($HOST, $USER, $PWD);
mysql_select_db($DATA_BASE, $con);

	$req = "SELECT nom, quantite FROM  `article` ";



$data = mysql_query($req);


      $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
      $root_element = "articles"; 
      $xml .= "<$root_element>";
	while($row = mysql_fetch_assoc($data))
     {
      $xml .= "<article>";
 
      foreach($row as $key => $value)
      {
         //$key holds the table column name
         $xml .= "<$key>";
 
         //embed the SQL data in a CDATA element to avoid XML entity issues
         $xml .= "<![CDATA[$value]]>"; 
 
         //and close the element
         $xml .= "</$key>";
      }
 
      $xml.="</article>";
   }
	//close the root element
	$xml .= "</$root_element>";

header ("Content-Type:text/xml"); 

//output the XML data
echo $xml;


?>

