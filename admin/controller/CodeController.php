<?php

include_once __DIR__.'/../model/Code.php';

class CodeController extends Code {
    public function codeList()
    {
        return $this->getCodeList();
    }

    public function addCode($code,$agent)
    {
        return $this->createCode($code,$agent);
    }

    public function deleteCode($id)
    {
        return $this->removeCode($id);
    }
}
?>