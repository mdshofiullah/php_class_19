<?php


namespace App\classes;


class Register
{
    protected $name;
    protected $email;
    protected $phoneNumber;
    protected $result;

    public function __construct($post = null)
    {
        if (isset($post['full_name']))
        {
            $this->name = $post['full_name'];
            $this->email = $post['email'];
            $this->phoneNumber = $post['phone_number'];
        }

    }
    public function add()
    {
//        session_start();
        $_SESSION['name'] = $this->name;
        $_SESSION['email'] = $this->email;
        $_SESSION['phoneNumber'] = $this->phoneNumber;

        return 'DATA stored successfully';
    }
    public function allData()
    {
        $this->result = [
          'name' => $_SESSION['name'],
          'email' => $_SESSION['email'],
          'mobile' => $_SESSION['phoneNumber'],
        ];
        return $this->result;
    }

}