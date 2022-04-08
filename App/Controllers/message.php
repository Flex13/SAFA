<?php

class Message extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Success Register";


        $this->view("messages/registrationSuccess", $data);
    }

    public function teamCreated()
    {
        //Page Title
        $data['page_title'] = "Team Created";


        $this->view("messages/team/successCreated", $data);
    }

    public function teamDeleted()
    {
        //Page Title
        $data['page_title'] = "Team Deleted";


        $this->view("messages/team/teamDeleted", $data);
    }
}