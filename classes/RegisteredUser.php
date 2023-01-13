<?php 

class RegisteredUser extends User{
    private int $id;
    private string $username;
    private string $password;
    protected $discount = 20;
}