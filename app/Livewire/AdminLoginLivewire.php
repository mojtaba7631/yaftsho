<?php

namespace App\Livewire;

use Livewire\Component;

class AdminLoginLivewire extends Component
{
    public function render()
    {
        return view('livewire.admin-login-livewire');
    }

    public  $title = 2 ;

    public function increment(){
        $this->title += 2 ;
    }
}
