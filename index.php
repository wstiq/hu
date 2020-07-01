<?php
require_once ("connection.php");
if (isset($_REQUEST['stack']) && isset($_REQUEST['pos'])) {
    $totalblinds = $_REQUEST['totalblinds'];
    $pos = $_REQUEST['pos'];
    $heroblinds = $_REQUEST['heroblinds'];
    $oppblinds = $_REQUEST['oppblinds'];
    echo ($totalblinds .  $pos . $heroblinds . $oppblinds);
} else {
    include("index.html");
}
//создать коннекшн к бд
//создать бд? продумать столбцы, как хранить картинки в постгресе
//делать селект запрос, вставлять через реквест введенные данные(привет переменным четырем) и выводить пикчу
//select * where (heropos='pos' and herostack='heroblinds' and quantityofblinds='totalblinds')
//работаем с блинами
echo ('m');
$q = pg_query($con, "select * from poker1");
echo $q;
$qq = pg_fetch_assoc($q);
print_r($qq);
echo (pg_query($con, "select * from poker1"));
?>