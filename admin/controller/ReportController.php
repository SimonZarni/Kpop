<?php 
include_once __DIR__.'/../model/Report.php';

class ReportController extends Report{
    # Monthly Report #
    public function getStockReport($month,$year)
    {
        return $this->getStockReportList($month,$year);
    }
    public function getOrderReport($month,$year)
    {
        return $this->getOrderReportList($month,$year);
    }
    public function totalPrice($month,$year)
    {
        return $this->getTotalPrice($month,$year);
    }
    public function totalOrderPrice($month,$year)
    {
        return $this->getTotalOrderPrice($month,$year);
    }

    public function totalPerMonth($year)
    {
        return $this->getTotalPerMonth($year);
    }

    # Yearly Report #

    public function getStockYearlyReport($year)
    {
        return $this->getStockYearlyReportList($year);
    }
    public function getOrderYearlyReport($year)
    {
        return $this->getOrderYearlyReportList($year);
    }
    public function yearlyTotalPrice($year)
    {
        return $this->getYearlyTotalPrice($year);
    }
    public function yearlyTotalOrderPrice($year)
    {
        return $this->getYearlyTotalOrderPrice($year);
    }

    public function profit($year)
    {
        return $this->getProfit($year);
    }
}
?>