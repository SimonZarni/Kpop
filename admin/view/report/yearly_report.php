<?php
   
    include_once __DIR__.'/../../layouts/admin_navbar.php';

?>

<main>
    <div class="container mt-4">
        <div class="rows">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="card" style="margin-left:40px;">
                            <div class="card-header">Yearly Report</div>
                            <div class="card-body">
                                <form id="reportForm" method="post">
                                    <div class="row">
                                            <div class="col-md-6 form-group">
                                                    <label for="selectedValue">Year:</label>
                                                    <select name="year" id="year">
                                                        <?php
                                                        $current_year = date("Y");
                                                        for ($year = $current_year; $year >= $current_year - 10; $year--) {
                                                            echo "<option value='$year'>$year</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            
                                                <div class="col-md-6 form-group">
                                                    <button type="submit" name = "submit" class="yearly_report rounded" style="background-color:darkslategrey; color:floralwhite;">Generate Report</button>
                                                </div>        
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                        <div class="col-md-12">
                            <div id="reportData"></div>
                        </div>
            </div>
        </div>
        
       
    </div>
    
    
</main>

<?php

include_once __DIR__.'/../../layouts/admin_footer.php';

?>