<x-app-layout>

  <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="uppercase text-center text-4xl font-bold">Etiqueta: {{$tag->name}}</h1>
  
    @foreach ($posts as $post)

    {{-- enviando variable en un componente --}}
      <x-card-post :post="$post"/>
      
    @endforeach

    <div class="mt-4">
      {{$posts->links()}}
    </div>

  </div>

</x-app-layout>