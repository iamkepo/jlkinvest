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
