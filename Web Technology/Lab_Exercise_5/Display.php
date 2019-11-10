<?php

if(isset($_POST['submit']))
{
$category= $_POST['category'];
$pname= $_POST['pname'];
$dom = new DomDocument;
$dom->load("Products.xml");

$params = $dom->getElementsByTagName('product');
echo $category.'<br>';
echo ".....................................................<br>";
foreach ($params as $param) {

      $cat= $param -> getAttribute('category');
      if($category==$cat||$category=='')
      {
          
          foreach($param->childNodes as $nodename)
          {
          
            $nvalue=$nodename->nodeName;
            if($nvalue!="#text")
            echo $nodename->nodeName.":".$nodename->nodeValue."<br>";
          }
          echo ".....................................................<br>";
       
      }
}
}

?>
