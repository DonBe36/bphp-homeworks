<?php
class User extends DataRecordModel
{
    public $name;
    public $email;
    public $password;
    public $rate;
    public function __construct()
    {
        parent::__construct();
        $this->addUserFromForm();
    }
    public function addUserFromForm()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->rate = $_POST['rate'];
    }
}