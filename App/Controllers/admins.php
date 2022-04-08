<?php

class Admins extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Admin";

        // code...
        if (!AuthUSer::logged_in()) {
            $this->redirect('auth');
        }

        $user = new Admin();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Admins','admins'];


        $data = $user->findAll();




        $this->view("admin/admins", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}