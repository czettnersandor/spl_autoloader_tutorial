<?php

class Addressbook
{
    private $_email;
    private $_name;

    public function __construct($email, $name = null)
    {
        $this->_email = $email;
        $this->_name = $name;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getName()
    {
        // TODO: implement
    }
}
