<?php

namespace App\View\Components;

use Illuminate\View\Component;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Menu extends Component
{
    public $nama;
    public function __construct($active)
    {

        $this->active=$active;
    }


    public function render()
    {

        return view('components.menu',['active'=>$this->active]);
    }
    public function list(){
        return[
            [
                'label'=> 'Dashboard'
            ],
            [
                'label'=> 'Movie'
            ],
            [
                'label'=> 'Theaters'
            ],
            [
                'label'=> 'Tickets'
            ],
            [
                'label'=> 'Users'
            ]
            ];
    }
public function isActive($label){
    return $label == $this->active;
}
}
