<?php

$numero = $_POST['numero'];
$multiplicacion;
$resultado = 0;

    for ($multiplicacion=1;$multiplicacion<11;$multiplicacion++) {
            
            $resultado = $numero * $multiplicacion;
            echo 
            "<table>
                <tr>
                    <td>$numero x $multiplicacion = $resultado
                </tr>
            </table>";
            
        }
?>