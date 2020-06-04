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
<th>SR.NO</th>
    <th>Description</th>
 </tr>
<?php
$k=1;
# code...
$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/living-room/mccade-cobblestone-reclining-sofa.html");
/*foreach ($url->find('.border-box') as $key)
{
$inner_url=$key->find('div.ProName a',0)->href;
$website_url=file_get_html("https://www.dfwfurniturewarehouse.com/".$inner_url);//FOR INNER DETAILS*/

$Description=$url->find('.ProDtlCnt #hset',0)->outertext;

//$des2=
  
//echo $Description;

/*foreach ($url->find('ProDtlCnt') as $inner){


 ?>
  <tr>
    <td><?php  echo $k;?></td>
    <td><?php  echo $Description;?></td>
  </tr>
  <?php
  $k++;
}*/
?>

</table>