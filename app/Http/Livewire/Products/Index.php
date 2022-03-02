<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['refreshTable' => '$refresh'];

    public function render()
    {
        return view(
            'livewire.products.index',
            [
                'products' => Product::with('category')->get()
            ]
        );
    }
}
