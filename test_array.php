<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17-6-13
 * Time: 上午10:50
 */

$weekarray=array("日","一","二","三","四","五","六");
var_dump(date("w","1497408217"));
echo "星期".$weekarray[date("w","1497408217")];