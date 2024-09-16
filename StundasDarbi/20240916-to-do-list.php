<?php
$tasklist = ["Iet vēlu gulēt","Est"];
//1.Izvēlne
// 2.
// 3.
$continue = 'y';
do {
    echo "uzdevumu parvaldnieks ";
    echo "Apskatīt visus uzdevumu => 1\n ";
    echo "Ievadiet jaunu uzdevumu => 2\n ";
    echo "Apskatiet vienu uzdevumu => 3\n ";
    echo "Iziet => 4\n";

    $choice = readline("izvelies darbibu:");

    switch($choice){
        case 1:
            // foreach($tasklist as $task){
            //     echo d;
            // }
            echo "\n\n";
            for(i = 0; $i <count($tasklist; $i++)){
                $id=$i+1;
                echo "$id".".$tasklist[$i]\n";
            }
            echo "\n\n";

        case 2:
            echo "to be implemented";
            break;
        case 3:
            echo "to be implemented";
            break;
            case 4:
                $continue
                break;     
        default:
        echo "BYE";
        break;       
    }
}
while($continue = 'y')

?>