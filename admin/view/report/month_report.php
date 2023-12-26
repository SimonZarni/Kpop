<?php 
include_once __DIR__.'/../../controller/ReportController.php';

$rep_con = new ReportController();

        $month = $_POST['month'];
        // die(var_dump($month));
        $year = $_POST['year'];
        $result = $rep_con->getStockReport($month,$year);
        $result1 = $rep_con->getOrderReport($month,$year);
        $status = $rep_con->totalPrice($month,$year);
        $orders = $rep_con->totalOrderPrice($month,$year);
        // die(var_dump($result));
        // $users = $rep_con->getUser();
        // die(var_dump($users));
        $html = "";
        $html .= "<div class='container d-flex justify-content-center mt-3'><div class='col-md-10'><div class= 'card text-center'><div class='card-header'><h2>လအလိုက် ဝင်ငွေ/ထွက်ငွေ စာရင်း</h2>";
        $html.="</div><div class='card-body'><div class='row mt-3'>";
        $html.= "<table class = 'table table-dark'><tr><th>အရင်း</th><th>ရောင်းရငွေ</th></tr>";
        $html .= "";  
        $count = 1;    
        foreach($result as $report)
        { 
        $html .= "<tr><td>".$report['buyingPrice']."</td>";        
        foreach ($result1 as $report1)
        {      
                        $html .= "<td>".$report1['sellingPrice']."</td>";      
        } 
        $html .= "</tr>";         
        }
        $html .= "</table>";
        $html .= "</div>";
        $html .= "<div class='row mt-3'><div class='col-md-6'>";
        $html.= "<table class = 'table table-warning table-striped'><tr><th>စဉ်</th><th>ပစ္စည်း</th><th>ထွက်ငွေ</th></tr>";
        $html .= "";  
        $count = 1;    
        foreach($status as $total)
        { 
        $html .= "<tr>";
        $html .= "<td>".$count++."</td>";
        $html .= "<td>".$total['name']."</td>";
        $html .= "<td>".$total['totalPrice']."</td>";      
        $html .= "</tr>";         
        }
        $html .= "</table>";
        $html .= "</div>";
        $html .= "<div class='col-md-6'>";
        $html.= "<table class = 'table table-danger table-striped'><tr><th>စဉ်</th><th>ပစ္စည်း</th><th>ဝင်ငွေ</th></tr>";
        $html .= "";  
        $count = 1;    
        foreach($orders as $order)
        { 
        $html .= "<tr>";
        $html .= "<td>".$count++."</td>";
        $html .= "<td>".$order['name']."</td>";
        $html .= "<td>".$order['sellingPrice']."</td>";  
        $html .= "</tr>";         
        }
        $html .= "</table>";
        $html .= "</div>";
        $html .= "</div></div></div></div>";
        echo $html; 
    

?>