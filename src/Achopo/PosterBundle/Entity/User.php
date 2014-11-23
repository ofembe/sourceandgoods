<?php

namespace Achopo\PosterBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
   
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $address;
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $phone;
     
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getAddress()
    {
        return $this->address;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
