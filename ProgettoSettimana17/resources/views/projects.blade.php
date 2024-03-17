<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Progetti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($projects->count() > 0)
                      <ul class="list-group list-group-flush">
                           @foreach($projects as $project)
                           <li class="list-group-item list-group-item-action rounded">
                                  <span class="ms-3">{{$project->name}}</span>
                                  <a class="btn me-3 text-black float-end" style="border: 2px solid #818CF8;" href="projects/{{$project->id}}">Dettagli</i></a>
                           </li>
                           @endforeach
                      </ul>
                      @else
                          <p class="text-center my-4">Non sono presenti progetti!</p>
                      @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
