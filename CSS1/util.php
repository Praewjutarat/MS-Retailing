<?php
 
$_vars = array();
function sb($name){
 static $sName;
 if (empty($name)) return $sName;
 $sName = $name;
 ob_start();
}
function eb(){
 global $_vars;
 $name = sb(0);
 $_vars[$name] = ob_get_clean();
}
function render(){
 global $_vars;
 ob_start();
 require ($GLOBALS['MasterPage']);
 $page = ob_get_clean();
 foreach($_vars as $name=>$var)
  $page = str_replace('{$'.$name.'}',$var,$page);
 echo $page;
}
 
?>