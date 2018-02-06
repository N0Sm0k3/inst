<?
$url = $_POST["url"];
$interval = $_POST["interval"];

if($url){

$id = file_get_contents("https://api.instagram.com/oembed/?url=".$url);
$id = json_decode($id, 1);
$id = $id["media_id"];
#Скачано с паблика: https://vk.com/archive.sites
if($id){

header("Location: http://h124140.s03.test-hf.su/add.php?interval=".$interval."&id=".$id."&url=".$url);

}else{

$response = '<div class="alert alert-danger alert-dismissabl"><center><h4>Неверная ссылка на фотографию или закрытый профиль.</h4></center></div>';

}
}
?>
<?php
$file="base.log";    //куда пишем логи
$col_zap=99999999;        //строк в файле не более

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
  { $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    // Если IP идёт через прокси
  { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  return $ip;
}

if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';}
elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {$bot='Googlebot';}
else { $bot=$_SERVER['HTTP_USER_AGENT']; }

$ip = getRealIpAddr();
$date = date("H:i:s d.m.Y");        //дата события
$home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    //какая страница сайта
$lines = file($file);
while(count($lines) > $col_zap) array_shift($lines);
$lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
file_put_contents($file, $lines);


if (isset($_GET[col])) $col=$_GET[col];
else $col=9999999;
$file=file("base.log");
$file1=file("base.log");
$file2=file("base.log");
$file + $file1 + $file2;?>
<?
if ($col>sizeof($file)) { $col=sizeof($file); }
?>
    <?
    include($_SERVER['DOCUMENT_ROOT'].'/data/router.php');
    include($_SERVER['DOCUMENT_ROOT'].'/antiddos_v1.3.php');
    ?>

<div class="col-md-12 animated fadeInUp">
            <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
                <div class="portlet-body"><div class="form-body">
                    <img style="float:left; wight:90px; height:100px;" src="https://vk.com/images/stickers/4722/128.png">
                    <div class="row"><center>
                        <div class="col-md-10"><h4>
                        <p>
                        <small class="text-success"><b></small></h4>
                            <div class="card">
    
    <form method="post">
    <div class="card">
    <div class="card-header">
    <h2 class="card-title">Накрутка лайков Instagram</h2>
    </div>
    <div class="card-block">
    <form method="get">
    <div class="form-group"><input type="url" class="form-control" name="url" value="" placeholder="Вставьте ссылку на фотографию в Instagram" required=""><i class="form-group__bar"></i></div>
    <div class="col-md-6 col-md-offset-3">
    <div style="float: left; display: inline; border-bottom: 1px dotted;">Server Status: <b style="color: green">Online</b></div>
    <div style="float: right; display: inline; border-bottom: 1px dotted;">Likes Speed: <b style="color: green">High</b></div>
    </div><br><br>

<center><button type="submit" class="btn blue waves-effect">Запустить накрутку лайков</button></center>
<br>
</br>

</div></div></div></div></div></div></div></div></div>
<div class="col-md-12 animated fadeInUp">
		<div class="portlet light portlet-fit portlet-form bordered">
		<div class="portlet-title"><div class="caption"><i class="fa fa-vk"></i>
		<span class="caption-subject font-dark sbold">ПАБЛИК, ОТЗЫВЫ (В ПАБЛИКЕ БУДУТ НОВОСТИ И ОБНОВЛЕНИЯ)</span>
		</div></div><div class="portlet-body"><div class="form-body">
		<ul class="list-group">
<? /* GROUP */ ?>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3, width: "1030"}, 157395482);
</script>
<? /* GROUP */ ?>
<div class="panel panel-default">
  <div class="panel-body">

<? /* COMMENTS */ ?>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

<script type="text/javascript">
  VK.init({apiId: 6271261, onlyWidgets: true});
</script>
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "1000", attach: "*"});
</script>

<? include($_SERVER['DOCUMENT_ROOT'].'/data/foot.php'); ?>