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
                'route' =>   'dashboard',
                'icon'  =>   'fas fa-tachometer-alt'
            ],
            [
                'label' =>   'Movie',
                'route' =>   'dashboard.movies',
                'icon'  =>   'fas fa-video'
            ],
            [
                'label' =>   'Theaters',
                'route' =>   'dashboard.theaters',
                'icon'  =>   'fas fa-university'
            ],
            [
                'label' =>   'Tickets',
                'route' =>   'dashboard.tickets',
                'icon'  =>   'fas fa-ticket-alt'
            ],
            [
                'label' =>   'Users',
                'route' =>   'dashboard.users',
                'icon'  =>   'fas fa-users'
            ]
            ];
    }
public function isActive($label){
    return $label == $this->active;
}
}
