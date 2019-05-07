<?php  
 $count = 0;  
 $num = 2;
 $prime_numbers =array();  
   while ($count < 10 )  
        {  
           $div_count=0;  
              for ( $i=1; $i<=$num; $i++)  
                 {  
                      if (($num%$i)==0)  
                          {  
                             $div_count++;  
                           }  
                  }  
                       if ($div_count<3)  
                          {  
                             $prime_numbers[]=$num; 
                             $count=$count+1;  
                           } 
                       $num=$num+1;  
          }  //End while 

$table = array();
foreach($prime_numbers as $key=>$left_value) {
      print $left_value;
      foreach($prime_numbers as $key=>$top_value){
	    //  $table[$left_value][]= $left_value * $top_value;
		    
		
		print "        ". $left_value * $top_value;
	   }
print "\n";
}

//print_r($table);


 
?>  
