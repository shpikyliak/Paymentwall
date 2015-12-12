# Paymentwall

Класс **Answer** возвращает XML или JSON ответ для клиента, методы **XMLAnsw** и **jsonAnsw** соответственно.
Принимают массив ответ валидации.

`$answer = new Answer();
$result = $answer->jsonAnsw($validate); `

На клиенте для обработки использовать функцию **showErrorXML** для XML и **showErrorJson** для JSON.

  
