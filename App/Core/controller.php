<?php

class Controller
{
    protected function view($view, $data = [])
    {
        extract($data);

        if (file_exists("../App/Views/". $view .".php")) {
            include "../App/Views/". $view .".php";
        } else {
            include "../App/Views/404.php";
        }
    }

    protected function loadModel($model)
    {
        extract($data);

        if (file_exists("../App/Models/". $model .".php")) {
            include "../App/Models/". $model .".php";
            return $model = new $model();
        }

        return false;
    }

    //Redirect to another page
    public function redirect($link)
    {
        header("Location: ". ROOT .trim($link, "/"));
        die;
    }
}