<?php
/* كاتب الملف المطور @qyp_3
برجاء عدم خمط الملف 
*/
ob_start();
$API_KEY = '5471514733:AAF2-t1Z85MB_L9eGz6kU5IFsOiHNfz7QlU'; 
define('BOT_TOKEN', '5471514733:AAF2-t1Z85MB_L9eGz6kU5IFsOiHNfz7QlU');

function lSDKl($method, $parameters)
{
    foreach ($parameters as $key => &$val) {
        if (is_array($val)) {
            $val = json_encode($val);
        }
    }
    $ch = curl_init('https://api.telegram.org/bot'.BOT_TOKEN.'/'.$method);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function curl_get_contents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
$sudo = 'ايدي قناتك';
$chj = "https://t.me/Iraqimothr";
$cht = "👋🏻┇اهلا بك عزيزي
🔘┇ليمكنك استخدام البوت
⚠️┇عليك الاشتراك في القناة
⚠️┇ القناة شترك عزيزي ┇⚠️
📡┇ $chj";
//////////////////////
define('API_KEY' ,$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
    
$codes = ['1','2','3','4','5','6','7','8','9','0'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12'];
$mr = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8";

$update = file_get_contents('php://input');

if (!empty($update)) {
    $update = json_decode($update, true);
    if (isset($update['message'])) {
        $message = $update['message'];
        $chat_id = $message['chat']['id'];
        $first_name = $message['from']['first_name'];
        if (isset($message['text'])) {
            $text = mb_strtolower($message['text']);
            if($text == "/start" ){
	Bot('SendMessage',[
	 'chat_id'=>$chat_id,
	 'text'=>"هلا بك اخي في بوت تخمين حسابات فيسبوك البوت يقم بتخمين لك حسابات ما مفحوصه للدخول الي قسم الصيد اضغط  /sar 
شرط يجب قراء { /mr } 
ـ-------------------------------------------------ـ
BY: @AMRAKL",
	 'parse_mode'=>"Markdown",
	]);
}
if($text == "/sar" ){
	Bot('SendMessage',[
	 'chat_id'=>$chat_id,
	 'text'=>"★ هلا بك في قسم التخمين ★
اختار الرقم الذي تريد الصيد عليه √
/010
/012
/015
BY: @AMRAKL",
	 'parse_mode' =>"Markdown",
	]);
	}
	if($text == "/010" ){
	Bot('SendMessage',[
	  'chat_id'=>$chat_id,
	  'text'=>"تم تخمين حساب فيسبوك 
---------------ــــــــــــــ--------------
إميل    : 010$mr
باسورد : 010$mr
---------------ــــــــــــــ--------------
BY: @AMRAKL",
	  'parse_mode'=>"Markdown",
	]);
}
if($text == "/012" ){
	Bot('SendMessage',[
	  'chat_id'=>$chat_id,
	  'text'=>"تم تخمين حساب فيسبوك 
---------------ــــــــــــــ--------------
إميل    : 012$mr
باسورد : 012$mr
---------------ــــــــــــــ--------------
BY: @AMRAKL",
	  'parse_mode'=>"Markdown",
	]);
}
if($text == "/015" ){
	Bot('SendMessage',[
	  'chat_id'=>$chat_id,
	  'text'=>"تم تخمين حساب فيسبوك 
---------------ــــــــــــــ--------------
إميل    : 015$mr
باسورد : 015$mr
---------------ــــــــــــــ--------------
BY: @AMRAKL",
	  'parse_mode'=>"Markdown",
	]);
}
if($text == "/mr" ){
	Bot('SendMessage',[
	  'chat_id'=>$chat_id,
	  'text'=>"البوت يقم بتخمين الحساب لكن مو مفحوصه يعني في يطلع شغال و في لا صيد و افحص الصيد و الي يطلع شغال مبروك عليك 🖤  
BY: @AMRAKL",
	  'parse_mode'=>"Markdown",
	]);
}
        }
    }
}
