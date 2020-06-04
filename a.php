<?php

/*error_reporting( E_ALL );
ini_set( "display_errors", 1 );
ini_set( "display_errors",1);*/
require_once("library.php");

set_time_limit(100000);
/* 1   Data Directory Made*/
/*if (!dir('datastore')){

mkdir('datastore',0777);
echo "File create";
}*/


/*   File Open  creates if it is not made */
//$file=fopen('datafile.txt', 'w');

//      $filename = 'user.csv';      
      //header("Content-type: text/csv");      
    //  header("Content-Disposition: attachment; filename=$filename");      
      //$output = fopen("php://output", "w");      
  //    $header = array_keys($results[0]);
//      fputcsv($output, $header);
//$file2=fopen('productss_s.csv', 'w');


/*
     FIRST CATEGORY ALL RECORDS */
//for($i=1;$i<=10;$i++){
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

<table>
<tr>
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
//https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=153&categoryid=1&pagenumber=1&keyword=&categoryid=1&allpage=500&sortbydropdown=1&subcategory%5B%5D=153

https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=153&categoryid=1&pagenumber=$i&keyword=&allpage=500&sortbydropdown=1

$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=153&categoryid=1&pagenumber=$i&keyword=&category1=3&allpage=500&sortbydropdown=49&subcategory%5B%5D=213");//Bedroom
//https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=49&categoryid=14&pagenumber=$i&keyword=&categoryid=14&allpage=500&sortbydropdown=49&subcategory%5B%5D=49
foreach ($url->find('.border-box') as $key)
{
$inner_url=$key->find('div.ProName a',0)->href;
$website_url=file_get_html("https://www.dfwfurniturewarehouse.com/".$inner_url);//FOR INNER DETAILS
foreach ($website_url->find('.ProDtlCnt') as $inner){
 $SKU=$inner->find('.SKU span',0)->plaintext;
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