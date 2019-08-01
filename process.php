<?php
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $moveObj = $_POST['val'];
        echo ($moveObj);
        $file = fopen("move.json", "w");
        fwrite($file, $moveObj);
        fclose($file);
    }
    elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
        $rfile = fopen("move.json", "r");
        echo fread($rfile,filesize("move.json"));
        $parsedJson = json_decode(fread($rfile,filesize("move.json")), true);
        if($parsedJson[0]["rainbow"] != "0"){
            $parsedJson[0]["rainbow"] == "0";
        }
        elseif($parsedJson[0]["donut"] != "0"){
            $parsedJson[0]["donut"] == "0";
        }
        $newJson = json_encode($parsedJson);
        file_put_contents('move.json', $newJson); 
        fclose($rfile);
    }
    
?>