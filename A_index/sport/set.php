<?php

$_DBC['private']['pass']=$_DBC['private']['pwd'];
$user_id = $_SESSION['uid'];

$spArr = array('ft','bk','vb','bs','tn');
$Spgame = M('sp_games_view',$_DBC['private']);
$Uagent = M('k_user_agent_sport_set',$_DBC['private']);
$Uaset = M('k_user_sport_set',$_DBC['private']);

foreach ($spArr as $key => $val) {

    $tmpA = $tmpB = array();
    $tmpA = @$Spgame->join("join k_user_agent_sport_set on k_user_agent_sport_set.type_id = sp_games_view.id")->where("sp_games_view.type = '".$val."' and k_user_agent_sport_set.aid = '".$_SESSION['agent_id']."'")->select("t_type");
    $tmpB= @$Spgame->join("join k_user_sport_set on k_user_sport_set.type_id = sp_games_view.id")->where("sp_games_view.type = '".$val."' and k_user_sport_set.uid = '".$user_id."'")->select("t_type");
    $set[$val] = @array_merge($tmpA,$tmpB);
}
//echo $Spgame->getLastSql();
//print_r($set);
unset($dz_db,$dc_db);
$dz_db=array();//单注
$dc_db=array();//单场
$dm_db=array();//最小值
$dz_db['足球单式']['让球']=$set['ft']['rq']['single_note_max'];
$dm_db['足球单式']['让球']=$set['ft']['rq']['min'];
$dc_db['足球单式']['让球']=$set['ft']['rq']['single_field_max'];
$dz_db['足球单式']['单双']=$set['ft']['ds']['single_note_max'];
$dc_db['足球单式']['单双']=$set['ft']['ds']['single_field_max'];
$dm_db['足球单式']['单双']=$set['ft']['ds']['min'];
$dz_db['足球单式']['大小']=$set['ft']['dx']['single_note_max'];
$dc_db['足球单式']['大小']=$set['ft']['dx']['single_field_max'];
$dm_db['足球单式']['大小']=$set['ft']['dx']['min'];
$dz_db['足球单式']['标准盘']=$set['ft']['dy']['single_note_max'];
$dc_db['足球单式']['标准盘']=$set['ft']['dy']['single_field_max'];
$dm_db['足球单式']['标准盘']=$set['ft']['dy']['min'];
$dz_db['足球上半场']['上半场让球']=$set['ft']['rq']['single_note_max'];
$dc_db['足球上半场']['上半场让球']=$set['ft']['rq']['single_field_max'];
$dm_db['足球上半场']['上半场让球']=$set['ft']['rq']['min'];
$dz_db['足球上半场']['上半场大小']=$set['ft']['dx']['single_note_max'];
$dc_db['足球上半场']['上半场大小']=$set['ft']['dx']['single_field_max'];
$dm_db['足球上半场']['上半场大小']=$set['ft']['dx']['min'];
$dz_db['足球上半场']['上半场标准盘']=$set['ft']['dy']['single_note_max'];
$dc_db['足球上半场']['上半场标准盘']=$set['ft']['dy']['single_field_max'];
$dm_db['足球上半场']['上半场标准盘']=$set['ft']['dy']['min'];
$dz_db['足球单式']['波胆']=$set['ft']['bd']['single_note_max'];
$dc_db['足球单式']['波胆']=$set['ft']['bd']['single_field_max'];
$dm_db['足球单式']['波胆']=$set['ft']['bd']['min'];
$dz_db['足球单式']['入球数']=$set['ft']['zrq']['single_note_max'];
$dc_db['足球单式']['入球数']=$set['ft']['zrq']['single_field_max'];
$dm_db['足球单式']['入球数']=$set['ft']['zrq']['min'];
$dz_db['足球单式']['半全场']=$set['ft']['bqc']['single_note_max'];
$dc_db['足球单式']['半全场']=$set['ft']['bqc']['single_field_max'];
$dm_db['足球单式']['半全场']=$set['ft']['bqc']['min'];
$dz_db['足球早餐']['让球']=$set['ft']['rq']['single_note_max'];
$dc_db['足球早餐']['让球']=$set['ft']['rq']['single_field_max'];
$dm_db['足球早餐']['让球']=$set['ft']['rq']['min'];
$dz_db['足球早餐']['单双']=$set['ft']['ds']['single_note_max'];
$dc_db['足球早餐']['单双']=$set['ft']['ds']['single_field_max'];
$dm_db['足球早餐']['单双']=$set['ft']['ds']['min'];
$dz_db['足球早餐']['大小']=$set['ft']['dx']['single_note_max'];
$dc_db['足球早餐']['大小']=$set['ft']['dx']['single_field_max'];
$dm_db['足球早餐']['大小']=$set['ft']['dx']['min'];
$dz_db['足球早餐']['标准盘']=$set['ft']['dy']['single_note_max'];
$dc_db['足球早餐']['标准盘']=$set['ft']['dy']['single_field_max'];
$dm_db['足球早餐']['标准盘']=$set['ft']['dy']['min'];
$dz_db['足球早餐']['上半场让球']=$set['ft']['rq']['single_note_max'];
$dc_db['足球早餐']['上半场让球']=$set['ft']['rq']['single_field_max'];
$dm_db['足球早餐']['上半场让球']=$set['ft']['rq']['min'];
$dz_db['足球早餐']['上半场大小']=$set['ft']['rq']['single_note_max'];
$dc_db['足球早餐']['上半场大小']=$set['ft']['rq']['single_field_max'];
$dm_db['足球早餐']['上半场大小']=$set['ft']['rq']['min'];
$dz_db['足球早餐']['上半场标准盘']=$set['ft']['dy']['single_note_max'];
$dc_db['足球早餐']['上半场标准盘']=$set['ft']['dy']['single_field_max'];
$dm_db['足球早餐']['上半场标准盘']=$set['ft']['dy']['min'];
$dz_db['足球早餐']['波胆']=$set['ft']['bd']['single_note_max'];
$dc_db['足球早餐']['波胆']=$set['ft']['bd']['single_field_max'];
$dm_db['足球早餐']['波胆']=$set['ft']['bd']['min'];
$dz_db['足球早餐']['入球数']=$set['ft']['zrq']['single_note_max'];
$dc_db['足球早餐']['入球数']=$set['ft']['zrq']['single_field_max'];
$dm_db['足球早餐']['入球数']=$set['ft']['zrq']['min'];
$dz_db['足球早餐']['半全场']=$set['ft']['bqc']['single_note_max'];
$dc_db['足球早餐']['半全场']=$set['ft']['bqc']['single_field_max'];
$dm_db['足球早餐']['半全场']=$set['ft']['bqc']['min'];
$dz_db['足球滚球']['让球']=$set['ft']['gq_rq']['single_note_max'];
$dc_db['足球滚球']['让球']=$set['ft']['gq_rq']['single_field_max'];
$dm_db['足球滚球']['让球']=$set['ft']['gq_rq']['min'];
$dz_db['足球滚球']['大小']=$set['ft']['gq_dx']['single_note_max'];
$dc_db['足球滚球']['大小']=$set['ft']['gq_dx']['single_field_max'];
$dm_db['足球滚球']['大小']=$set['ft']['gq_dx']['min'];
$dz_db['足球滚球']['上半场让球']=$set['ft']['gq_rq']['single_note_max'];
$dc_db['足球滚球']['上半场让球']=$set['ft']['gq_rq']['single_field_max'];
$dm_db['足球滚球']['上半场让球']=$set['ft']['gq_rq']['min'];
$dz_db['足球滚球']['上半场大小']=$set['ft']['gq_dx']['single_note_max'];
$dc_db['足球滚球']['上半场大小']=$set['ft']['gq_dx']['single_field_max'];
$dm_db['足球滚球']['上半场大小']=$set['ft']['gq_dx']['min'];
$dz_db['足球滚球']['标准盘']=$set['ft']['gq_dy']['single_note_max'];
$dc_db['足球滚球']['标准盘']=$set['ft']['gq_dy']['single_field_max'];
$dm_db['足球滚球']['标准盘']=$set['ft']['gq_dy']['min'];
$dz_db['足球滚球']['上半场标准盘']=$set['ft']['gq_dy']['single_note_max'];
$dc_db['足球滚球']['上半场标准盘']=$set['ft']['gq_dy']['single_field_max'];
$dm_db['足球滚球']['上半场标准盘']=$set['ft']['gq_dy']['min'];
$dz_db['篮球单式']['单双']=$set['bk']['ds']['single_note_max'];
$dc_db['篮球单式']['单双']=$set['bk']['ds']['single_field_max'];
$dm_db['篮球单式']['单双']=$set['bk']['ds']['min'];
$dz_db['篮球单式']['让球']=$set['bk']['rq']['single_note_max'];
$dc_db['篮球单式']['让球']=$set['bk']['rq']['single_field_max'];
$dm_db['篮球单式']['让球']=$set['bk']['rq']['min'];
$dz_db['篮球单式']['大小']=$set['bk']['dx']['single_note_max'];
$dc_db['篮球单式']['大小']=$set['bk']['dx']['single_field_max'];
$dm_db['篮球单式']['大小']=$set['bk']['dx']['min'];
$dz_db['篮球滚球']['让球']=$set['bk']['rq']['single_note_max'];
$dc_db['篮球滚球']['让球']=$set['bk']['rq']['single_field_max'];
$dm_db['篮球滚球']['让球']=$set['bk']['rq']['min'];
$dz_db['篮球滚球']['大小']=$set['bk']['dx']['single_note_max'];
$dc_db['篮球滚球']['大小']=$set['bk']['dx']['single_field_max'];
$dm_db['篮球滚球']['大小']=$set['bk']['dx']['min'];
$dz_db['网球单式']['标准盘']=$set['tn']['dy']['single_note_max'];
$dc_db['网球单式']['标准盘']=$set['tn']['dy']['single_field_max'];
$dm_db['网球单式']['标准盘']=$set['tn']['dy']['min'];
$dz_db['网球单式']['让球']=$set['tn']['rq']['single_note_max'];
$dc_db['网球单式']['让球']=$set['tn']['rq']['single_field_max'];
$dm_db['网球单式']['让球']=$set['tn']['rq']['min'];
$dz_db['网球单式']['单双']=$set['tn']['ds']['single_note_max'];
$dc_db['网球单式']['单双']=$set['tn']['ds']['single_field_max'];
$dm_db['网球单式']['单双']=$set['tn']['ds']['min'];
$dz_db['网球单式']['大小']=$set['tn']['dx']['single_note_max'];
$dc_db['网球单式']['大小']=$set['tn']['dx']['single_field_max'];
$dm_db['网球单式']['大小']=$set['tn']['dx']['min'];
$dz_db['排球单式']['标准盘']=$set['vb']['dy']['single_note_max'];
$dc_db['排球单式']['标准盘']=$set['vb']['dy']['single_field_max'];
$dm_db['排球单式']['标准盘']=$set['vb']['dy']['min'];
$dz_db['排球单式']['让球']=$set['vb']['rq']['single_note_max'];
$dc_db['排球单式']['让球']=$set['vb']['rq']['single_field_max'];
$dm_db['排球单式']['让球']=$set['vb']['rq']['min'];
$dz_db['排球单式']['大小']=$set['vb']['dx']['single_note_max'];
$dc_db['排球单式']['大小']=$set['vb']['dx']['single_field_max'];
$dm_db['排球单式']['大小']=$set['vb']['dx']['min'];
$dz_db['排球单式']['单双']=$set['vb']['ds']['single_note_max'];
$dc_db['排球单式']['单双']=$set['vb']['ds']['single_field_max'];
$dm_db['排球单式']['单双']=$set['vb']['ds']['min'];
$dz_db['棒球单式']['让球']=$set['bs']['rq']['single_note_max'];
$dc_db['棒球单式']['让球']=$set['bs']['rq']['single_field_max'];
$dm_db['棒球单式']['让球']=$set['bs']['rq']['min'];
$dz_db['棒球单式']['大小']=$set['bs']['dx']['single_note_max'];
$dc_db['棒球单式']['大小']=$set['bs']['dx']['single_field_max'];
$dm_db['棒球单式']['大小']=$set['bs']['dx']['min'];
$dz_db['棒球单式']['单双']=$set['bs']['ds']['single_note_max'];
$dc_db['棒球单式']['单双']=$set['bs']['ds']['single_field_max'];
$dm_db['棒球单式']['单双']=$set['bs']['ds']['min'];
$dz_db['冠军']=100000;
$dc_db['冠军']=100000;
$dm_db['冠军']=10;
$dz_db['金融']=100000;
$dc_db['金融']=100000;
$dm_db['金融']=10;
$dz_db['串关']=$set['ft']['zhgg']['single_note_max'];
$dc_db['串关']=$set['ft']['zhgg']['single_field_max'];
$dm_db['串关']=$set['ft']['zhgg']['min'];
$dz_db['未定义']=100000;
$dc_db['未定义']=100000;
$dm_db['未定义']=10;

//print_r($dz_db);exit;

?>