<?php

$arrSQL = [
            0 => ['id'=> '1', 'fk' => '123', 'user'=> 'EI'],
            1 => ['id'=> '2', 'fk' => '123', 'user'=> 'PE'],
            2 => ['id'=> '3', 'fk' => '356', 'user'=> 'AP'],
    ];

$arrIndexadoPorFk = [];
while($lineSQL = array_shift($arrSQL)){
    $result[$lineSQL['fk']][] = $lineSQL;
}

print_r($result);
