<?php
/**
 * Aeure \ Curl Wrap
 * 
 * The Curl Wrap is the entry point to all services and actions.
 *
 * @author    Aeure developers <Pharaoh>
 */

# Enter your domain name , aeure email and aeure api key
define("AEURE_DOMAIN", 'fr3on');  # Example : define("domain","fr3on");

function curl_wrap($entity, $data, $method, $content_type) {
    if ($content_type == NULL) {
        $content_type = "application/json";
    }
    $aeure_url = "http://" . AEURE_DOMAIN . ".aeure.com/api/" . $entity;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 100);
    curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, true);
    switch ($method) {
        case "POST":
            $url = $aeure_url;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            break;
        case "GET":
            $url = $aeure_url;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            break;
        case "PUT":
            $url = $aeure_url;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            break;
        case "DELETE":
            $url = $aeure_url;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            break;
        default:
            break;
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-type : $content_type;", 'Accept : application/json'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}