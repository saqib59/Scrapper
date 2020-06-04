<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
ini_set( "display_errors",1);
require_once("library.php");



/* 1   Data Directory Made*/
/*if (!dir('datastore')){

	mkdir('datastore',0777);
	echo "File create";	
}*/


/*   File Open  creates if it is not made */
$file=fopen('datafile.txt', 'w');
/*     FIRST CATEGORY ALL RECORDS */
for($i=1;$i<=10;$i++){
$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=67&categoryid=2&pagenumber=$i&keyword=&categoryid=2&allpage=500&sortbydropdown=1&subcategory%5B%5D=67");
foreach ($url->find('.border-box') as $key) 
{
$head = $key->find('.ProName',0)->plaintext;
$price = $key->find('.ProPrice',0)->plaintext;
$inner_url=$key->find('div.ProName a',0)->href;
//$img=$key->find('.ProImg',0);
//echo $img;
echo "Title is "." ".$head;
echo "<br>";
echo "Price is "." ".$price;
echo "<br>";
$website_url=file_get_html("https://www.dfwfurniturewarehouse.com/".$inner_url);//FOR INNER DETAILS

/*   INNER DETAILS i-e SKU  */
foreach ($website_url->find('.SKU') as $inner){
$SKU=$inner->find('span',0)->plaintext;
$dimensions=$inner->find('span #dimensionCntCust');
echo "SKU is "." ".$SKU;
echo "<br>";
echo "Dimension is "." ".$dimensions;
//echo $dimensions;
echo "<br>";
}



}

}



?>
