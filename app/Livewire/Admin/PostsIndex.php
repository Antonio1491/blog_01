<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\Post;

use Livewire\WithPagination;

class PostsIndex extends Component
{

    //Indicamos uso de la páginación
    use WithPagination;

    // Indicamos los estilos que que debe tomar ya que por default intenta usar taildwil
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //auth()->user()->id cone sto recuperamos el id del usuario actual
        //traer todos los posts que le pertenecen al usuario actual en orden asc
        $posts = Post::where('user_id', auth()->user()->id)
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->latest('id')
                ->paginate();

        return view('livewire.admin.posts-index', compact('posts'));
    }
}
