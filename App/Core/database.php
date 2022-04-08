<?php

class Database
{
    //Connect the database
    private function connect()
    {
        try {
            $string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
            $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

            return $conn = new PDO($string, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    //Make Query in Database
    public function query($query, $data = array(), $data_type = "object")
    {
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if ($stm) {
            $check = $stm->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return false;
    }
}