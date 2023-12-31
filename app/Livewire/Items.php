<?php

namespace App\Livewire;


use Livewire\Component;
 use App\Models\Item;
use Livewire\WithPagination;




class Items extends Component
{
    use WithPagination;
    public function render()
    {


        $items = Item::where('user_id', auth()->user()->id)
            ->paginate(10);
            return view('livewire.items', [
                'items' => $items
            ]);
    }
}
