<?php 
include_once __DIR__.'/../../controller/ReportController.php';


$rep_con = new ReportController();

        $year = $_POST['year'];
        $result = $rep_con->getStockYearlyReport($year);
        $result1 = $rep_con->getOrderYearlyReport($year);
        $status = $rep_con->yearlyTotalPrice($year);
        $orders = $rep_con->yearlyTotalOrderPrice($year);
        $profits = $rep_con->profit($year);
        // die(var_dump($result));
        // $users = $rep_con->getUser();
        // die(var_dump($users));
        $html = "";
        $html .= "<div class='container d-flex justify-content-center mt-3'><div class='col-md-10'><div class= 'card text-center'><div class='card-header'><h2>နှစ်အလိုက် ဝင်ငွေ/ထွက်ငွေ စာရင်း</h2>";
        $html.="</div><div class='card-body'><div class='row mt-3'>";
        $html.= "<table class = 'table table-dark'><tr><th>ထွက်ငွေ</th><th>ဝင်ငွေ</th></tr>";
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
        $html.= "<table class = 'table table-warning table-striped'><tr><th>စဉ်</th><th>ပစ္စည်း</th><th>ထွက်ငွေ</th><th>ဝင်ငွေ</th></tr>";
        $html .= "";  
        $count = 1; 
        foreach($status as $total)
        { 
        $html .= "<tr>";
        $html .= "<td>".$count++."</td>";
        $html .= "<td>".$total['name']."</td>";
        $html .= "<td>".$total['totalPrice']."</td>";
        $incomeFound = false;
        
        foreach ($orders as $order)
        {
                if($order['id'] == $total['id'] )
                {
                        $html .= "<td>". $rep = $order['sellingPrice'] ."</td>"; 
                        $incomeFound = true; 
                } 
              
       }  
       if(!$incomeFound)
       {
        $html .= "<td>0</td>";
       }
        // foreach ($orders as $order) {
        //         if ($order['id'] == $total['id']) {
        //             $html .= "<td>" . (isset($order['sellingPrice']) ? $order['sellingPrice'] : 'No income') . "</td>";
        //         }
        //     }
            
        
            
        
        $html .= "</tr>";         
        }
        $html .= "</table>";
        $html .= "</div>";
        $html .= "<div class='col-md-6'>";
        $html.= "<table class = 'table table-danger table-striped'><tr><th>စဉ်</th><th>လအမည်</th><th>ဝင်ငွေ</th></tr>";
        $html .= "";  
        $count = 1;    
        foreach($profits as $profit)
        { 
        $html .= "<tr>";
        $html .= "<td>".$count++."</td>";
        $html .= "<td>".date("F", mktime(0, 0, 0, $profit['month'], 1))."</td>";
        $html .= "<td>".$profit['sellingPrice']."</td>";  
        $html .= "</tr>";         
        }
        $html .= "</table>";
        $html .= "</div>";
        $html .= "</div></div></div></div>";
        echo $html; 
    

?>