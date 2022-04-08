<?php

class Player extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Players";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Players','player'];



        $this->view("admin/player", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}