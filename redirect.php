<?php    
    $client_id = 'TODO';
    $client_secret = 'TODO';
    
    $redirect_uri = 'TODO';
    
    if(isset($_POST['code'])){
        
        // $response = http('https://appleid.apple.com/auth/token', [
        //                  'grant_type' => 'authorization_code',
        //                  'code' => $_POST['code'],
        //                  'redirect_uri' => $redirect_uri,
        //                  'client_id' => $client_id,
        //                  'client_secret' => $client_secret,
        //                  ]);
        
        // if(!isset($response->access_token)) {
        //     echo '문제 발생! 다시 시도해주세요!!';
        //     header("LOCATION: ?status=fail");
        //     die();
        // }

        // $claims = explode('.', $response->id_token)[1];
        // $claims = json_decode(base64_decode($claims));

        $authCode = $_POST['code'];

        header("LOCATION: ?status=success&code={$authCode}");
    }else{
        echo '문제 발생! 다시 시도해주세요!';
        header("LOCATION: fail");
        die();
    }
    
    // function http($url, $params=false) {
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     if($params)
    //         curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, [
    //                 'Accept: application/json',
    //                 'User-Agent: curl', # Apple requires a user agent header at the token endpoint
    //                 ]);
    //     $response = curl_exec($ch);
    //     return json_decode($response);
    // }
    
    
?>