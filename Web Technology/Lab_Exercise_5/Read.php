<!doctype html>
<html>
<head>
  <title>Form</title>
  </head>
<body>
<h1> Electronic shop</h1>
</br>
<form action="Read.php" method="POST" target="_blank" >
  Enter product category(as Mobile or Laptop):
  <input type="text" name="category"  >
  <br><br>
   Enter the product name(can leave empty):
  <input  type="text" name="pname">
  <br><br>
<div>
 <input type="Submit" name="submit">
 
</div>
</form>
</body>
</html> 

<?php
    
if(isset($_POST['submit']))
{
$category= $_POST['category'];
$pname= $_POST['pname'];
$dom = new DomDocument;
$dom->load("Products.xml");

$params = $dom->getElementsByTagName('product');
echo ".........................................................................................................................<br>";
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
