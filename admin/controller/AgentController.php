<?php 
include_once __DIR__.'/../model/Agent.php';

class AgentController extends Agent {

    public function agentList()
    {
        return $this->getAgentList();
    }

    public function addAgent($data)
    {
        return $this->createAgent($data);
    }

    public function agentById($id)
    {
        return $this->getAgentById($id);
    }

    public function editAgent($data,$agentId)
    {
        return $this->updateAgent($data,$agentId);
    }

    public function deleteAgent($id)
    {
        return $this->removeAgent($id);
    }

}
?>