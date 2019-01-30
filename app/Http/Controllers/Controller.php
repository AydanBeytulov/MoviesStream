<?php

namespace App\Http\Controllers;


use App\Settings;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $settingsHolder ;

    public function getSettings(){
        $return = array();

        if(empty($this->settingsHolder)){
            $getSettings = Settings::all();
            $getSettingsArray = array();

            foreach($getSettings as $setting){
                $getSettingsArray[$setting->name] = $setting->value;
            }

            $return = $getSettingsArray ;
            $this->settingsHolder = $getSettingsArray ;
        }else{
            $return = $this->settingsHolder ;
        }

        return $return;
    }
}
