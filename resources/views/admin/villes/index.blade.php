@extends('admin.layouts.app')
@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Villes</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ville</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">les villes au maroc</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">n</th>
                                            <th class="wd-15p border-bottom-0">name</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($villes as $key => $ville)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $ville->name }}</td>

                                                <td>{{ $ville->created_at->diffForHumans() }}</td>
                                                <td>{{ $ville->updated_at->diffForHumans() }}</td>
                                                <td>
                                                <form action="{{ route('villes.destroy', $ville->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                        <a class="btn btn-secondary text-white btn-success" href="{{ route('villes.edit', encrypt($ville->id)) }}">modifier</a>
                                                    </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
