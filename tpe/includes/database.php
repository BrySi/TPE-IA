<?php
/**
 * Created by PhpStorm.
 * User: perso
 * Date: 26/01/2016
 * Time: 10:58
 */

namespace db;
/**
 *
 */
class database {
    public $dsn;
    public $user;
    public $password;
    public $connection;
    public function __construct($dsn = "mysql:dbname=brysflgp_tpe;host=localhost", $user = "brysflgp_tpe", $password = "abVLGE3ZowGt") {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }
    public function getPDO() {
        $connection = new \PDO($this->dsn, $this->user, $this->password);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->connection = $connection;
        return $connection;
    }
    public function query($sql) {
        $query = $this->getPDO()->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_OBJ);
        return $data;
    }

    public function exec($sql) {
        $exec = $this->getPDO()->exec($sql);
        return $exec;
    }
}