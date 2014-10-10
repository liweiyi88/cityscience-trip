<?php
	$filename = "Edges.csv";
    $colors = array(
        "1"=>"#660066",
        "3"=>"#006600",
        "4"=>"#006600",
        "5"=>"#006600",
        "6"=>"#006600",
        "7"=>"#006600",
        "8"=>"#003366",
        "9"=>"#003366",
        "10"=>"#66FFFF",
        "11"=>"#66FFFF",
        "12"=>"#CC99FF",
        "13"=>"#CC99FF",
        "14"=>"#CC99FF",
        "15"=>"#66FFFF",
        "16"=>"#66FFFF",
        "17"=>"#33CC33",
        "20"=>"#666699",
        "21"=>"#666699",
        "22"=>"#666699",
        "23"=>"#666699",
        "24"=>"#FF5050",
        "25"=>"#FF5050",
        "26"=>"#333300",
        "27"=>"#660066",
        "28"=>"#006600",
        "30"=>"#660066",
        "31"=>"#660066",
        "32"=>"#660066",
        "33"=>"#660066",
        "34"=>"#66FFFF",
        "35"=>"#66FFFF",
        "36"=>"#66FFFF",
        "37"=>"#66FFFF",
        "38"=>"#66FFFF",
        "39"=>"#66FFFF",
        "40"=>"#66FFFF",
        "41"=>"#333300",
        "46"=>"#33CC33",
        "47"=>"#003366",
        "48"=>"#003366",
        "49"=>"#CC99FF",
        "50"=>"#CC99FF",
        "51"=>"#333300",
        "53"=>"#3366CC",
        "54"=>"#3366CC",
        "55"=>"#66FFFF",
        "56"=>"#33CC33",
        "57"=>"#33CC33",
        "58"=>"#66FFFF",
        "59"=>"#66FFFF",
        "62"=>"#006600",
        "63"=>"#33CC33",
        "64"=>"#663300",
        "65"=>"#663300",
        "66"=>"#663300",
        "67"=>"#663300",
        "68"=>"#663300",
        "69"=>"#663300",
        "70"=>"#663300",
        "71"=>"#66FFFF",
        "72"=>"#66FFFF",
        "73"=>"#660066",
        "74"=>"#660066",
        "75"=>"#660066",
        "76"=>"#33CC33",
        "77"=>"#33CC33",
        "78"=>"#006600",
        "79"=>"#006600",
        "81"=>"#FF5050",
        "82"=>"#FF5050",
        "83"=>"#006600",
        "84"=>"#FF5050",
        "85"=>"#FF5050",
        "86"=>"#FF5050",
        "87"=>"#66FFFF",
        "88"=>"#66FFFF",
        "89"=>"#CCFF33",
        "90"=>"#CCFF33",
        "91"=>"#CCFF33",
        "92"=>"#CC99FF",
        "93"=>"#CC99FF",
        "94"=>"#CC99FF",
        "95"=>"#CC99FF",
        "96"=>"#333300",
        "97"=>"#663300",
        "98"=>"#663300",
        "99"=>"#FF5050",
        "100"=>"#FF5050",
        "101"=>"#CCFF33",
        "102"=>"#666699",
        "103"=>"#66FFFF",
        "104"=>"#FF5050",
        "105"=>"#CCFF33",
        "106"=>"#CCFF33",
        "107"=>"#FF5050",
        "108"=>"#FF5050",
        "109"=>"#FF5050",
        "110"=>"#FF5050",
        "111"=>"#FF5050",
        "112"=>"#33CC33",
        "113"=>"#FF5050",
        "114"=>"#660066",
        "115"=>"#660066",
        "116"=>"#66FFFF",
        "117"=>"#66FFFF",
        "118"=>"#66FFFF",
        "119"=>"#FF5050",
        "120"=>"#FF5050",
        "121"=>"#FF5050",
        "122"=>"#006600",
        "123"=>"#333300",
        "124"=>"#FF5050",
        "125"=>"#FF5050",
        "126"=>"#FF5050",
        "127"=>"#3366CC",
        "128"=>"#3366CC",
        "129"=>"#3366CC",
        "130"=>"#663300",
        "131"=>"#663300",
        "133"=>"#33CC33",
        "134"=>"#CCFF33",
        "135"=>"#660066",
        "136"=>"#333300",
        "137"=>"#333300",
        "138"=>"#33CC33",
        "139"=>"#003366",
        "140"=>"#003366",
        "141"=>"#003366",
        "142"=>"#66FFFF",
        "143"=>"#FF5050",
        "144"=>"#333300",
        "145"=>"#006600",
        "146"=>"#33CC33",
        "147"=>"#33CC33",
        "148"=>"#CC99FF",
        "149"=>"#CC99FF",
        "151"=>"#66FFFF",
        "152"=>"#66FFFF",
        "153"=>"#660066",
        "154"=>"#33CC33",
        "155"=>"#33CC33",
        "156"=>"#66FFFF",
        "157"=>"#33CC33",
        "160"=>"#33CC33",
        "161"=>"#CC99FF",
        "163"=>"#333300",
        "164"=>"#CC99FF",
        "165"=>"#CC99FF",
        "166"=>"#666699",
        "167"=>"#666699",
        "168"=>"#666699",
        "169"=>"#003366",
        "170"=>"#003366",
        "171"=>"#003366",
        "172"=>"#660066",
        "173"=>"#FF5050",
        "174"=>"#FF5050",
        "175"=>"#FF5050",
        "176"=>"#FF5050",
        "177"=>"#FF5050",
        "178"=>"#CCFF33",
        "179"=>"#CCFF33",
        "180"=>"#CCFF33",
        "181"=>"#CCFF33",
        "183"=>"#CCFF33"
    );
if($filename != null)
			{	
			if (($handle = fopen("upload/".$filename, "r")) !== FALSE) 
			{
			fgetcsv($handle, 1000, ",");
		     echo " \"edges\": [ ";
		       $i = 0;
			   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
			      {
			        $num = count($data);
		        	$id = "e".$i;
		            $source = $data[0];
		            $target = $data[1];
                    $color = "";
                    foreach($colors as $key=>$value)
                    {
                        if($source == $key)
                        {
                            $color = $value;
                        }
                    }
		            
		         echo "{";
		         echo "\"id\":\"".$id."\",";
		         echo "\"source\":\"".$source."\",";
		         echo "\"target\":\"".$target."\",";
                 echo "\"color\":\"".$color."\"";
		       //  echo "\"type\":\"curve\"";
		         echo "},";                  
		         $i++;
                    }
                    echo "]";		   
			    fclose($handle);
             }
			}
        
    
 ?>