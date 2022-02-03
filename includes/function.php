<?php
    function createToken(){
        $salt = random_bytes(15);
        $token = sha1(mt_rand(1,1000000) . $salt);
        return $token;
    }

    function checkedToken($formToken, $sessionToken = ''){

        $sessionToken = $sessionToken === false ? $_SESSION['token'] : $sessionToken;
        return(
            !isset($formToken)
            && !isset($_SESSION['token'])
            && !empty($formToken)
            && $formToken == $sessionToken
        );
    }
?>