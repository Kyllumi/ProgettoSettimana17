<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dettaglio attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="card border-0">
                        <div class="card-body">
                          <p class="my-1"><strong>Titolo attività: </strong> {{$activity->title}}</p>
                          <p class="my-1"><strong>Descrizione: </strong> {{$activity->description}}</p>
                          <p class="my-1"><strong>Data creazione: </strong> {{$activity->created_at}}</p>
                          <p class="my-1"><strong>Ultimo aggiornamento: </strong> {{$activity->updated_at}}</p>
                        </div>

                        <div class="card-footer bg-white">
                            <a class="btn text-black mt-3" style="border: 2px solid #818CF8; width: 100%" href="/projects/{{$activity->project_id}}">Torna indietro</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
