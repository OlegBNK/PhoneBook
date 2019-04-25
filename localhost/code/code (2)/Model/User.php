<?php

class User
{
    protected $id;
    protected $email;
    protected $password;
    protected $status;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        if (!in_array($status, [0, 1])) {
            throw new Exception('Status is wrong.');
        }

        $this->status = $status;
    }

    public function setId(IdentifierValueObject $id)
    {
        $this->id = $id;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Invalid email format.');
        }

        $this->email = $email;
    }

    public function setPassword($password)
    {
        if (strlen($password) < 8) {
            throw new \Exception('Password is too small.');
        }

        $this->password = $password;
    }

    public function getId()
    {
        return $this->id->id();
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function echoViewPrint()
    {
        $str = '';
        $str .= '<p>Id: ' . $this->getId() . '</p>';
        $str .= '<p>Email: ' . $this->getEmail() . '</p>';
        $str .= '<p>Password: ' . $this->getPassword() . '</p>';
        $str .= '<p>Status: ' . $this->getStatus() . '</p>';

        return $str;
    }
}