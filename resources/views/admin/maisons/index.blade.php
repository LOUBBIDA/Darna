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
                                            <th class="wd-15p border-bottom-0">Category_id</th>
                                            <th class="wd-15p border-bottom-0">Description</th>
                                            <th class="wd-15p border-bottom-0">Equipment</th>
                                            <th class="wd-15p border-bottom-0">user_id</th>
                                            <th class="wd-15p border-bottom-0">Address</th>
                                            <th class="wd-15p border-bottom-0">Ville_id</th>
                                            <th class="wd-15p border-bottom-0">Gallery</th>
                                            <th class="wd-15p border-bottom-0">created_at</th>
                                            <th class="wd-15p border-bottom-0">updated_at</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($maison as $key => $maisons)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $maisons->title }}</td>
                                                <td>{{ $maisons->category_id}}</td>
                                                <td>{{ $maisons->description}}</td>
                                                <td>{{ $maisons->equipment }}</td>
                                                <td>{{ $maisons->user_id}}</td>
                                                <td>{{ $maisons->address}}</td>
                                                <td>{{ $maisons->ville_id}}</td>
                                                <td>{{ $maisons->gallery}}</td>

                                                <td>{{ $maisons->created_at->diffForHumans() }}</td>
                                                <td>{{ $maisons->updated_at->diffForHumans() }}</td>
                                                <td>
                                                    <form action="{{ route('maisons.destroy', $maisons->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                            <a class="btn btn-secondary text-white btn-success" href="{{ route('maisons.edit', encrypt($maisons->id)) }}">modifier</a>
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
