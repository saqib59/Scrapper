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
$url = file_get_html("https://www.dfwfurniturewarehouse.com/category/showsorted/allpage/500/layout/yes/fromajax/true?keyword=&subcategory%5B%5D=67&categoryid=2&pagenumber=1&keyword=&categoryid=2&allpage=500&sortbydropdown=1&subcategory%5B%5D=67");
foreach ($url->find('.border-box') as $key) 
{
$head[]= $key->find('.ProName',0)->plaintext;
$price[] = $key->find('.ProPrice',0)->plaintext;
}

//var_dump($head);

echo "<br>";
echo "<br>";
echo "<br>";


$data=array(
"0"=>array(
"title"=>$head,
"price"=>$price
));

echo "<pre>";
var_dump($data);

echo "</pre>";
//var_dump($data);
echo "<br>";

/*foreach ($data as $row ){

fputcsv($output, $row);  
	
	# code...
}
*/

//$data=explode(",", $head);//string

//var_dump($data);


//fputcsv($file2,$head);

//var_dump($data);


//var_dump($head);

/*foreach ($data as $value)
{

fputcsv($file2,$value);

}

/*foreach ($data as $row)
{
fputcsv($file2, implode(',',$row));
//fputcsv($file2,$price);

//var_dump(explode(',', $value));
}*/



//fputcsv($file2,$head);


//$dataa=array($head,$price);


/*$data=array(
"head"=>$head,
"price"=>$price
);*/

//var_dump($dataa);

//$aa=implode(',', $data);

//var_dump($aa);

/*foreach ($dataa as $value)
{
fputcsv($file2,explode(",", $value));
//fputcsv($file2,$price);
}*/

/*foreach ($price as $key2 =>$value2)
{
fputcsv($file2,explode(",", $value2));
}*/

//}

/*foreach ($price as $value2) {
fputcsv($file2,explode(',', $value2));
}*/



/*$data=array(
'Title'=>$head,
);*/

/*



$aa=implode("",$data);


$ee[]=explode(" ",$aa);*/

//$aa[]=implode("",$data);

//$bb[]=implode("[Title]:",$price);

//fputcsv($file2,$ee);

//echo "<br>";

/*$data=array(
'Title'=>$head,
);*/

//fputcsv($file2,$bb);


//fputcsv($file2,$head);

/*for($i=1;$i<10;$++)
{
	fputcsv($file2,$head);
}*/


//var_dump($data);

//$aa=implode(",",$data);


//fputcsv($file2,$aa);

//echo $data;



?>