<?php

class IdentifierValueObject
{
    protected $id;

    public function __construct($id)
    {
        $id = (int) $id;

        if ($id == 0) {
            throw new \Exception('Id is zero.');
        }

        if (!is_int($id)) {
            throw new \Exception('Id is not integer.');
        }

        $this->id = $id;
    }

    public function id()
    {
        return $this->id;
    }
}