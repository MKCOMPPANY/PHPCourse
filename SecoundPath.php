<?php 


$students = array
(
    array("ID"=>101,"NAME"=>"Mukhtar","Family"=>"Nazari","Mate"=>20,"Physic"=>10,"History"=>14),
    array("ID"=>102,"NAME"=>"Muhammad","Family"=>"Akbari","Mate"=>15,"Physic"=>11,"History"=>13),
    array("ID"=>103,"NAME"=>"Reza","Family"=>"Rezaei","Mate"=>20,"Physic"=>12,"History"=>14),
    array("ID"=>104,"NAME"=>"Ali","Family"=>"Hakimi","Mate"=>10,"Physic"=>17,"History"=>16)
) ;

foreach($students as $Student )
{
    echo  "#".$Student["ID"] ." ". $Student["NAME"] . " ".$Student["Family"] . "    ". "Average : ".
     ($Student["Mate"]+$Student["Physic"]+$Student["History"])/3 ."<br>";
   
}



?>