<?php 
include_once __DIR__.'/../model/Agent.php';

class AgentController extends Agent {

    public function agentList()
    {
        return $this->getAgentList();
    }

    public function agentById($id)
    {
        return $this->getAgentById($id);
    }

}
?>