<?php

class baseController{

    public function connection(){
        $dbServer = "54.36.98.69";
        $dbName = "pablo_noticias";
        $dbUser= "pablo";
        $dbPwd = "LrDK91WgUF";

        $connection = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbPwd);

        return $connection;
    }

    function executeQuery($query){
        $result = null;
        $cnn = $this->connection();
        $result = $cnn->query($query);
        
        if (count($cnn->errorInfo()) > 0){
            foreach ($cnn->errorInfo() as $val){
                echo $val."</br>";
            }
        }

        return $result;

    }

}

?>