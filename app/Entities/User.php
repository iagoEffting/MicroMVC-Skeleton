<?php

namespace App\Entities;

/**
 * @Entity @Table(name="users")
 **/
class User
{

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;

    /**
     * @Column(type="string")
     **/
    protected $name;


}