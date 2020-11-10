<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Admin\Products;
use App\Models\Admin\SubCategory;

class LoadMoreUserList extends Component
{
    public $perPage = 12;
    public $sub_cat;
    // public $products;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function loadMore()
    {
        $this->perPage = $this->perPage + 8;
    }

    public function mount($sub_cat)
    {
        $this->sub_cat = $sub_cat;
        // dd($this->sub_cat);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {


        // dd($this->sub_cat);
        // $this->slug = $sub_category->slug;
        // $products = Products::latest()->paginate($this->perPage);
        $products = Products::where('sub_category', $this->sub_cat)->paginate($this->perPage);
        // dd($products);
        // $this->emit('h_products');

        return view('livewire.load-more-user-list', ['products' => $products]);
    }
}
