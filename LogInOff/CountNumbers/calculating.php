<?php 
session_start(['cookie_lifetime' => 86400, ]);
$a=(float)$_POST['number1'];
$b=(float)$_POST['number2'];

switch ($_POST['operation'])
{
    case 'plus': $r=plus($a,$b); break;
    case 'minus': $r=minus($a,$b); break;
    case 'multiplication': $r=multiplication($a,$b); break;
    case 'division': $r=division($a,$b); break;
    default: $_SESSION['result']='Выбрана некорректная операция';
}
if(isset($r))
    $_SESSION['result']=$r;
header("Location: {$_SERVER['HTTP_REFERER']}");

function plus($a,$b)
{
    $r=$a+$b;
    return $r;
}
function minus($a,$b)
{
    $r=$a-$b;
    return $r;
}
function multiplication($a,$b)
{
    $r=$a*$b;
    return $r;
}
function division($a,$b)
{
    if($b)
        $r=$a/$b;
    else
        $r='Ошибка - нельзя делить на ноль';
    return $r;
}
?>
