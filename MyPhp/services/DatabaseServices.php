<?php
class Database{
    public $connection;

    public function connect(){
        $this->connection = new mysqli(
            "localhost:3306",
            "root",
            "password",
            "db_g_my_blog"
        );
    }

    public function close(){
        $this->connection->close();
    }

    public function query($sql) {
        $this->connect();
        $result = $this->connection->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $result->free_result();
        $this->close();

        return $data;
    }

    public function insert($sql) {
        $this->connect();
        $this->connection->query($sql);
        $this->close();
    }
}
