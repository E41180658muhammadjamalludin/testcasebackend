<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                <table class="table table-bordered table-hover">
                    <br>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th colspan='2'>Aksi</th>

                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td>A</td>
                                <td>B</td>
                                <td>C</td>
                                <td>D</td>
                                <td>
                                    <a href="update.php?id_anggota=" class="btn btn-warning" role="button">Update</a>
                                    <a href="" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                </table>
                <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
                <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
