<?php
include_once __DIR__ . '/../vendor/db/database.php';

class Code {
    public function getCodeList()
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //2.write sql
        $sql = "select voucher_code.* , agent.name as agent_name 
            from voucher_code
            join agent on voucher_code.agent_id = agent.id";
        $statement=$con->prepare($sql);
        
        //3.sql execute
        if($statement->execute())
        {
            //4. result
            //data fetch()=> one row, fetchAll()=> multiple rows
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }

    public function createCode($code,$agent)
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //2.write sql
        $sql = "insert into voucher_code (code,agent_id) values (:code,:agent)";
        $statement=$con->prepare($sql);
        $statement->bindParam(':code',$code);
        $statement->bindParam(':agent',$agent);
        
        //3.sql execute
        if($statement->execute())
        {
           return true;
        }
        
    }

    public function removeCode($id)
    {
        //1. db connection
        $con=Database::connect();
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //2.write sql
        $sql = "delete from voucher_code where id = :id";
        $statement=$con->prepare($sql);
        $statement->bindParam(':id',$id);
        
        //3.sql execute
        if($statement->execute())
        {
           return true;
        }
        
    }
}

?>