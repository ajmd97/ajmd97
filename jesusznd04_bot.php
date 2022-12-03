<?php

$nombre = "Jesús";


# Ruta para la API de Telegram
$path = "https://api.telegram.org/bot5828651225:AAFJhIfPr0vYjIuHMXP9UUg-P-uaIFko-as";
# Leemos los datos que se envian
$update = json_decode(file_get_contents("php://input"), TRUE);
# identificamos el Chat Id
$chatId = $update["message"]["chat"]["id"];
# Identificamos el mensaje
$message = $update["message"]["text"];
# Si el mensaje es /hola le enviamos una respuesta al Chat
if (strpos($message, "/hola") === 0) {
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Que tal?, mi nombre es ".$nombre.", Cómo te llamas?");
}
#Si el mensaje es /bien le enviamos Otra Respuesta
else if (strpos($message, "/bien") === 0) {
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Bien igualmente!");
}
# En caso de cualquier otra cosa enviamos Una respuesta diferente
else{
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Ahora mismo sólo tengo habilitadas las funciones /hola y /bien");
}
?>