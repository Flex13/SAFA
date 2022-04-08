<?php

class Auth extends Controller
{
    public function index()
    {
        //Page Title
        $data['page_title'] = "Login";

        // code...
        $errors = array();

        if (count($_POST) > 0) {
            $user = new Admin();

            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];
                if (password_verify($_POST['password'], $row->password)) {
                    AuthUser::authenticate($row);
                    $this->redirect('dashboard');
                }
            }

            $errors['email'] = "Wrong email or password";
        }

        $this->view("auth/index", [
            'errors'=>$errors,
        ]);
    }

    public function register()
    {
        //Page Title
        $data['page_title'] = "Register";

        //Register Code
        $errors = array();

        if (count($_POST) > 0) {
            $user = new Admin();

            //Validate User Input
            if ($user->validate($_POST)) {
                $_POST['created'] = date("Y-m-d H:i:s");

                $user->insert($_POST);


                //Redirect User
                $this->redirect('message');
            } else {
                //Error MEssages
                $errors = $user->errors;
            }
        }

        $this->view("auth/register", [
            'errors'=>$errors,
            ]);
    }

    public function logout()
    {
        AuthUser::logout();
        //Redirect User
        $this->redirect('auth/login');
    }

    public function forget()
    {

        //Page Title
        $data['page_title'] = "Forget Password";

        //Register Code
        $errors = array();

        if (count($_POST) > 0) {
            $user = new Admin();

            //Validate User Input
            if ($user->checkEmailForget($_POST)) {
                $randomString = random_string(50); //Create Random String
                $_POST['passwordResetHash'] =  $randomString ;
                $_POST['passwordResetExpires_at'] = time() + 60 * 60 * 2; // 2 hours from now

                $file = "../App/Email/forget.php";
                $emailTo = test_input($_POST['email']);


                //Send Email
                $user->createForgetMail($randomString, $emailTo, $file);

                //Insert Token Into Database
                $user->insertForgetPassword($_POST['email'], $_POST);

                //Redirect User
                $this->redirect('message');
            } else {
                //Error MEssages
                $errors = $user->errors;
            }
        }
        $this->view("auth/forget", [
            'errors'=>$errors,
        ]);
    }
}