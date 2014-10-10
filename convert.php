<?php

    $color = array('#333300','#FF5050','#66FFFF','#33CC33','#CC99FF','#660066','#CCFF33','#006600','#663300','#003366','#666699','#3366CC');
	$filename = "Nodes.csv";
	
			if($filename != null)
			{	
			if (($handle = fopen("upload/".$filename, "r")) !== FALSE) 
			{
			fgetcsv($handle, 1000, ",");
			 echo "{";
		     echo " \"nodes\": [ ";
			   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
			      {
			        $num = count($data);
		        	$id = $data[0];
                    $label = $data[1];
		            $x = $data[2];
		            $y = -$data[3];
		            $colorId = $data[4];
                    //  echo "\"".$id."\"=>\"".$color[$colorId]."\",<br>";
		            
		         echo "{";
		         echo " \"id\": \"" .$id."\",";
		         echo " \"x\": ".$x.",";
		         echo "\"y\": ".$y.",";
                 echo " \"label\": \"".$label."\",";
		         echo " \"size\": 0.4,";
		         echo " \"color\": \"".$color[$colorId]."\"";
		         echo "},";
                    }
                    echo "]}";
			    fclose($handle);
             }
			}
        
    
 ?>