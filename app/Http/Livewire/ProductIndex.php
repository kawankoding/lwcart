<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.product-index', [
            'products' => $this->search === null ? Product::latest()->paginate(12) : Product::where('name', 'like', '%' . $this->search . '%')->paginate(12),
        ]);
    }

    public function addToCart(int $productId)
    {
        Cart::add(Product::where('id', $productId)->first());

        $this->emit('productAdded');
    }
}
