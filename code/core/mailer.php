<?php

class Mailer
{
    private $_recipients;

    public function addRecipient($email)
    {
        $recipient = new Addressbook($email);
        $this->_recipients[] = $recipient;
    }

    public function send($message)
    {
        foreach ($this->_recipients as $recipient) {
            mail($recipient->getEmail(), 'Alert', $message);
            echo sprintf("Mail sent to %s\n", $recipient->getEmail());
        }
    }
}
