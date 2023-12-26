<?php
include_once __DIR__ . '/../../layouts/admin_navbar.php';
include_once __DIR__ . '/../../controller/AgentController.php';

$agentId = $_GET['id'];

$agent_controller = new AgentController();
$agentInfo = $agent_controller->agentById($agentId);




?>

<main class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="invoice_design col-md-8 offset-md-2">
                <div class="text-center mb-5">
                    <h2><strong>Agent Detail</strong></h2>
                </div>

                <!-- Agent Information -->
                <div class="row pb-3">
                    <div class="col-md-6">
                        <p><strong>Name: </strong><?php echo $agentInfo['name']; ?></p>
                        <p><strong>Email: </strong><?php echo $agentInfo['email'] ?></p>
                        <p><strong>Phone: </strong><?php echo $agentInfo['phone'] ?></p>
                        <p><strong>Facebook Link: </strong><?php echo $agentInfo['facebook'] ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Viber: </strong><?php echo $agentInfo['viber'] ?></p>
                        <p><strong>Telegram User Name: </strong><?php echo $agentInfo['telegram_user_name'] ?></p>
                        <p><strong>Township: </strong><?php echo $agentInfo['township_name'] ?></p>
                    </div>
                </div>

            </div>
            <a href="editAgent.php?id=<?php echo $agentId ;?>">
                <button  class="text-center w-25 my-3 btn btn-dark">Edit</button>
            </a>
        </div>
    </div>
</main>

<?php
include_once __DIR__ . '/../../layouts/admin_footer.php';
?>