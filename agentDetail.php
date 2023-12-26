<?php

include_once __DIR__ . '/controller/AuthController.php';

$auth_controller = new AuthController();
$auth_controller->checkAuth();

include_once __DIR__ .'/layouts/user_navbar.php'; 
include_once __DIR__ .'/controller/AgentController.php'; 


$agentId = $_GET['id'];

$agent_controller = new AgentController();
$agentInfo = $agent_controller->agentById($agentId);


?>
<div class="container  product-data mt-4">

    <div class="row my-5">

        <div class="col-md-10 offset-1 table-responsive mb-5">
            <h2 class="mb-4">Agent's Info</h2>

            <div class="row">
                <div class="col-md-5 offset-1">
                    <p><i class="fa-solid fa-user me-3"></i><strong class="me-2">Name: </strong><?php echo $agentInfo['name']; ?></p>
                    <p><i class="fa-solid fa-envelope me-3"></i><strong class="me-2">Email: </strong><?php echo $agentInfo['email']; ?></p>
                    <p><i class="fa-solid fa-address-book me-3"></i><strong class="me-2">Township: </strong><?php echo $agentInfo['township_name']; ?></p>
                </div>
                <div class="col-md-5 offset-1">
                    <p><i class="fa-solid fa-phone me-3"></i><strong class="me-2">Phone: </strong><?php echo $agentInfo['phone']; ?></p>
                    <p><i class="fa-brands fa-viber me-3"></i><strong class="me-2">Viber: </strong><?php echo $agentInfo['viber']; ?></p>
                    <p><i class="fa-brands fa-telegram me-3"></i><strong class="me-2">Telegram User Name: </strong><?php echo $agentInfo['telegram_user_name']; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-1">
                    <p><i class="fa-brands fa-facebook me-3"></i><strong class="me-2">Facebook:</strong><a href="<?php echo $agentInfo['facebook']; ?>"><?php echo $agentInfo['facebook']; ?></a></p>
                </div>
            </div>
        </div>

    </div>



    <?php
    include_once __DIR__ . '/layouts/user_footer.php';
    ?>