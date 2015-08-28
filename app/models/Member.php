<?php


class Member extends Illuminate\Database\Eloquent\Model
{
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $major;
    protected $grandfathered;
    protected $paid;
    protected $dateJoined;

    public $timestamps = [];

    protected $fillable = ['firstName', 'lastName', 'email', 'major'];


}