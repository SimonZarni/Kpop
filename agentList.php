<?php

include_once __DIR__.'/controller/AuthController.php';

$auth_controller = new AuthController();
$auth_controller->checkAuth();

include_once __DIR__ .'/layouts/user_navbar.php'; 
include_once __DIR__ .'/controller/AgentController.php';

$agent_controller = new AgentController();
$agents = $agent_controller->agentList();

?>

<div class="container  product-data mt-4">
    <div class="row my-5">
        <div class="col-md-10 offset-1 table-responsive mb-5">
            <h2 class="mb-3">Agent List</h2>
        <table class="table" id="agentTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Township</th>
                    <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $count=1;
                        foreach($agents as $agent)
                        {
                            echo "<tr>";
                            echo "<td>".$count++."</td>";
                            echo "<td>".$agent['name']."</td>";
                            echo "<td>".$agent['township_name']."</td>";
                                           
                            echo "<td id='".$agent['id']."'> 
                                    <a class='btn btn-info' href='agentDetail.php?id=".$agent['id']."'>View Detail</a>
                                </td> ";

                            echo "</tr>";                                        
                        }
                        ?>
                </tbody>                             
            </table>
        </div>

    </div>

    <?php
    include_once __DIR__ .'/layouts/user_footer.php';
    ?>