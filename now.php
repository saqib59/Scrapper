<?php

require_once("library1.php");

set_time_limit(100000);

?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table
><tr>
    <th>Title</th>
    <th>Price</th>
    <th>SKU</th>
    <th>Dimension</th>
    <th>Image</th>  
    <th>Description</th>
    <th>Category</th>
 </tr>
<?php
for ($i=1;$i<=2;$i++){
# code...


$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=153&categoryid=1&pagenumber=$i&keyword=&categoryid=1&allpage=500&sortbydropdown=49&subcategory%5B%5D=153");
foreach ($url->find('.border-box') as $key)
{
$inner_url=$key->find('div.ProImg a',0)->href;
$website_url=file_get_html("https://www.dfwfurniturewarehouse.com/".$inner_url);//FOR INNER DETAILS
foreach ($website_url->find('.ProDtlCnt') as $inner){
 $SKU=$inner->find('.SKU span',0)->plaintext;
 var_dump($SKU);exit();
 $title=$inner->find('.ProCnt .ProDtlTitle',0)->plaintext;
 $price=$inner->find('.ProDtlPrice .prodDetlPrc li.PRedTxt1 span.PRedSpan1',0)->plaintext;
 $dimension=$inner->find('span#dimensionCntCust',0)->plaintext;
 $img=$inner->find('.carousel-inner>.item>a>img',0)->src;
 $Description=$inner->find('.customtabsp',0)->outertext;
 ?>
  <tr>
    <td><?php  echo $title;?></td>
    <td><?php  echo $price;?></td>
    <td><?php  echo $SKU;?></td>
    <td><?php  echo $dimension;?></td>
    <td><?php  echo $img;?></td>
    <td><?php  echo strstr($Description,'Description')? $Description:' ';?></td>
    <td>Bars & Bar Tables</td>
  </tr>
  <?php
}
}
}
?>
</table>