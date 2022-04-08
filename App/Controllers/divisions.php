<?php

class Divisions extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Division";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Divisions','divisions'];



        $this->view("admin/divisions", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}