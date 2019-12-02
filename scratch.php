<?php

    $payload='["JobNumber"    => "999226",
                    "CustOrderNum" => "123",
                    "Reg"          => "AB12CDE",
                    "Progress"     => "SENT-MIV",
                    "DueDate"      => null]';
        Log::info($payload);
        $url = "http://157.245.35.154";
        $token="JB101SHBDIKJBD";
        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json',
        ];
        $client = new \GuzzleHttp\Client(['base_uri' => $url]);
        $response = $client->request(
            'POST',
            'transportUpdate',
            [
                'headers' => $headers,
                'json'=>[
                    "JobNumber"    => "999226",
                    "CustOrderNum" => "123",
                    "Reg"          => "AB12CDE",
                    "Progress"     => "SENT-MIV",
                    "DueDate"      => null
                ],
            ]
        );
        $res = (string) $response->getBody();
        Log::info($res);


       TO DO fix Form fields Progress with  select field
       cancel/Abort -select or radio -yes/no

       SUCCESS/Error parse from response and redirect with message
       Try Catch block to handle exceptions
       publish to GIT
https://nitschinger.at/Handling-JSON-like-a-boss-in-PHP/
json_decode($string, true);  ->returns assoc array
json_decode($string );  ->returns std object

