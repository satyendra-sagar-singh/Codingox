<?php
    //HTML Tag Helper
    function img($arg) {
        $prop = "";
        if (array_key_first($arg) != "0") {
            foreach($arg as $key => $value) {
                if ($key == "src") {
                    $prop.= $key.'='.'"'.APP_URL.'/'.APP_PATH.$value.'" ';
                }else {
                    $prop.= $key.'='.'"'.$value.'" ';	
                }	
            }	
            return '<img '.$prop.' />'."\n";
        }else {
            switch(count($arg)) {
                case 0 : return '<img src="" alt="" />'."\n";
                case 1 : return '<img src="'.APP_URL.'/'.APP_PATH.$arg[0].'" alt="" />'."\n";
                case 2 : return '<img src="'.APP_URL.'/'.APP_PATH.$arg[0].'" class="'.$arg[1].'" />'."\n";
                case 3 : return '<img src="'.APP_URL.'/'.APP_PATH.$arg[0].'" class="'.$arg[1].'" id="'.$arg[2].'" />'."\n";
            }
        }
    }
    
    function link_tag($arg) {
        $prop = "";
        if (array_key_first($arg) != "0") {
            foreach($arg as $key => $value) {
                if ($key == "href") {
                    $prop.= $key.'='.'"'.APP_URL.'/'.APP_PATH.$value.'" ';
                }else {
                    $prop.= $key.'='.'"'.$value.'" ';	
                }	
            }	
            return '<link '.$prop.' />'."\n";
        }else {
            switch(count($arg)) {
                case 0 : return '<link href="" rel="stylesheet" type="text/css" />'."\n";
                case 1 : return '<link href="'.APP_URL.'/'.APP_PATH.$arg[0].'" rel="stylesheet" type="text/css" />'."\n";
                case 2 : return '<link href="'.APP_URL.'/'.APP_PATH.$arg[0].'" rel="'.$arg[1].'" type="image/ico" />'."\n";
            }
        }
    }
    
    function script_tag($arg) {
        $prop = "";
        if (array_key_first($arg) != "0") {
            foreach($arg as $key => $value) {
                if ($key == "src") {
                    $prop.= $key.'='.'"'.APP_URL.'/'.APP_PATH.$value.'" ';
                }else {
                    $prop.= $key.'='.'"'.$value.'" ';	
                }	
            }	
            return '<script '.$prop.' /></script>'."\n";
        }else {
            return '<script src="'.APP_URL.'/'.APP_PATH.$arg[0].'"></script>'."\n";
        }
    }

    function div_open($arg) {
        $prop = "";
        if (array_key_first($arg) != "0") {
            foreach($arg as $key => $value) {
                $prop.= $key.'='.'"'.$value.'" ';		
            }	
            return '<div '.$prop.' >'."\n";
        }else {
            switch(count($arg)) {
                case 0 : return '<div>'."\n";
                case 1 : return '<div class="'.$arg[0].'">'."\n";
                case 2 : return '<div class="'.$arg[0].'" id="'.$arg[1].'">'."\n";
            }
        }
    }  
    
    function div_close() {
        return '</div>'."\n";
    }

    function html_open() {
        return '<!DOCTYPE html>'."\n".
        '<html lang="en">'."\n".
        '<head>'."\n".
        '<meta charset="UTF-8">'."\n".
        '<meta http-equiv="X-UA-Compatible" content="IE=edge">'."\n".
        '<meta name="viewport" content="width=device-width, initial-scale=1.0">'."\n";
    }

    function html_close() {
        return '</html>'."\n";
    }

    function bootstrap() {
        return '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">'."\n".
        '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">'."\n".
        '<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>'."\n".
        '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>'."\n";
    }
?>