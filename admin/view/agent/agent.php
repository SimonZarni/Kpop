<?php
   
    include_once __DIR__.'/../../layouts/admin_navbar.php';
    include_once __DIR__.'/../../controller/AgentController.php';




$agent_controller = new AgentController();
$agents = $agent_controller->agentList();


?>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Agent</strong></h1>
                    <?php
                        if(isset($_GET['addStatus']) && $_GET['addStatus']==true)
                        {
                            echo "<span class='text-success'>New Agent has been successfully added</span>";
                        }

                    ?>

                    <?php
                        if(isset($_GET['updateStatus']) && $_GET['updateStatus']==true)
                        {
                            echo "<span class='text-success'>Agent has been successfully updated</span>";
                        }

                    ?>
                    <div class='row mt-3'>
                        <div class='col-md-3'>
                            <a href="addAgent.php" class='btn btn-primary'>Add New Agent</a>
                        </div>
                    </div>
                    <div class='row mt-3'>
                        <div class='col-md-12'>
                            <table class="table" id="catTable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Township</th>
                                    <th>Detail</th>
                                    <th>Action</th>

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
                                           

                                            echo "<td id='".$agent['id']."'> 
                                                    <a class='btn btn-warning mx-3' href='editAgent.php?id=".$agent['id']."'>Edit</a>
                                                    <button class='btn btn-danger mx-3 agent_delete'>Delete</button>
                                                </td> ";
                                            echo "</tr>";
                                          
                                        }
                                        ?>
                                </tbody>                             
                            </table>
                        </div>
                    </div>
                </div>
            </main>

<?php

include_once __DIR__.'/../../layouts/admin_footer.php';

?>