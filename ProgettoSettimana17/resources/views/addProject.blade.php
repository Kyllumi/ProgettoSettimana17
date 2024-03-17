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

                    <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo progetto</label>
                            <input type="text" class="form-control rounded" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Descrizione</label>
                            <input type="text" class="form-control rounded" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Linguaggio</label>
                            <input type="text" class="form-control rounded" name="language">
                        </div>
                        <button type="submit" class="btn text-black mt-3" style="border: 2px solid #818CF8; width: 100%" onmouseover="this.style.backgroundColor='#818CF8';" onmouseout="this.style.backgroundColor='#FFFFFF';">Add Post</button>
                    </form>
                    
                 </div>
            </div>
        </div>
</x-app-layout>
