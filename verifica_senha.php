<?php
$senha = _POST["senha"];
    if (!preg_match('/[a-z]/', $senha)){
        ?><script> alert("Senha deve conter ao menos uma letra minúscula!");</scritp><?php
    } elseif !(preg_match('/[A-Z]/', $senha)){
        ?><script> alert("Senha deve conter ao menos uma letra maiúscula!");</scritp><?php
    } elseif !(preg_match('/[0-9]/', $senha)){
        ?><script> alert("Senha deve conter ao menos um número!");</scritp><?php
    } elseif !(preg_match('/^[\w$@]{6,}$/', $senha)){
        ?><script> alert("Senha deve conter 6 ou mais caracteres!");</scritp><?php
    }
?>