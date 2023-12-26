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

    public function createAgent($data)
    {
    
            //db connect 
            $con = Database::connect();

            //sql
            $sql = 'insert into agent 
                    (name,email,phone,facebook,viber,telegram_user_name,township_id)
                    values(:name,:email,:phone,:facebook,:viber,:telegram_user_name,:township_id)';

            $statement = $con->prepare($sql);
            $statement->bindParam(':name',$data['name']);
            $statement->bindParam(':email',$data['email']);
            $statement->bindParam(':phone',$data['phone']);
            $statement->bindParam(':facebook',$data['facebook']);
            $statement->bindParam(':viber',$data['viber']);
            $statement->bindParam(':telegram_user_name',$data['telegram_user_name']);
            $statement->bindParam(':township_id',$data['township']);

            //fetch
            if ($statement->execute())
            {
                return true;
            }

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

    public function updateAgent($data,$agentId)
    {
    
            //db connect 
            $con = Database::connect();

            //sql
            $sql = 'update agent 
                    set name = :name , email = :email , phone = :phone , facebook = :facebook , viber = :viber , telegram_user_name = :telegram_user_name , township_id = :township_id
                    where id = :id';

            $statement = $con->prepare($sql);
            $statement->bindParam(':name',$data['name']);
            $statement->bindParam(':email',$data['email']);
            $statement->bindParam(':phone',$data['phone']);
            $statement->bindParam(':facebook',$data['facebook']);
            $statement->bindParam(':viber',$data['viber']);
            $statement->bindParam(':telegram_user_name',$data['telegram_user_name']);
            $statement->bindParam(':township_id',$data['township']);
            $statement->bindParam(':id',$agentId);

            //fetch
            if ($statement->execute())
            {
                return true;
            }

    }

    public function removeAgent($id)
    {
    
            //db connect 
            $con = Database::connect();

            //sql
            $sql = 'delete from agent
                    where id = :id';

            $statement = $con->prepare($sql);
            $statement->bindParam(':id',$id);

            //fetch
            if ($statement->execute())
            {
                return true;
            }

    }

}
?>