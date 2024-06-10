<?php

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

class Model{
    protected Connection|null $conn;
    protected QueryBuilder $queryBuilder;
    protected string $tablename;
    
    public function __construct(){
        $connectionParams = [
            'dbname'    => $_ENV['DB_NAME'],
            'user'      => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'host'      => $_ENV['DB_HOST'],
            'port'      => $_ENV['DB_PORT'],
            'driver'    => $_ENV['DB_DRIVER'],
        ];

        $this->conn = DriverManager::getConnection($connectionParams);

        $this->queryBuilder = $this->conn->createQueryBuilder();
    }
    //CRUD
    public function all(){
        return $this->queryBuilder
        ->select('*')
        ->from($this->tablename)
        ->orderBy('id','desc')
        ->fetchAllAssociative();
    }
    public function count(){
        return $this->queryBuilder
        ->select("COUNT(*) as $this->tablename")
        ->from($this->tablename)    
        ->fetchOne();
    }
    public function paginate($page= 1, $perPage = 5){
        $offset = $perPage * ($page - 1);
        $data = $this ->queryBuilder
        ->select('*')
        ->from($this->tablename)
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('id','desc')
        ->fetchAllAssociative();
        $totalPage = ceil($this->count()/$perPage);
        return [$data, $totalPage];
    }
    public function findByID($id){
        return $this->queryBuilder
        ->select('*')
        ->from($this->tablename)
        ->where('id=?')
        ->setParameter(0,$id)
        ->fetchAllAssociative();
    }
}
?>