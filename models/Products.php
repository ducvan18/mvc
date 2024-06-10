 <?php
 function productALL (){
    try {
       $sql = "SELECT * FROM product ORDER BY id  DESC  ";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    } catch ( \Exception $e) {
       debug($e);
    }
 };
 ?>