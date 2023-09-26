<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .name{
            font-family: Arial, sans-serif;
            color: red;
            font-size: 28px;
        }
        tr.opaque-row {
            background-color: rgba(0, 0, 0, 1);
            color: white;
        }
        .circle-image {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .invalid {
            border-color: red;
        }
        a[href^="#"] {
            background-color: gold;

        }
        a[href^="#"]:visited {
            color: black;

        }

        #res td, th{

            border: 2px dotted white;
        }
        #res{
            background-color: black;
            border-collapse: collapse;
        }
        table, th, td {

            border-radius: 5px;
        }
        .name span{
            color: green;
        }
        #group{
            font-style: italic;
            color: blue;
            font-size: 18px;

        }
        #group:hover{
            color: yellow;
        }
        .xy_table td{
            border: 2px solid grey;
        }
        .input {
            padding-left: 1%;
            width: 215px;
        }
        td {
            vertical-align: middle;
        }

        .intro {
            top: 0px;
            left: 0px;
            position: absolute;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            background: black;
            width: 100vw;
            z-index: -1;
        }
        body {
            background-color: black;
        }
        table {
            color: white;
        }
        #y {
        <!--color: initial;-->
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


    <script>
        jQuery(function(){
            function countDigits(number) {
                var numberString = number.toString();

                if (numberString.length > 15){
                    return true;
                }else{
                    return false;
                }
            }
            function valid(){
                let x = jQuery("#vvodx").val();
                let y = jQuery("#vvody").val();

                //jQuery("#group").html(x.lenght());
                if(isNaN(x) || x=="" || countDigits(x) || !((x<=3 & x>=-3))){
                    vvodx.classList.add('invalid');
                }
                if(isNaN(y) || y=="" || !(y==-5 || y==-4 || y==-3 || y==-2 || y==-1 || y==0 || y==1 || y==2 || y==3)){
                    vvody.classList.add('invalid');
                }
                if ((x<=3 & x>=-3) & !(isNaN(x) || x=="" || countDigits(x))){
                    vvodx.classList.remove('invalid');
                }
                if ((y==-5 || y==-4 || y==-3 || y==-2 || y==-1 || y==0 || y==1 || y==2 || y==3 ) & !(isNaN(y) || y=="")){
                    vvody.classList.remove('invalid');
                }
                if ((x<=3 & x>=-3) & (y==-5 || y==-4 || y==-3 || y==-2 || y==-1 || y==0 || y==1 || y==2 || y==3) & !(isNaN(x) || x=="" || countDigits(x)) & !(isNaN(y) || y=="")){
                    return true;}
                return false;

            };
            function keyevent(){
                if(!valid()){
                    jQuery("#submit").prop("disabled", true);
                }else{
                    jQuery("#submit").prop("disabled", false);
                }

            };


            jQuery(".ybutton").on("click", function(){jQuery("#vvody").val(jQuery(this).html());
                event.preventDefault();
                keyevent();});
            jQuery("#vvodx").on("keypress", keyevent);
            jQuery("#vvody").on("keypress", keyevent);
            jQuery("#vvodx").on("change", keyevent);
            jQuery("#vvody").on("change", keyevent);
            jQuery("#vvodx").on("click", keyevent);
            jQuery("#vvody").on("click", keyevent);
            jQuery("#vvodx").on("hover", keyevent);
            jQuery("#vvody").on("hover", keyevent);
            jQuery("#vvodx").on("keyup", keyevent);
            jQuery("#vvody").on("keyup", keyevent);

            jQuery("#forma").on("submit", function(){
                if(!valid()){
                    event.preventDefault();
                    keyevent();
                };
            });
            //jQuery(".vvod").on("click", keyevent);

        });

    </script>


    <title>Lab1 web</title>
</head>

<body>
<div class="intro" id="intro"></div>
<script src="three.r134.min.js"></script>
<script src="vanta.birds.min.js"></script>
<script src="app.js"></script>

<table id="section2">
    <tr class="opaque-row"> <td class="name"><b> Mikhail <span> Nachinkin </span></b> </td><td><img class="circle-image" src="capy.jpeg" alt="Здесь могла бы быть капибара"></td></tr>
    <tr> <td style="font-size: 20px; color: blue; font-family: Arial, sans-serif"  > Вариант: 1622 </td>  </tr>
    <tr> <td id="group"> P3206 </td>  </tr>
</table>
<form action="lab1.php" method="POST" id="forma">

    <table class="xy_table">
        <tr> <td> x </td><td class="input"> <input type="text" name="x" id="vvodx" placeholder="значение от -3, до 3"/> </td>  </tr>
        <tr> <td id="y"> <!--rowspan="2"--> y </td><td class="input"> <input type="text" name="y" id="vvody"/></td> <td class="button"> <button class="ybutton"> -5 </button> <button class="ybutton"> -4 </button>  <button class="ybutton"> -3 </button> <button class="ybutton"> -2 </button>  <button class="ybutton"> -1 </button> <button class="ybutton"> 0 </button>  <button class="ybutton"> 1 </button>  <button class="ybutton"> 2 </button>  <button class="ybutton"> 3 </button> </td>   </tr>
        <tr> <td> R </td><td class="input"> <input type="radio" name="R" value="1" checked/> 1 <input type="radio" name="R" value="1.5"/> 1.5 <input type="radio" name="R" value="2"/> 2 <input type="radio" name="R" value="2.5"/> 2.5 <input type="radio" name="R" value="3"/> 3 </td>  </tr>

        <tr> <td colspan="2"> <input type="submit" disabled value="отправить" id="submit"/></td>  </tr>

    </table>



</form>

<?php
echo '<table id="res">
<tr>
    <th>Координата Х</th>
    <th>Координата У</th>
    <th>Значение R</th>
    <th>Время столкновения снаряда с объектом</th>
    <th>Время полета снаряда</th>
    <th>Результат</th>
  </tr>
';
$start_time = microtime(true);

if (isset($_SESSION["previous"]))
    echo $_SESSION["previous"];

echo "</table>";

$x=0;
if (isset($_POST["x"]))
{
    $x=(float)$_POST["x"];
}
$y=0;
if (isset($_POST["y"]))
{
    $y=(float)$_POST["y"];
}
$R=1;
if (isset($_POST["R"]))
{
    $R=(float)$_POST["R"];
}
if(!is_numeric($x) || $x=="" || !is_numeric($y) || $y=="" || !is_numeric($R) || $R==""){
    die("Зачем вы попытались атаковать мой сайт?");
}else{ if(($x<=3 && $x>=-3) && ($y==-5 || $y==-4 || $y==-3 || $y==-2 || $y==-1 || $y==0 || $y==1 || $y==2 || $y==3) && ($R==1 || $R==1.5 || $R==2 || $R==2.5 || $R==3)){
    ;}
else{
    die("Зачем вы попытались атаковать мой сайт?");}
}

$random = rand(1, 10);
$text = "Нет данных";
if ((($x>=0 && $x<$R)&&($y<=0 && $y>-$R)) || (($x<=0 && $y<=0) && ((-$x - $y)<$R)) || (($x>=0 && $y>=0) && (($x**2 + $y**2)<$R**2))){
    if ($random < 5){
        $gr=60;
        $re=60;
        $bl=60;
        $text = "Не пробил!";}
    else{
        $gr=255;
        $re=0;
        $bl=0;
        $text="Есть пробитие!";
    }
}else{
    if ((($x<=$R & $y>=-$R)&($x>=0 & $y<=0)&(($x==$R) || ($y==-$R))) || (($x<=0 & $y<=0) & ((-$x - $y)==$R)) || (($x>=0 & $y>=0) & (($x**2 + $y**2)==$R**2))){
        $gr=150;
        $re=150;
        $bl=150;
        $text="Рикошет!";}
    else{
        $gr=0;
        $re=255;
        $bl=0;
        $text="Не попал!";

    }
}
$current_time = date('H:i:s');
$end_time = microtime(true); // Запомнить время после выполнения скрипта

$formattedNumber = round($end_time - $start_time, 9);
$execution_time = number_format($formattedNumber, 9, '.', '');
echo "<table> <tr> ";

echo "<td style=\"width: 500px\"><span style=\"color: white;\">x=$x <br/>y=$y <br/>R=$R <br/>Время столкновения снаряда с объектом: $current_time <br/>Время полета снаряда: $execution_time секунд <br/>Результат: <b style=\"color: rgba($re, $gr, $bl, 1); font-size: 18px\">$text</b></span></td>";

echo "<td><img src=\"graphics.php?x=$x&y=$y&R=$R&gr=$gr&re=$re&bl=$bl\" alt=\"no image : (\" style=\"float: right\"/></td>";
echo "</tr></table>";
if (!isset($_SESSION["previous"])){
    $_SESSION["previous"]="";
}

$_SESSION["previous"].="<!--exp--><tr><td>".$x."</td><td> ".$y."</td><td> ".$R."</td><td>".$current_time."</td><td> ".$execution_time."</td><td> ".$text."</td></tr>";
$exp = explode("<!--exp-->", $_SESSION["previous"]);

$sliceexp=array_slice($exp, -10, 10);
//var_dump($revexp);
$_SESSION["previous"]="";
foreach ($sliceexp as $i){
    $_SESSION["previous"].="<!--exp-->".$i;
}
?>

<a href="#section2">Go to up</a>

</body>

</html>
