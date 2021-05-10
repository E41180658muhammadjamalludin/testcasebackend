<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Post') }}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-sm">
                <br>
                <form action="/blog" method="post">
                    <div class="form-group">
                        <label>Judul:</label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" required />
                    </div>
                    <div class="form-group">
                        <label>Deskirpsi:</label>
                        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Deskripsi" required></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Input Data</button>
                    {{ csrf_field() }}
                </form>
                <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


