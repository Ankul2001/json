<?php


    class link{
        function createdata($name,$email,$contact,$pic){
            $json=file_get_contents("jdata.json");     //file ko access krne ke liye
            $dataa=json_decode($json,true);             //string json ko array json me badalna
            $userid="usr".rand(1000,9999);

            $dataa[]=array(
                "userid"=>$userid,
                "name"=>$name,
                "email"=>$email,
                "contact"=>$contact,
                "photo"=>$pic

            );
            $json=json_encode($dataa,JSON_PRETTY_PRINT);
            file_put_contents("jdata.json",$json);
            return true;
        }

        function deletedata($removeid){
            $json=file_get_contents("jdata.json");     //file ko access krne ke liye
            $dataa=json_decode($json,true);
            $i=0;
            $newdata=[''];
            foreach($dataa as $row):
                if ($row==$removeid){
                    continue;
                }
                $dataa=$newdata[$i];
                $i++;
            endforeach;
            $json=json_encode($newdata,JSON_PRETTY_PRINT);
            file_put_contents("jdata.json",$json);
            return true;

        }
    }

    $object= new link();

?>