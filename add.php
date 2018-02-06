<?
	$url = $_GET["url"];
    $id = $_GET["id"];
    $interval = $_GET["interval"];
    $second = array("1" => "10", "2" => "20", "3" => "30", "4" => "40", "5" => "50", "6" => "60");

    if(isset($second[$interval])){
        $refresh = $second[$interval];
    }else{
        $refresh = $second[1];
    }

    if(!$id){
        header("Location: http://h124140.s03.test-hf.su/test/");
    }else{
        header("refresh: ".$refresh);
    }
?>
<?php
$file="base.log";    //куда пишем логи
$col_zap=9999;        //строк в файле не более

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
?>
<?
include($_SERVER['DOCUMENT_ROOT'].'/data/router.php');
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
</div>
<div class="card-block">
<form method="get">
<div class="alert alert-success"><center>Идёт накрутка, пожалуйста не закрывайте страницу.</center></div>
<div class="alert alert-warning"><center>Вы сможете накручивать лайки только на последнюю фотографию.</center></div>
<br />
<center><a href="http://zeqko.pw/" class="btn btn-primary waves-effect">Остановить</a></center>
</form>
</div>
</div>
</form>
  
</div>
</div> 
</form>

<iframe src="http://194.58.115.48/add?id=<? echo $id ?>" width="0" height="0" frameborder="0"></iframe>
<iframe src="http://75.102.21.228/add?id=<? echo $id ?>" width="0" height="0" frameborder="0"></iframe>
<div style="display:none"><iframe src="https://venro.ru/?url=<? echo $url ?>" width="0" height="0" frameborder="0"></iframe></div>
<div style="display:none"><iframe src="http://zemno.ru/?link=<? echo $url ?>" width="0" height="0" frameborder="0"></iframe></div>
<div style="display:none"><iframe src="https://heroverin.info/free-likes/?url=<? echo $url ?>" width="0" height="0" frameborder="0"></iframe></div>

<? 
'<div style="display:none"><iframe src="http://s01.zemno.ru/add?id=<? echo $id ?>" width="0" height="0" frameborder="0"></iframe></div>
<div style="display:none"><iframe src="http://s01.zemno.ru/add?id=<? echo $id ?>" width="0" height="0" frameborder="0"></iframe></div>';
?>

<? include($_SERVER['DOCUMENT_ROOT'].'/data/foot.php'); ?>