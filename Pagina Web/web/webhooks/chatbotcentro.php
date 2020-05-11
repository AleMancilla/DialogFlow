<?php
    include_once "../somosioticos/somosioticos_dialogflow.php";
    credenciales('chatbotcei','chatbotcei');

    if(intent_recibido("Calculadora")){
        $valor1 = obtener_variables()['number1'];
        $valor2 = obtener_variables()['number2'];
        $resultado = $valor1 + $valor2;
        enviar_texto("el resultado es $resultado");
    }
?>