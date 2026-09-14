<?php
class ApiService {
    public function getData($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        if ($response === false) {
            return null;
        }
        curl_close($curl);
        return json_decode($response, true);
    }
}