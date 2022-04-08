<?php

class Teams extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Teams";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        $team = new Team();

        $data = $team->findAll();

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Teams','teams'];



        $this->view("admin/teams", ['rows'=>$data,'crumbs'=>$crumbs]);
    }

    public function add()
    {

        // code...
        $errors = array();

        //Page Title
        $data['page_title'] = "Create Team";

        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('auth');
        }

        if (count($_POST) > 0) {
            $team = new Team();

            //Validate User Input
            if ($team->validate($_POST)) {
                $_POST['created'] = date("Y-m-d H:i:s");


                //Insert into databae
                $team->insert($_POST);


                //Redirect User
                $this->redirect('message/teamCreated');
            } else {
                //Error MEssages
                $errors = $team->errors;
            }
        }

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Teams','teams'];
        $crumbs[] = ['Add','teams/add'];


        $this->view(
            "admin/teams/add",
            ['errors'=>$errors, 'crumbs'=>$crumbs]
        );
    }

    public function delete($id = null)
    {
        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('login');
        }

        $team = new Team();

        $errors = array();
        if (count($_POST)) {
            $team->delete($id, $_POST);
            $this->redirect('message/teamDeleted');
        }
        $row = $team->where('id', $id);

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Teams','teams'];
        $crumbs[] = ['Delete','teams/delete'];


        $this->view(
            "admin/teams/delete",
            ['row'=>$row, 'crumbs'=>$crumbs]
        );
    }

    public function edit($id = null)
    {
        // code...
        if (!AuthUser::logged_in()) {
            $this->redirect('login');
        }

        $team = new Team();

        $errors = array();
        if (count($_POST)) {
            if ($team->validate($_POST)) {
                $team->update($id, $_POST);
                $this->redirect('teams');
            } else {
                //errors
                $errors = $team->errors;
            }
        }
        $row = $team->where('id', $id);

        $crumbs[] = ['Dashboard','dashboard'];
        $crumbs[] = ['Teams','teams'];
        $crumbs[] = ['Edit','teams/edit'];


        $this->view(
            "admin/teams/edit",
            ['errors'=>$errors,
            'row'=>$row,'crumbs'=>$crumbs
            ]
        );
    }
}