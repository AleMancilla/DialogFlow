<?php
    include_once "../somosioticos/somosioticos_dialogflow.php";
    credenciales('chatbotcei','chatbotcei');

    $conexionDB = mysqli_connect("mysql.webcindario.com","chatbotcentro","Amh03091995","chatbotcentro");

    if(!conexionDB){
        echo "No se conecto" . PHP_EOL;
        die();
    }

    if(intent_recibido("esta_de_cuentas")){
        $resultado = $conexionDB->query("SELECT * FROM `DeudasPersonas` WHERE 1");
        $deudas = mysqli_fetch_assoc($resultado);
        $d_nombre = $deudas['Nombre'];
        $d_apellido = $deudas['Apellido'];
        $d_deuda = $deudas['deuda'];

        
        enviar_texto("te debe $d_nombre $d_apellido un monto de $d_deuda");
        
    }

    if(intent_recibido("Calculadora")){
        $valor1 = obtener_variables()['number1'];
        $valor2 = obtener_variables()['number2'];
        $resultado = $valor1 + $valor2;
        enviar_texto("el resultado es $resultado");
    }
?>