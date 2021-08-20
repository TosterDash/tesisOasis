<?php

namespace App\Http\Livewire;

use App\Models\cart;
use App\Models\menu;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class ShowMenu extends Component
{
    public $cantidad = array();
    public $notas = array();
    

    

    public function render()
    {
        $menu = menu::all();
        
    
        
        return view('livewire.show-menu',compact('menu'));
    }

    public function storeCart($id)
    {
        if($this->cantidad[$id]== 0 || $this->cantidad[$id]==null || $this->cantidad[$id]== '0'){
            
        }else{
            $idUser = Auth::user()->id;
            $cart = cart::create([
                'idUser' => $idUser,
                'idMenu' => $id,
                'cantidad' => $this->cantidad[$id],
                'nota' => $this->notas[$id],
            ]);
            $this->cantidad = 0;
            $this->notas = '';  
        }
    }
}
