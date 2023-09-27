@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <a href="{{ route('categories.create') }}" type="button" class="mt-4 mb-4 btn btn-primary">
            Inserir Categories
        </a>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <th scope="row">#</th>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->title }}</td>
                                    <td>{{ $categorie->slug }}</td>
                                    <td>
                                        <a title="Detalhes do Categories" href="{{ route('categories.show', $categorie->id) }}">
                                            <i class="fas fa-eye text-primary mr-1"></i>
                                        </a>
                                        <a href="{{ route('categories.edit', $categorie->id) }}"><i
                                                class="fas fa-edit text-info mr-1"></i>
                                        </a>
                                        <a href="{{ route('categories.delete', $categorie->id) }}">
                                            <i class="fas fa-trash text-danger mr-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </section>
            </div>
        </div>
        <div class="w-100">
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTable').dataTable({
                    "ordering": false
                })

            });
        </script>
    @endsection
