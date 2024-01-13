<?php

use App\Models\section;
use App\Models\setting;

function get_setting($key){
    $data = setting::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else{
        return 'empty';
    }
}

function get_section($key){
    $data = section::where('types', $key)->first();
    if(isset($data)){
        return $data;
    } else{
        return 'empty';
    }
}

function get_section1($key){
    $data = section::where('title', $key)->first();
    if(isset($data)){
        return $data;
    } else{
        return 'empty';
    }
}
