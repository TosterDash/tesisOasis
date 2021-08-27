<?php

namespace App\Http\Livewire;

use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowCart extends Component
{
    public $cartNotifications = 0;
    protected $listeners = ['renderShowCart' => 'render'];
    public function render()
    {
        $this->cartNotifications = cart::where('idUser',Auth::user()->id)->count();
        return view('livewire.show-cart');
    }
}
