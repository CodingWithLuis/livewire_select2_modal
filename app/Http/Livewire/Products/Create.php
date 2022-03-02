<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $price;
    public $categories = [];
    public $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    protected $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required|integer',
    ];

    public function submit()
    {
        $data = $this->validate();

        Product::create($data);

        $this->reset();

        $this->emitUp('refreshTable');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
