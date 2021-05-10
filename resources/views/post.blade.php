<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crud Post') }}
        </h2>
        
    </x-slot>
    <?php 

    ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                <table class="table table-bordered table-hover">
                    <br>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th colspan='2'>Aksi</th>

                        </tr>
                    </thead>
                        <tbody>
                            @foreach($data as $val)
                            <tr>
                                <td>{{ $val->id }}</td>
                                <td width="15%">{{ $val->title }}</td>
                                <td width="70%">{{ substr($val->description, 0, 130) . '...' }}</td>
                                <td>
                                    <a href="update.php?id_anggota=" class="btn btn-success btn-sm" role="button">Update</a>
                                    <a href="" class="btn btn-danger btn-sm" role="button">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <a href="/blog/input" class="btn btn-primary" role="button">Input Data</a>
                <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
