<?php
$login_cookie = $_COOKIE['login'];
if(isset($login_cookie)){
    echo"Bem-Vindo,$login_cookie <br>";
    echo"Essas informações <font color='red'>PODEM</font>
    ser acessadas por voce";
}else{
    echo"Bem=Vindo,convidado <br>";
    echo"Essas informaçoes <font clor='red'>NAO PODEM </font> ser acessadas por voce";
    echo"<br><a href='login.html'>Faça Login</a> Para ler o conteudo";
}
?>