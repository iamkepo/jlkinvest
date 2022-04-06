<?php

use App\Models\Activite;
use Illuminate\Support\Facades\Auth;

define("PAGEEDITFORM","edit");
define("PAGECREATEFORM","create");
define("PAGELIST","list");
function setMenuActive($route){
    if(request()->route()->getName() === $route){
        return "active-nav-link";
    }
    return "";
}

function lastIdActivities(){
   return Activite::latest()->first()->id;
}

function alterKeyJson($json, $oldKey, $newKey)
{
    $array = json_decode($json, true);

    foreach($array as &$value) {
        if (isset($value[$oldKey])) {
            $value[$newKey] = $value[$oldKey];
            unset($value[$oldKey]);
        }
    }

    return json_encode($array);
}
