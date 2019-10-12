<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=emlak;charset=utf8",'root','');
    //echo "baglantı başarılı";
    $db->query("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>