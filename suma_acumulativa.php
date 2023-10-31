<?php

$numeroN = $_POST['numeroN'];
$acumulacion = 0;

    for ($i=1;$i<$numeroN;$i++) {
            $acumulacion = $numeroN * $i;
        }
        echo "$acumulacion";
?>