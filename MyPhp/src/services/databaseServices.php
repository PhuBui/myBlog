<?php
class Database{
    public $connection;

    public function connect(){
        $this->connection = new mysqli(
            "database-1.cojrqizvgnut.ap-southeast-1.rds.amazonaws.com",
            "admin",
            "q1w2e3r4",
            "db_garybui"
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
