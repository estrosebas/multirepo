<?php
$w="\e[0;37m";
$r="\e[1;31m";
$b="\e[1;36m";
$y="\e[1;33m";
$g="\e[1;32m";
$b2="\e[1;34m";
$p="\e[1;37m";
$l="{$p}**********************************************************************\n";
/////////server////
function server(){
$w="\e[0;37m";
$r="\e[1;31m";
$b="\e[1;36m";
$y="\e[1;33m";
$g="\e[1;32m";
$b2="\e[1;34m";
$p="\e[1;37m";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://controlc.com/49d0c4d3");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$on = explode("name=\"description\" content=\"", $result)[1];
$online = explode(" - ", $on)[0];
if ($online == "OFFLINE") {
echo "\n";
echo "{$r}SCRIPT NO ACTIVE\n";
sleep (1);
echo "{$w}DETENIENDO SCRIPT..\n";
sleep (1);
die ();
} else {
echo "\n";
echo "{$g}SCRIPT ACTIVE\n\n";
sleep(1);
echo "{$w}INICIANDO SCRIPT ESPERE...\n";
sleep (2);
system ("clear");
}
}
/////////curl////
function post($url,$post,$header){
$ch=curl_init();
  curl_setopt_array($ch,array(
  CURLOPT_URL => $url,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POST => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_PORT => 80,
  CURLOPT_ENCODING => '',
  CURLOPT_HTTPHEADER => $header,
  ));
 return curl_exec($ch);
 curl_close($ch);
}
$password = "
┏━━━┓╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┏┓
┃┏━┓┃╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋╋┃┃
┃┗━┛┣━━┳━━┳━━┳┓┏┓┏┳━━┳━┳━┛┃
┃┏━━┫┏┓┃━━┫━━┫┗┛┗┛┃┏┓┃┏┫┏┓┃
┃┃╋╋┃┏┓┣━━┣━━┣┓┏┓┏┫┗┛┃┃┃┗┛┃
┗┛╋╋┗┛┗┻━━┻━━┛┗┛┗┛┗━━┻┛┗━━┛";
$novia = "MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMNmdhhyyyyyyhdmNNMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMNmhsoo++++++++++++ooydmMMMMMMMMMMMM
MMMMMMMMMMMMMmyoo++++++++++++++++++++oshNMMMMMMMMM
MMMMMMMMMMMmyoooooo+++++++++++++++++++++ohNMMMMMMM
MMMMMMMMMNyooooooooooooo++++++++++++++++++odMMMMMM
MMMMMMMMmsooooooooooooooooooo+++++++++++++++hMMMMM
MMMMMMMNsoooooooooooooooooooooo+++/:/++++++++yMMMM
MMMMMMMsooooooooooooooooooo++/:.`   -o++++++++dMMM
MMMMMMdoooooooooooooooo++:-.        :oooooo+++oMMM
MMMMMMsoooooooooooo+/-.`    .:-     +oooooooooodMM
MMMMMMooooooooo/:.`      ./o/`     .ooooooooooohMM
MMMMMMooooooo:        ./oo:`       :ooooooooooohMM
MMMMMMsssoooooo+/:--:ooo:`         +ooooooooooodMM
MMMMMMdsssssssooooooooo/`         `ooooooooooooMMM
MMMMMMMysssssssssssoooooo:.       -ooooooooooodMMM
MMMMMMMNsssssssssssssssoooo+:.    +oooooooooohMMMM
MMMMMMMMNyssssssssssssssssssoo+/:/oooooooooohMMMMM
MMMMMMMMMNhssssssssssssssssssssssooooooooosdMMMMMM
MMMMMMMMMMMmyssssssssssssssssssssssssoooshNMMMMMMM
MMMMMMMMMMMMMmhsssssssssssssssssssssssydNMMMMMMMMM
MMMMMMMMMMMMMMMNmhysssssssssssssssyydNMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMNmmdhhhhhhhddmNMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM";
$yt = "                                                  
                                                  
                                                  
          ````......................````          
   -oyhdmmmmmmNNNNNNNNNNNNNNNNNNNNNNmmmmmmdhyo-   
 .hNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNh. 
`mMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMm`
+MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM+
hMMMMMMMMMMMMMMMMMdhmMMMMMMMMMMMMMMMMMMMMMMMMMMMMh
mMMMMMMMMMMMMMMMMMs .:sdNMMMMMMMMMMMMMMMMMMMMMMMMm
MMMMMMMMMMMMMMMMMMs     ./ymNMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMs         -+hNMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMs            `:sMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMs           -odMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMs       -+yNMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMs   ./ymNMMMMMMMMMMMMMMMMMMMMMMM
mMMMMMMMMMMMMMMMMMy:odNMMMMMMMMMMMMMMMMMMMMMMMMMMm
hMMMMMMMMMMMMMMMMMNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMh
+MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM+
`mMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMm`
   -oyhdmmmmmmNNNNNNNNNNNNNNNNNNNNNNmmmmmmdhyo-   
 .hNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNh. 
          ````......................````          
                                                  ";
$mutliapp = "
               _    _                           
/'\_/`\       (_ ) ( )_  _                      
|     | _   _  | | | ,_)(_)   _ _  _ _    _ _   
| (_) |( ) ( ) | | | |  | | /'_` )( '_`\ ( '_`\ 
| | | || (_) | | | | |_ | |( (_| || (_) )| (_) )
(_) (_)`\___/'(___)`\__)(_)`\__,_)| ,__/'| ,__/'
                                  | |    | |    
                                  (_)    (_)    
";
system("clear");
server();
system("clear");

echo $g."$password\n";
$pass0 = "Mon";

$d = $pass0;

switch ($d){
  case "Mon";
 $password = "ESTRO";
break;

}

switch ($d){
  case "Mon";
  $link = array("https://t.me/TeamDarkForce");
  break;
  
}
  
$time=date('h:i:s a'); //h=hour , i=min, s=sec, a=AM / PM
$date=date("m/d/Y");

$pass= "$password";
$link2 = $link[0];
//$link3 = $link[1];


echo "\033[1;33m★ESTE ENLACE TE ENVIARA AL GRUPO ALLI ENCONTRARAS LA CONTRASEÑA★"."\n";

echo "\033[1;35m•Link\033[1;31m:\033[1;36m $link2"."\n\n";

echo "\033[1;32m•Ingrese contraseña: \033[0;30m";

$a = trim(fgets(STDIN));

 if ($a == "$pass")
   echo "\033[1;32m•contraseña correcta!!!"."\n";
   
 else
 echo "\033[1;31m•contraseña incorrecta!!!"."\n",exit;
sleep(1);
 //echo "\033[1;32m•success\033[1;33m!!!"."\n\n";
sleep(5);
system("clear");

function tmc(){
$w="\e[0;37m";
$r="\e[1;31m";
$b="\e[1;36m";
$y="\e[1;33m";
$g="\e[1;32m";
$b2="\e[1;34m";
$p="\e[1;37m";
$l="{$p}**********************************************************************\n";
 /* function timer($str = "wait",$tt = 30){
$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
 $kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;
echo "\r                                          \r";
for($tri=$tt; $tri>0; $tri--){   
$a1=str_repeat("•",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."☾⋆☃⋆☽".$pth."] {$pth}{$str} ".gmdate("H:i:s",$tri); echo " {$tok}".$a1."";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";
}}
*/
///////mostrar////
$cargando = "
╔═══╗───────────────╔╗
║╔═╗║───────────────║║
║║─╚╬══╦═╦══╦══╦═╗╔═╝╠══╗
║║─╔╣╔╗║╔╣╔╗║╔╗║╔╗╣╔╗║╔╗║
║╚═╝║╔╗║║║╚╝║╔╗║║║║╚╝║╚╝║
╚═══╩╝╚╩╝╚═╗╠╝╚╩╝╚╩══╩══╝
─────────╔═╝║
─────────╚══╝";
$baner = "
        ,----,                          
      ,/   .`|        ____              
    ,`   .'  :      ,'  , `.  ,----..   
  ;    ;     /   ,-+-,.' _ | /   /   \  
.'___,/    ,' ,-+-. ;   , |||   :     : 
|    :     | ,--.'|'   |  ;|.   |  ;. / 
;    |.';  ;|   |  ,', |  ':.   ; /--`  
`----'  |  ||   | /  | |  ||;   | ;     
    '   :  ;'   | :  | :  |,|   : |     
    |   |  ';   . |  ; |--' .   | '___  
    '   :  ||   : |  | ,    '   ; : .'| 
    ;   |.' |   : '  |/     '   | '/  : 
    '---'   ;   | |`-'      |   :    /  
            |   ;/           \   \ .'   
            '---'             `---`     
                                        
";
$separador = "
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

_////////         _//                   
_//               _//                   
_//       _//// _/_/ _/_/ _///   _//    
_//////  _//      _//   _//    _//  _// 
_//        _///   _//   _//   _//    _//
_//          _//  _//   _//    _//  _// 
_////////_// _//   _// _///      _//    
                                        

░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░";
$tdf = "
______           _     ______                 
|  _  \         | |    |  ___|                
| | | |__ _ _ __| | __ | |_ ___  _ __ ___ ___ 
| | | / _` | '__| |/ / |  _/ _ \| '__/ __/ _ \
| |/ / (_| | |  |   <  | || (_) | | | (_|  __/
|___/ \__,_|_|  |_|\_\ \_| \___/|_|  \___\___|
                                              
                                              
";
/*function elot(){
  $a=20;
  for($i=0;$i<$a;$i++){
    $lod= intval($i/$a*100);
    echo "\r".$lod.str_repeat("🤑",$i);
    sleep(1);
  }
}
*/

echo $g."$cargando\n";

  $eloy=20;
  for($eloa=0;$eloa<$eloy;$eloa++){
    $lod= intval($eloa/$eloy*100);
    echo "\r".$lod.str_repeat("🤑",$eloa);
    sleep(1);
  }
sleep(5);
system("clear");

echo $w."$baner\n";
sleep(1);
echo $p."-----------------------------------------------------\n";
sleep(1);
echo $w."$separador\n";
echo $p."-----------------------------------------------------\n";
echo $w."$tdf\n";
echo $p."-----------------------------------------------------\n";
sleep(3);


////header////
$ua = array(
  'User-Agent:Dalvik/2.1.0 (Linux; U; Android 11; SM-A217M Build/RP1A.200720.012)',
  'Host:72-251-226-37.cprapid.com',
  'Connection:Keep-Alive',
  'Accept-Encoding:gzip',
  );
////login
include("cfg.php");
$datalogin = "android_password=".$passtmc."&android_email=".$emailtmc."&android_api=1234&";
/*$data2 = "$datacfg2";*/
$login = post("http://72-251-226-37.cprapid.com/mine/android/check_user.php",$datalogin,$ua);

$json = json_decode($login, true);
$log1 = json_decode($login, true)["message"];
if($json["message"] == "active"){
  echo $w." LOGIN >$y $log1\n";
}else{
echo $w. " $log1\n";}

////user
$user = post("http://72-251-226-37.cprapid.com/mine/android/check_user.php",$datalogin,$ua);
$js = json_decode($user,true);
$nombre = $js["android_name"];
$emailtmc = $js["android_email"];
$tr = $js["android_id"];
$mr = $js["android_refer"];
echo $w;
sleep(1);

echo $w." NOMBRE ->$b $nombre\n";
echo $w." Email ->$b $emailtmc\n";
echo $w." Tu código->$b $tr\n";
echo $w." Referido por->$b $mr\n";


///</m>atch///
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
echo "\033[1;37m        ••••\033[1;35m   MATH  \033[1;37m••••\n";
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
include("cfg.php");
for ($xa=0;$xa<20;$xa++){
$punton = rand(1,20);
$datagame = "android_amount=".$punton."&android_api=1234&android_id=".$reffertmc."&";
$match = post("http://72-251-226-37.cprapid.com/mine/android/user_math_imp_count_add.php",$datagame,$ua);

$msg = json_decode($match,true)["error"];
///yp
include("cfg.php");
$stopmath = "android_id=".$reffertmc."&android_api=1234&";

$endmatch = post("http://72-251-226-37.cprapid.com/mine/android/math_end.php",$stopmath,$ua);






include("cfg.php");
$datamos = "android_api=1234&android_id=".$reffertmc."&";
$user = post("http://72-251-226-37.cprapid.com/mine/android/user_get_url.php",$datamos,$ua);
$js = json_decode($user,true);

$puntosmatxh = $js["android_amount"];
echo $w. "|||perfecto||| 😎 [ganaste] -> $w $punton-[tu balance] ->$w $puntosmatxh - [math] $w $xa\n";

$str = "POR FAVOR ESPERE...";

$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
$kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;

for ($i=40;$i>-1;$i--){
$a1=str_repeat("➠",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."【:3】".$pth."] \033[1;33m$str $i sec $a1";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";}
}
///video//
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
echo "\033[1;37m        ••••\033[1;35m   VIDEO  \033[1;37m••••\n";
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
include("cfg.php");
for ($xy=0;$xy<20;$xy++){
$puntin = rand(1,20);
$datagame = "android_amount=".$puntin."&android_api=1234&android_id=".$reffertmc."&";
$match = post("http://72-251-226-37.cprapid.com/mine/android/user_video_imp_count_add.php",$datagame,$ua);

$msg = json_decode($match,true)["error"];

///yp
include("cfg.php");
$stopwatch = "android_id=".$reffertmc."&android_api=1234&";

$endwatch = post("http://72-251-226-37.cprapid.com/mine/android/watch_end.php",$stopwatch,$ua);




include("cfg.php");
$datamos = "android_api=1234&android_id=".$reffertmc."&";
$user = post("http://72-251-226-37.cprapid.com/mine/android/user_get_url.php",$datamos,$ua);
$js = json_decode($user,true);

$puntosvideo = $js["android_amount"];
$subidomach = $js["android_math_amount"];
echo $w. "|||perfecto||| 😎 [ganaste] -> $w $puntin - [tu balance] ->$w $puntosvideo - [video] - $w $xy\n";

$str = "POR FAVOR ESPERE...";

$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
$kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;

for ($i=40;$i>-1;$i--){
$a1=str_repeat("➠",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."【:3】".$pth."] \033[1;33m$str $i sec $a1";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";}
}
///spin///
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
echo "\033[1;37m        ••••\033[1;35m   SPIN  \033[1;37m••••\n";
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
include("cfg.php");
for ($xx=0;$xx<20;$xx++){
$puntun = rand(1,20);
$datagame = "android_amount=".$punton."&android_api=1234&android_id=".$reffertmc."&";
$match = post("http://72-251-226-37.cprapid.com/mine/android/user_spin_imp_count_add.php",$datagame,$ua);

$msg = json_decode($match,true)["error"];


///yp
include("cfg.php");
$stopspin = "android_id=".$reffertmc."&android_api=1234&";

$endspin = post("http://72-251-226-37.cprapid.com/mine/android/spin_end.php",$stopspin,$ua);







include("cfg.php");
$datamos = "android_api=1234&android_id=".$reffertmc."&";
$user = post("http://72-251-226-37.cprapid.com/mine/android/user_get_url.php",$datamos,$ua);
$js = json_decode($user,true);

$puntosspin = $js["android_amount"];
echo $w. "|||perfecto||| 😎 [ganaste] -> $w $puntun - [tu balance] ->$w $puntosspin - [spin] $w $xx\n";


$str = "POR FAVOR ESPERE...";

$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
$kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;

for ($i=40;$i>-1;$i--){
$a1=str_repeat("➠",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."【:3】".$pth."] \033[1;33m$str $i sec $a1";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";}
}
///scratch///
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
echo "\033[1;37m        ••••\033[1;35m   SCRATCH  \033[1;37m••••\n";
echo "\033[1;33m••••••••••••••••••••••••••••••••••••••••••••••••\n";
include("cfg.php");
for ($xb=1;$xb>20;$xb--){
$punten = rand(1,20);
$datagame = "android_amount=".$punton."&android_api=1234&android_id=".$reffertmc."&";
$match = post("http://72-251-226-37.cprapid.com/mine/android/user_scratch_imp_count_add.php",$datagame,$ua);

$msg = json_decode($match,true)["error"];



///yp
include("cfg.php");
$stopspin = "android_id=".$reffertmc."&android_api=1234&";

$endspin = post("http://72-251-226-37.cprapid.com/mine/android/scratch_end.php",$stopspin,$ua);




include("cfg.php");

$datamos = "android_api=1234&android_id=".$reffertmc."&";
$user = post("http://72-251-226-37.cprapid.com/mine/android/user_get_url.php",$datamos,$ua);
$js = json_decode($user,true);

$puntosscratch = $js["android_amount"];
echo $w. "|||perfecto||| 😎 [ganaste] -> $w $puntun - [tu balance] ->$w $puntosscratch- [Scratch] $w $xb\n";
$str = "POR FAVOR ESPERE...";

$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
$kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;

for ($i=40;$i>-1;$i--){
$a1=str_repeat("➠",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."【:3】".$pth."] \033[1;33m$str $i sec $a1";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";}
}
echo " VUELVE MAS TARDE :3\n";

$str = "POR FAVOR ESPERE...";

$ijo="\033[92m";$pth="\033[37m";$tmr="\033[31m";
$kn="\033[33m";$tr="\033[36m";$tmre="\033[35m";
$tik=[$tr,$kn,$tmr,$tmre,$tr,$kn,$tmr,$tmre];$a=1;

for ($i=40;$i>-1;$i--){
$a1=str_repeat("➠",$a);$tok=$tik[$a-1];
echo $pth."[".$tok."【:3】".$pth."] \033[1;33m$str $i sec $a1";
if($a==8){$a=1;}else{$a++;}sleep(1);
echo 
"\r                                        \r";}


}

system("clear");


awal:
echo $g."$mutliapp\n";
echo "Bienvenido al multiapp ESTRO\n";
echo "Escoja una opción una vez termine se lo redireccionara nuevamente al menu\n";
echo "===========================\n";
echo "[1]TMCCASHH\n";
echo "[2]proximamente\n";
echo "[3]instalar requerimentos\n";
echo "[4]correr todo\n";
echo "[5]telegram\n";
echo "[6]canal de youtube\n";
echo "[7]actualizar script\n";
echo "===========================\n";
$menu = readline("[+]input menu: ");

if($menu == 1){
system("clear");
tmc();
 $tmccashselec=readline("[+]back to menu[y/n]: ");
 if($tmccashselec == "y"){
system("clear");
  goto awal;
 }else{
  exit("gracias por usar mi script!!!!\n");
 }
/*}else if($menu == 2){
system("clear");

 $fastfollowers=readline("[+]back to menu[y/n]: ");
 if($b == "y"){
  goto awal;
 }else{
  exit("thanks bro!!!\n");
 }*/
}else if($menu == 3){
system("clear");
 echo "vamos a instalar lo necesario\n";
 sleep(2);
 system("apt update");
 system("apt upgrade");
 system("pkg install python");
 system("pkg install python2");
 system("pkg install figlet");
 system("pkg install nano");
 system("pkg install toilet");
 system("pkg install figlet");
 system("pkg install vim");
 $c=readline("[+]back to menu[y/n]: ");
 if($c == "y"){
  system("clear");
  goto awal;
 }else{
  exit("thanks bro!!!!\n");
 }
}else if($menu == 4){
system("clear");
 tmc();
 
 sleep(2);
 $c=readline("[+]back to menu[y/n]: ");
 if($c == "y"){
  goto awal;
 }else{
  exit("thanks bro!!!!\n");
 }
}else if($menu == 5){
system("clear");
 echo "$novia\n";
system("termux-open https://t.me/joinchat/65bu31AczeA2NDRh");
 sleep(2);
 $c=readline("[+]back to menu[y/n]: ");
 if($c == "y"){
   system("clear");
  goto awal;
 }else{
  exit("saliendo!!!!\n");
 }
}else if($menu == 6){
system("clear");
system("termux-open https://youtube.com/channel/UCOI7CTBq3q8xZlAVCcuEdEg");
echo "$yt\n";
 sleep(2);
 
 $c=readline("[+]back to menu[y/n]: ");
 if($c == "y"){
   system("clear");
  goto awal;
 }else{
  exit("thanks bro!!!!\n");
 }
 
}else if($menu == 7){
system("clear");
system("rm Multiapp.php");
system("git clone https://github.com/estrosebas/multirepo");
system("php multiapp.php")
 sleep(2);
 
 $c=readline("[+]back to menu[y/n]: ");
 if($c == "y"){
   system("clear");
  goto awal;
 }else{
  exit("thanks bro!!!!\n");
 }
}else{

 echo("opción invalida\n");
 sleep(2);
system("clear");
goto awal;
}
?>
