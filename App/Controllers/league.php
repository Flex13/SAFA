<?php

class League extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "League";

        $this->view("league", $data);
    }

    public function all()
    {
        //Page Title
        $data['page_title'] = "All Leagues";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Leagues','league/all'];



        $this->view("admin/league", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}