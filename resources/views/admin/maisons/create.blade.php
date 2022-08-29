@extends('admin.layouts.app')
@section('title', 'Ajouter une maison')
@section('content')
<div class="col-md-6 offset-md-3">
    <div class="card mt-5 shadow">
        <div class="card-body">
            <form action="{{ route('maisons.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Nom de la maison</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description"> Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                    @error('description')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="equipment"> Equipment</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="equipment" name="equipment">
                    @error('equipment')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="price"> le prix</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                    @error('price')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="address"> address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                    @error('address')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="gallery"> gallery</label>
                    <input type="file" class="form-control @error('gallery') is-invalid @enderror" id="gallery" name="gallery">
                    @error('gallery')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category_id">Categorie maison</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ville_id">Categorie villes</label>
                    <select name="ville_id" id="ville_id" class="form-control">
                        @foreach ($villes as $v)
                            <option value="{{ $v->id }}">{{ $v->name }}</option>
                        @endforeach
                    </select>
                    @error('ville_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>




                <div class="form-group mb-4">
                    <button class="btn btn-primary w-100">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
