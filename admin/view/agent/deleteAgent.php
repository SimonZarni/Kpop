<?php
    include_once __DIR__.'/../../controller/AuthController.php';
    include_once __DIR__ . '/../../controller/AgentController.php';


    $auth = new AuthController();
    $auth->authentication();

$id = $_POST['id'];

$agent_controller = new AgentController();
$result = $agent_controller->deleteAgent($id);

if ($result) 
{
    echo "Successfully deleted";
} 
else 
{
    echo "You can't delete it as it has related data";
}
