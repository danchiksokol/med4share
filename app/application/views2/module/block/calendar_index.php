<?
$blocks = ORM::factory('Blocks')
    ->where('blocks_name', '=', $blocks_name)
    ->find();
if( isset($blocks->content) ) {
    echo $blocks->content;
}
?>