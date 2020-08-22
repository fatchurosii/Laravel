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
                'label' =>   'Dashboard',
                'route' =>   'dashboard'
            ],
            [
                'label' =>   'Movie',
                'route' =>   'dashboard/movies'
            ],
            [
                'label' =>   'Theaters',
                'route' =>   'dashboard/theaters'
            ],
            [
                'label' =>   'Tickets',
                'route' =>   'dashboard/tickets'
            ],
            [
                'label' =>   'Users',
                'route' =>   'dashboard/users'
            ]
            ];
    }
public function isActive($label){
    return $label == $this->active;
}
}
