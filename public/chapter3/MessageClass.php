<?php
class MessageClass {
    const EXIT_MESSAGE = "Thank you for coming to my TEDDY talk!";
    public function thankyouBye() {
        echo self::EXIT_MESSAGE;
    }
}
$byebye = new MessageClass();
$byebye->thankyouBye();