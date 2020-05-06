<?php namespace LuisMayta\Web\Components;

use Cms\Classes\ComponentBase;
use LuisMayta\Web\Models\Sitio;
use LuisMayta\Web\Models\Banners;

class Midata extends ComponentBase
{
     public function componentDetails()
    {
        return [
            'name' => 'luismayta.web::lang.midata.name',
            'description' => 'luismayta.web::lang.midata.description'
        ];
    }
    public function onRun()
    {
        $sitio = Sitio::first();
        $this->page['sitio']  = $sitio;
        $banners = Banners::orderBy('orden','asc')->take(3)->get();
        $this->page['banners']  = $banners;
    }
}
