<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
class Calculate{
    function getTotal(&$bean, $event, $arguments){
        $bean->totalamount_c = $bean->amount * ((100 + $bean->tax_c)/100);
    }
}
