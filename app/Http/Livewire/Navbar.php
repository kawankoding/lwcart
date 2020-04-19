<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class Navbar extends Component
{
    public $cartTotal = 0;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }

    public function render()
    {
        return view('livewire.navbar');
    }

    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
}
