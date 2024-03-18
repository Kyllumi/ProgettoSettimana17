<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aggiunta attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('activities.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo attività</label>
                            <input type="text" class="form-control rounded" name="title" value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Descrizione</label>
                            <input type="text" class="form-control rounded" name="description" value="{{ old('description') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="project_id" class="form-label">ID progetto</label>
                            <input type="number" class="form-control rounded" min='{{$projects->first()->id}}' max='{{$projects->last()->id}}' name="project_id" value="{{ old('project_id') }}" required>
                        </div>
                        <button type="submit" class="btn text-black my-3" style="border: 2px solid #F8A681; width: 100%" onmouseover="this.style.backgroundColor='#F8A681';" onmouseout="this.style.backgroundColor='#FFFFFF'; ">Aggiungi attività</button>
                    </form>
                    
                    <hr>

                    <a class="btn text-black mt-3" style="border: 2px solid #818CF8; width: 100%" href="/projects" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Torna indietro</a>

                 </div>
            </div>
        </div>
</x-app-layout>
