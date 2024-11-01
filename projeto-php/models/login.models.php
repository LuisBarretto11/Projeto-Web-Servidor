<?php

    $email = 'adm@exemplo.com';
    $senha = 'adm1';

    function autenticar($inputEmail, $inputSenha){
        global $email, $senha;
        return $inputEmail === $email && $inputSenha === $senha;
    }

?>