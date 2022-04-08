<?php

class Events extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Events";

        $this->view("events", $data);
    }

    public function all()
    {
        //Page Title
        $data['page_title'] = "All Events";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Events','events/all'];



        $this->view("admin/events", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}