<?php

include_once __DIR__ . '/../../layouts/admin_navbar.php';
include_once __DIR__ . '/../../controller/AgentController.php';
include_once __DIR__ . '/../../controller/TownshipController.php';

$agentId = $_GET['id'];

$agent_controller = new AgentController();
$township_controller = new TownshipController();


$townships = $township_controller->townshipList();

$agentInfo = $agent_controller->agentById($agentId);




if (isset($_POST['submit'])) {

    if (empty($_POST['name'])) 
        $nameError = "Please Enter Agent's Name";

    if (empty($_POST['email'])) 
        $emailError = "Please Enter Agent's Email";

    if (empty($_POST['phone'])) 
        $phoneError = "Please Enter Agent's Phone";

    if (empty($_POST['facebook'])) 
        $facebookError = "Please Enter Agent's Facebook Link";

    if (empty($_POST['viber'])) 
        $viberError = "Please Enter Agent's Viber No";

    if (empty($_POST['telegram_user_name']))
        $telegramError = "Please Enter Agent's Telegram User Name";

    if (empty($_POST['township'])) 
        $townshipError = "Please select Agent's Township";
    

    if (isset($nameError) || isset($emailError) || isset($phoneError) || isset($facebookError) || isset($viberError) || isset($telegramError) || isset($townshipError)) 
    {
            $errorCondition = true;
    }
    else 
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'facebook' => $_POST['facebook'],
            'viber' => $_POST['viber'],
            'telegram_user_name' => $_POST['telegram_user_name'],
            'township' => $_POST['township']
        ];


        $updateStatus = $agent_controller->editAgent($data,$agentId);

        if ($updateStatus) 
        {
            echo '<script>location.href="agent.php?updateStatus='.$updateStatus.'"</script>';
        }

    }
    // } else {
    //     $name = $_POST['name'];

    //     $city_controller = new CityController();
    //     $status = $city_controller->addCity($name);

    //     if ($status) {
    //         echo '<script>location.href="city.php?status=' . $status . '"</script>';
    //     }

}

?>
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Add New Agent</strong></h1>

        <div class='row'>
            <div class='col-md-12'>
                <form action='' method='POST'>

                    <div class="mb-3">
                        <label class='form-label'>Agent Name</label>
                        <input type='text' name='name' value="<?php if (isset($_POST['name'])) echo $_POST['name']; else echo $agentInfo['name'];?>" class='form-control'>
                        <?php if (isset($nameError)) echo '<span class="text-danger">' . $nameError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label class='form-label'>Email</label>
                        <input type='email' name='email' value="<?php if (isset($_POST['email'])) echo $_POST['email']; else echo $agentInfo['email'];?>" class='form-control'>
                        <?php if (isset($emailError)) echo '<span class="text-danger">' . $emailError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label class='form-label'>Phone</label>
                        <input type='text' name='phone' value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; else echo $agentInfo['phone'];?>" class='form-control'>
                        <?php if (isset($phoneError)) echo '<span class="text-danger">' . $phoneError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label class='form-label'>Facebook link</label>
                        <input type='text' name='facebook' value="<?php if (isset($_POST['facebook'])) echo $_POST['facebook']; else echo $agentInfo['facebook'];?>" class='form-control'>
                        <?php if (isset($facebookError)) echo '<span class="text-danger">' . $facebookError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label class='form-label'>Viber</label>
                        <input type='text' name='viber' value="<?php if (isset($_POST['viber'])) echo $_POST['viber']; else echo $agentInfo['viber'];?>" class='form-control'>
                        <?php if (isset($viberError)) echo '<span class="text-danger">' . $viberError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label class='form-label'>Telegram User Name</label>
                        <input type='text' name='telegram_user_name' value="<?php if (isset($_POST['telegram_user_name'])) echo $_POST['telegram_user_name']; else echo $agentInfo['telegram_user_name'];?>" class='form-control'>
                        <?php if (isset($telegramError)) echo '<span class="text-danger">' . $telegramError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Township</label>
                        <select name="township" id="" class="form-select">
                            <option value="" selected disabled>Select Township</option>
                            <?php
                            foreach ($townships as $township) {
                            ?>

                                <option value="<?php echo $township['township_id']; ?>" <?php if (isset($_POST['township'])) {if ($_POST['township'] == $township['township_id'])  echo 'selected';} else {if(($agentInfo['township_id'] == $township['township_id'])) echo 'selected';}?>>
                                    <?php echo $township['township_name']; ?>
                                </option>

                            <?php
                            }
                            ?>
                        </select>
                        <?php if (isset($townshipError) && $errorCondition) echo '<span class="text-danger">'. $townshipError.'</span>'; ?>
                    </div>

                    <div class='mt-3'>
                        <button class='btn btn-dark' name='submit'>Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php

include_once __DIR__ . '/../../layouts/admin_footer.php';

?>