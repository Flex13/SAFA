<?php

class Blog extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Blog";

        $this->view("blog", $data);
    }
}