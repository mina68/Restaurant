<?php

class Users
{
	private $phone_number;
	private $password;
    private $username;
    private $address;
    private $user_id;
    public  $error;

    public function set_phone_number($phone_number)
    {
        $this->phone_number = strval($phone_number);
    }
    public function set_user_id($user_id)
    {
        $this->user_id = $this->integer_filter($user_id);
    }
    public function set_password($password)
    {
        $this->password = sha1($password);
    }
    public function set_username($username)
    {
        $filtered_username = $this->string_filter($username);
        $this->username = $filtered_username;
    }
    public function set_address($address)
    {
        $filtered_address = $this->string_filter($address);
        $this->address = $filtered_address;
    }

	public function create()
    {
        global $database ;
        if($this->check_username())
        {
            $this->error = "this username is already exists";
            return false;
        }
        else
        {
            $stmt ="INSERT INTO users(username, address, password , phone_number , date_registered ) 
                    VALUES ('{$this->username}', '{$this->address}', '{$this->password}' , '{$this->phone_number}' , now()) ";
            if($database->query($stmt))
                return $database->query("SELECT * FROM users WHERE username='{$this->username}'")->fetch();
            else
            {
                $this->error = "internal server error ! please try again later";
                return false;
            }
        }
    }

    public function get_user_by_id()
    {
        global $database;
        $sql = "SELECT * FROM users WHERE user_id={$this->user_id}";
        $result = $database->query($sql)->fetch();
        if(!$result)
        {
            $this->error = "user not exist";
            return false;
        }
        else
            return $result;
    }

    public function get_user_by_phone_number()
    {
        global $database;
        $sql = "SELECT * FROM users WHERE phone_number='{$this->phone_number}'";
        $result = $database->query($sql)->fetch();
        if(!$result)
        {
            $this->error = "user not exist";
            return false;
        }
        else
            return $result;
    }

    public function get_user_by_username()
    {
        global $database;
        $sql = "SELECT * FROM users WHERE username='{$this->username}'";
        $result = $database->query($sql)->fetch();
        if(!$result)
        {
            $this->error = "user not exist";
            return false;
        }
        else
            return $result;
    }

    public function update()
    {
        global $database;
        if($this->check_username($this->user_id))
        {
            $this->error = "this username is already exists";
            return false;
        }

        $stmt = "UPDATE users SET phone_number = '{$this->phone_number}', username = '{$this->username}', address = '{$this->address}', password = '{$this->password}' WHERE user_id = {$this->user_id}";
        $database->query($stmt);

        $stmt = "SELECT * FROM users WHERE user_id = {$this->user_id}";
        return $database->query($stmt)->fetch();
    }

    public function verify()    
    {
        global $database ;
        $result = $database->query("SELECT * FROM users WHERE password='{$this->password}' AND username='{$this->username}'")->fetch();
        if($result)
            return $result;
        else
        {
            $this->error = "wrong phone number or password !";
            return false ;
        }
    }

    private function check_username($id = 0)
    {
        global $database ;
        $count=$database->query("SELECT * FROM users WHERE username = '{$this->username}' 
                                AND user_id != {$id}")->rowCount();
        return ($count==1) ? true : false ;
    }
    
    private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    private function integer_filter($int)
    {
        return filter_var($int , FILTER_SANITIZE_NUMBER_INT , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
}