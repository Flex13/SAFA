<?php

class News extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "News";

        $this->view("news", $data);
    }

    public function all()
    {
        //Page Title
        $data['page_title'] = "All News";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['News','news/all'];



        $this->view("admin/news", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}