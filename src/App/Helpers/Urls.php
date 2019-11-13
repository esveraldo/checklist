<?php

namespace App\Helpers;

class Urls
{

public function urls($filename)
{
    if(file_exists($filename. '.php')){
      include_once $filename . '.php';
    }else{
      include_once '404.php';
    }
}

}
