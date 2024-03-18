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

                    <div>
                        <a class="btn text-black mb-3" href="{{ route('projects.create') }}" style="border: 2px solid #818CF8; width: 100%" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Aggiungi un progetto</a>
                    </div>

                    @if($projects->count() > 0)
                    <ul class="list-group list-group-flush">
                        @foreach($projects as $project)
                        <li class="list-group-item list-group-item-action rounded d-flex align-items-center justify-content-between">
                            <span class="ms-3">{{$project->name}}</span>
                            <div class="d-flex align-items-center">
                                <form method="POST" action="{{ route('projects.destroy', $project->id) }}" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn me-3 text-black float-end" style="border: 2px solid red;" onmouseover="this.style.backgroundColor='red';" onmouseout="this.style.backgroundColor='#FFFFFF';">Elimina</button>
                                </form>
                                <a class="btn me-3 text-black" style="border: 2px solid #818CF8;" href="{{ route('projects.show', $project->id) }}" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Dettagli</i></a>
                            </div>
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
