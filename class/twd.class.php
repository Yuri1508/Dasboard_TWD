<?php

    class twd {
        public function getData($dd,$df){
            $ch = curl_init("http://api.aremiti.net:31415/rest-api/aremiti/horaires?date_debut=". $dd ."&date_fin=". $df);

            // curl_setopt($ch, CURLOPT_HEADER, 0);

            $data = curl_exec($ch);
            

            return json_encode($data);

        }
    }