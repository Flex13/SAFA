<?php

/**
 * User Model
 */
class Team extends Model
{
    // protected $table = "users";


    protected $allowedColumns = [
        'division',
        'name',
        'short_name',
        'location',
        'created'
    ];

    //These will run before inserting into the database
    protected $beforeInsert = [
        'make_team_id',
        'make_user_id'
    ];

    protected $afterSelect = [
        'get_user',
    ];


    public function validate($DATA, $id = '')
    {
        $this->errors = array();

        //check for first name
        if (empty($DATA['name']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['name'])) {
            $this->errors['name'] = "Only letters allowed in team name";
        }

        //check if email exists
        if (trim($id) == "") {
            if ($this->where('name', $DATA['name'])) {
                $this->errors['name'] = "Team name is already in use";
            }
        } else {
            if ($this->query("select name from $this->table where name = :name && url_id != :id", ['name'=>$DATA['name'],'id'=>$id])) {
                $this->errors['cname'] = "Team name is already in use";
            }
        }

        //check for last name
        if (empty($DATA['location']) || !preg_match('/^[a-zA-Z]+$/', $DATA['location'])) {
            $this->errors['location'] = "Only letters allowed in location";
        }


        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function make_team_id($data)
    {
        // $data['url_id'] = strtolower($data['firstName'] . "." . $data['lastName']);
        $data['team_id'] = random_string(50);

        while ($this->where('team_id', $data['team_id'])) {
            $data['team_id'] .= rand(10, 9999);
        }

        return $data;
    }

    public function make_user_id($data)
    {
        if (isset($_SESSION['USER']->user_id)) {
            $data['user_id'] = $_SESSION['USER']->user_id;
        }
        return $data;
    }

    public function get_user($data)
    {
        $user = new Admin();
        foreach ($data as $key => $row) {
            // code...
            $result = $user->where('user_id', $row->user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false;
        }

        return $data;
    }
}