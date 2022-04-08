<?php

/**
 * User Model
 */
class Admin extends Model
{
    // protected $table = "users";


    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'cell',
        'password',
        'created',
        'image',
        'gender'
    ];

    //These will run before inserting into the database
    protected $beforeInsert = [
        'make_user_id',
        'hash_password'
    ];

    //Hash The password
    protected $beforeUpdate = [
        'hash_password'
    ];

    public function validate($DATA, $id = '')
    {
        $this->errors = array();

        //check for first name
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        //check for last name
        if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }

        //check for email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        //check if email exists
        if (trim($id) == "") {
            if ($this->where('email', $DATA['email'])) {
                $this->errors['email'] = "That email is already in use";
            }
        } else {
            if ($this->query("select email from $this->table where email = :email && url_id != :id", ['email'=>$DATA['email'],'id'=>$id])) {
                $this->errors['email'] = "That email is already in use";
            }
        }

        //check if email exists
        if (trim($id) == "") {
            if ($this->where('cell', $DATA['cell'])) {
                $this->errors['cell'] = "That cell is already in use";
            }
        } else {
            if ($this->query("select cell from $this->table where cell = :cell && url_id != :id", ['cell'=>$DATA['cell'],'id'=>$id])) {
                $this->errors['cell'] = "That cell is already in use";
            }
        }

        //check for gender
        $genders = ['Female','Male'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Gender is not valid";
        }



        //check for password
        if (isset($DATA['password'])) {
            if (empty($DATA['password']) || $DATA['password'] !== $DATA['passwordC']) {
                $this->errors['password'] = "Passwords do not match";
            }

            //check for password length
            if (strlen($DATA['password']) < 8) {
                $this->errors['password'] = "Password must be at least 8 characters long";
            }
        }


        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_user_id($data)
    {
        // $data['url_id'] = strtolower($data['firstName'] . "." . $data['lastName']);
        $data['user_id'] = random_string(50);

        while ($this->where('user_id', $data['user_id'])) {
            $data['user_id'] .= rand(10, 9999);
        }

        return $data;
    }

    public function hash_password($data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }


    public function checkEmailForget($DATA, $id = '')
    {
        $this->errors = array();


        //check for email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }


        //check if email exists
        if (trim($id) == "") {
            if (!$this->where('email', $DATA['email'])) {
                $this->errors['email'] = "That email is not registered";
            }
        } else {
            if (!$this->query("select email from $this->table where email = :email && url_id != :id", ['email'=>$DATA['email'],'id'=>$id])) {
                $this->errors['email'] = "That email is not registered";
            }
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }


    public function createForgetMail($password_reset_token, $email, $file)
    {
        $variables = array();

        $variables['url'] = ROOT . 'auth/reset/' . $password_reset_token;
        $variables['email'] = $email;

        $html = file_get_contents($file);

        foreach ($variables as $key => $value) {
            $html = str_replace('{{ ' . $key . ' }}', $value, $html);
        }

        Mail::send($email, 'SAFA BCM - Password Reset', $html);



        return true;
    }


    public function insertForgetPassword($email, $data)
    {
        $str = "";
        foreach ($data as $key => $value) {
            // code...
            $str .= $key. "=:". $key.",";
        }

        $str = trim($str, ",");

        $data['email'] = $email;
        $query = "update $this->table set $str where email = :email";

        return $this->query($query, $data);
    }
}