<?php

class Home extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Home";


        $this->view("home", $data);
    }
}