<?php

class Involved extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Get involved";

        $this->view("involved", $data);
    }

    public function all()
    {
        //Page Title
        $data['page_title'] = "New Users";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['New Users','involved/all'];



        $this->view("admin/involved", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}