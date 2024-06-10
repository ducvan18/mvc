<?php
class Product extends Model{
    protected string $tableName='product';
    public function all(){
        return $this->queryBuilder
        ->select('p.id','p.category_id','p.name','p.img_thumbnail','p.created_at','p.updated_at','c.name as c_name')
        ->from($this->tablename,'p')
        ->innerJoin('p','categories','c','c.id = p.category_id')
        ->fetchAllAssociative();
    }
    public function paginate($page = 1, $perPage = 5)
    {
        $totalPage = ceil($this->count()/$perPage);
        $offset = $perPage * ($page-1);
        $data = $this->queryBuilder 
        ->select('p.id','p.category_id','p.name','p.img_thumbnail','p.created_at','p.updated_at','c.name as c_name')
        ->from($this->tablename,'p')
        ->innerJoin('p','categories','c','c.id = p.category_id')
        ->fetchAllAssociative();
        return [$data,$totalPage];
    }
}

?>