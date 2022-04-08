<?php

class Profile extends Controller
{
    public function index($link = '')
    {
        switch ($link) {
            case '':
            //Main Profile
        $data['page_title'] = "My Profile";
        $data['tab'] = "Profile";
        $this->view("admin/profile", $data);
                break;
            case 'password':
            //Password
        $data['page_title'] = "Update Password";
        $data['tab'] = "Password";
        $this->view("admin/profile", $data);
                break;
            case 'location':
            //Location
        $data['page_title'] = "Update Location";
        $data['tab'] = "Location";
        $this->view("admin/profile", $data);
                break;
            case 'position':
            //Classes
        $data['page_title'] = "My Position";
        $data['tab'] = "Position";
        $this->view("admin/profile", $data);
                break;
            case 'picture':
            //tests
        $data['page_title'] = "My Picture";
        $data['tab'] = "Picture";
        $this->view("admin/profile", $data);
                break;
        }
    }
}