<?php
/*public function count(){
    return $this->queryBuilder
    ->select("COUNT(*) as $this->tableName")
    ->from($this->tableName)
    ->fetchOne();
}
public function paginate($page= 1,$perPage = 5){
    $queryBuilder = clone($this->queryBuilder);
    $totalPage = ceil($this->count() / $perPage);
    $offset = $perPage * ($page - 1);
    $data = $this->queryBuilder
    ->select('*')
    ->from($this->tableName)
    ->setFirstResult($offset)
    ->setMaxResults($perpage)
    ->orderBy('id','desc')
    ->fecthAllAssociative();

    return [$data,$totalPage];
}
?>