 <?php       
      // How to Generate CSV File from Array in PHP Script       
      $results = array (  
           "0" => array(  
                "name"           => "Anna Smith",  
                "email_id"      => "annabsmith@inbound.plus", 
                "title"         =>"ssse"
          
           ),  
           "1" => array(  
                "name"           => "Johnny Huck",  
                "email_id" => "johnnyohuck@inbound.plus",
                "title"         =>"ssssse"

           )  
      ); 

      var_dump($results); 


      /*$filename = 'userData.csv';       
      header("Content-type: text/csv");       
      header("Content-Disposition: attachment; filename=$filename");       
      $output = fopen("php://output", "w");       
      $header = array_keys($results[0]);       
      fputcsv($output, $header);       
      foreach($results as $row)       
      {  
           fputcsv($output, $row);  
      }       
      fclose($output);      */ 
 ?>