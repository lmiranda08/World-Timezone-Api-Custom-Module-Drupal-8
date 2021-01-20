<?php

namespace Drupal\timezone\Controller;

class TimezoneController{
    
    # This function connect to world timezone api and shows a table with some Cities
    public function getTimezone(){
        # Get Data from API
        $urlCR = json_decode(file_get_contents("https://worldtimeapi.org/api/timezone/America/Costa_Rica"),true);
        $urlNY = json_decode(file_get_contents("https://worldtimeapi.org/api/timezone/America/New_York"),true);
        $urlBL = json_decode(file_get_contents("https://worldtimeapi.org/api/timezone/Europe/Belgrade"),true);

        # Select datetime values
        $cr = $urlCR['datetime'];
        $ny = $urlNY['datetime'];
        $bl = $urlBL['datetime'];
        
        # Headers of table
        $headers = [
            'CR' => t('Costa Rica'),
            'NY' => t('New York'),
            'BL' => t('Belgrade'),
        ];

        # Rows of table
        $rows = array();
        $rows[0] = [
            'CR' => $cr,
            'NY' => $ny,
            'BL' => $bl,
        ];

        # Fill table
        $form['table'] = [
            '#type' => 'table',
            '#header' => $headers,
            '#rows' => $rows
            ];

        return $form;
    }
}
