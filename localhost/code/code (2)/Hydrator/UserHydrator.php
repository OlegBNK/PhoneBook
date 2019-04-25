<?php

class UserHydrator
{
    public function hydrate(array $users)
    {
        $_users = [];

        foreach ($users as $user) {
            $_user = new User;
            $_user->setId(new IdentifierValueObject($user['id']));
            $_user->setEmail($user['email']);
            $_user->setPassword($user['password']);
            $_user->setStatus($user['status']);

            $_users[] = $_user;
        }

        return $_users;
    }
}