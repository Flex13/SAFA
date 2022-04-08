<?php

class Management extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Management";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Management','management'];



        $this->view("admin/management", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}