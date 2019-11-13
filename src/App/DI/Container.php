<?php

namespace App\DI;

use App\Connections\Base;
use App\Helpers\Urls;
use App\Project\SelectClientsChecklist;
use App\Project\InsertClientsChecklist;

class Container {

    public static function url() {
        $url = new Urls();
        return $url;
    }

    public static function conn() {
        $conn = new Base();
        return $conn;
    }
    
    public static function getInsertClientsChecklist() {
        $insertClientsChecklist = new InsertClientsChecklist(self::conn());
        return $insertClientsChecklist;
    }

    public static function getSelectClientsChecklist() {
        $selClientsChecklist = new SelectClientsChecklist(self::conn());
        return $selClientsChecklist;
    }

}
