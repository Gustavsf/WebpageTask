<?php

class User
{
    private static $users =[
        [
            'name' => 'admin',
            'email' => 'foo@bar.com',
            'password' => 'admin'
        ],

        [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => 'Supersecret2'
        ],

    ];

    public static function getUser(string $name, string $password): array
    {
        foreach (self::$users as $user) {
            if($user['name']==$name && $user['password'] == $password){
                return $user;
            }

        }

        return [];
    }
}