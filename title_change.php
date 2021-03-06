<?php

require_once("library.php");

set_time_limit(1000000000000);
 /*
https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=154&categoryid=1&pagenumber=&keyword=&allpage=500&sortbydropdown=1



https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=153&categoryid=1&pagenumber=$i&keyword=&allpage=500&sortbydropdown=1*/
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/datatables.min.css"/>
 

  <title></title>
  <style type="text/css">
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
</head>
<body>

<table id="mytable1">
  <thead>
    <tr>
    <th>Title</th>
    <th>Price</th>
    <th>SKU</th>
    <th>Dimension</th>
    <th>Image</th>  
    <th>Description</th>
    <th>Gallery Images</th>
    <th>Sub Category</th>
 </tr>
</thead>
 <tbody>
<?php
for ($i=1;$i<=10;$i++){


$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory=27&categoryid=9&pagenumber=".$i."");
foreach ($url->find('.border-box') as $key){
$inner_url= $key->find('div.ProImg a',0)->href;

$website_url=file_get_html("https://www.dfwfurniturewarehouse.com/".$inner_url);//FOR INNER DETAILS

foreach ($website_url->find('.ProDtlCnt') as $inner){

 $SKU=$inner->find('.SKU span',0)->plaintext;
 // $title=$inner->find('.ProCnt .ProDtlTitle',0)->plaintext;
 $title=$inner->find('#productnameh2',0)->plaintext;
 // $price=$inner->find('.PRedTxt1 .PRedSpan1',0)->plaintext;
 $price=$inner->find('.totalPrice #priceTotal',0)->plaintext;

 $dimension=$inner->find('.SKU #dimensionCntCust',0)->plaintext;
 $img=$inner->find('.carousel-inner>.item>a>img',0)->src;
 $Description=$inner->find('#hset-description>div',0)->plaintext;
 // $bullets=$inner->find('.#bullet_feature',0)->plaintext;


 ?>
  <tr>
    <td><?php  echo $title; ?></td>
    <td><?php  echo $price; ?></td>
    <td><?php  echo $SKU; ?></td>
    <td><?php  echo $dimension; ?></td>
    <td><?php  echo 'https:'.$img; ?></td>
    <td><?php  echo $Description; ?></td>
    <td><?php 
    foreach ($inner->find('#thumbcarousel>.carousel-inner') as $imagees) {
    
        foreach ($imagees->find('img') as $keysss) {
            echo 'https:'.$keysss->attr['src'];
            echo "<br>";
        }
      }

     ?></td>
    <td>Rugs</td>
  </tr>
  <?php
  }
}
}
?>
</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>


</body>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#mytable1').DataTable({
       dom: 'Bfrtip',
      buttons: [
        'copy', 'excel','csv','pdf'
    ]
    });

});
</script>
</html>


