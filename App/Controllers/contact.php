<?php

class Contact extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Contact Us";

        $this->view("contact", $data);
    }

    public function all()
    {
        //Page Title
        $data['page_title'] = "Contact us";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        // $team = new Team();

        // $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Contact Us','contact/all'];



        $this->view("admin/contact", ['rows'=>$data,'crumbs'=>$crumbs]);
    }
}