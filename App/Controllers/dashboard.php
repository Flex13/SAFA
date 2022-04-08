<?php

class Dashboard extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Dashboard";

        // code...
        if (!AuthUSer::logged_in()) {
            $this->redirect('auth');
        }



        $this->view("admin/index", $data);
    }
}