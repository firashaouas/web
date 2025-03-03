<?php
class User{
    private $id;
    private $email;
    private $pwd;
    public function __construct( $email, $password){
       
        $this->email = $email;
        $this->pwd = $password;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->id;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->id = $user;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pwd
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     */
    public function setPwd($pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }
}
?>