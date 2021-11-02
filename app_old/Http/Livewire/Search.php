<?php

namespace App\Http\Livewire;
use Illuminate\Contracts\Database\Eloquent;
use Livewire\Component;
use App\Models;
use TCG\Voyager\Traits\Translatable;

class Search extends Component
{
    protected $translatable = ['title','excerpt', 'body', 'meta_description'];
    public $searchTerm='';
    public function render()
    {
        $result =[];
        if(strlen($this->searchTerm) > 1):
        $result = Models\News::where('title', 'like', '%' . $this->searchTerm . '%')->get();
        endif;
        return view('livewire.search',['result' => $result]);
    }
}


