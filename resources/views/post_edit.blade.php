<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-sm">
                <br>
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required />

                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>

                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
                    </div>
                    <div class="form-group">
                        <label>No HP:</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required/>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
                </form>
                <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


