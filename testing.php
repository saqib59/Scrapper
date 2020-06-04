<?php
     error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
   ini_set( "display_errors",1);
  require_once("library.php");
 $Description=$website_url->find('.ProDtlCnt .customtabsp',0)->outertext;
echo $des= strstr($Description,'Description')? $Description:' No detail';

?>