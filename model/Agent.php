<?php 

include_once __DIR__.'/../vendor/db/database.php';

class Agent {
    
    public function getAgentList()
    {
            //db connect 
            $con = Database::connect();

            //sql
            $sql = 'select agent.* , township.name as township_name
                    from agent
                    join township on agent.township_id = township.id';
            $statement = $con->prepare($sql);

            //fetch
            if ($statement->execute())
            {
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }
            return $result;
    }


    public function getAgentById($id)
    {
            //db connect 
            $con = Database::connect();

            //sql
            $sql = 'select agent.* , township.name as township_name
                    from agent
                    join township on agent.township_id = township.id
                    where agent.id = :id';

            $statement = $con->prepare($sql);
            $statement->bindParam(':id',$id);

            //fetch
            if ($statement->execute())
            {
                $result = $statement->fetch(PDO::FETCH_ASSOC);
            }
            return $result;
    }
}

?>