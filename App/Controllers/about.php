<?php

class About extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "About";

        $this->view("about", $data);
    }
}