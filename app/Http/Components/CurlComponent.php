<?php

namespace App\Http\Components;

class CurlComponent {
  /**
   * Execution of every call to the REST API's
   * @method execute
   * @param  string  $url       Endpoint URL
   * @param  string  $method    HTTP Method
   * @param  object  $params    POST Params
   * @return object             Obtained response as JSON
   */
  public function execute($url,$method="GET",$params=null){
    $curl = curl_init();
    if($method=="GET"){
      curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_TIMEOUT => 30000,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json',
              "User-Agent: github-api-rest",
              "Accept: application/vnd.github.cloak-preview"
          ),
      ));
    }
    else if($method=="POST"){
      curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30000,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($params),
          CURLOPT_HTTPHEADER => array(
          	// Set here requred headers
              "Accept: */*",
              "accept-language: en-EN,en;q=0.8",
              "User-Agent: github-api-rest",
              "content-type: application/json"
          ),
      ));
    }
    else{
      curl_close($curl);
      return "Not an allowed method";
    }
    $response = curl_exec($curl);

    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return json_decode($response);
    }
  }
}

?>
