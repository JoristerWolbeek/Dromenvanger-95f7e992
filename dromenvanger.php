<?php
echo("hoeveel mensen?");
$AantalMensen = readline();

if(is_numeric($AantalMensen)){
    for($x=0;$x<$AantalMensen;$x++){
        echo("wie?");
        $persoon = readline();
        echo("Hoeveel dromen?");
        $hoveelDroom = readline();
        $tempDroom = array();
        for($y=0;$y<$hoveelDroom;$y++){
            echo("wat?");
            $droom = readline();
            array_push($tempDroom,$droom);

        }
        $personen[$persoon]=$tempDroom;
    }
}else{
    echo($AantalMensen." is geen getal");
}


foreach($personen as $key=>$val){
    foreach($val as $droom){
        echo("De droom van ".$key." is: ".$droom).PHP_EOL;
    }
}
