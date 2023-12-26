<?php

include_once __DIR__ . '/../../layouts/admin_navbar.php';
include_once __DIR__ . '/../../controller/CodeController.php';
include_once __DIR__ . '/../../controller/AgentController.php';

$code_controller = new CodeController();
$agent_controller = new AgentController();

$agents = $agent_controller->agentList();


$codes = $code_controller->codeList();

$codeList = [];

if ($codes != null) {
    $cl = 0;
    foreach ($codes as $code) {
        $codeList[$cl] = $code['code'];
        $cl++;
    }
}


if (isset($_POST['submit'])) {
    if (strlen($_POST['code']) < 6)
        $codeError = 'Code must be greater than 6 words';

    if (in_array($_POST['code'], $codeList))
        $codeError = 'This code is already added';

    if (empty($_POST['code']))
        $codeError = 'Please Enter Code';

    if (empty($_POST['agent']))
        $agentError = 'Please select agent';

    if (isset($codeError) || isset($agentError)) 
    {
        $errorCondition = true;
    } 
    else 
    {

        $code = $_POST['code'];
        $agent = $_POST['agent'];

        $code_controller = new CodeController();
        $status = $code_controller->addCode($code,$agent);

        if ($status) {
            echo '<script>location.href="code.php?status=' . $status . '"</script>';
        }
    };
}

?>
<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Add New Code</strong></h1>

        <div class='row'>
            <div class='col-md-12'>
                <form action='' method='POST'>
                    <div class="mb-3">
                        <label class='form-label'>Code</label>
                        <input type='text' name='code' value="<?php if (isset($_POST['code'])) echo $_POST['code']; ?>" class='form-control'>
                        <?php if (isset($codeError)) echo '<span class="text-danger">' . $codeError . '</span>' ?>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Township</label>
                        <select name="agent" id="" class="form-select">
                            <option value="" selected disabled>Select Agent</option>
                            <?php
                            foreach ($agents as $agent) {
                            ?>

                                <option value="<?php echo $agent['id']; ?>" <?php if (isset($_POST['agent']) && $_POST['agent'] == $agent['id']) echo 'selected'; ?>>
                                    <?php echo $agent['name']; ?>
                                </option>

                            <?php
                            }
                            ?>
                        </select>
                        <?php if (isset($agentError) && $errorCondition) echo '<span class="text-danger">'. $agentError.'</span>'; ?>
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