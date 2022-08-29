@extends('admin.layouts.app')
@section('title', 'Modifier une maison')
@section('content')
 <br>
 <br>
 <br>
 <br>

<div class="col-md-6 offset-md-3">
    <div class="card mt-5 shadow">
        <div class="card-body">
            <form action="{{ route('maisons.update', $maisons->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title">Nom de la maison</label>
                    <input type="text" value="{{ $maisons->title}}" class="form-control @error('title') is-invalid @enderror" id="title" name="name">
                    @error('title')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category_id">categories maisons  </label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories  as $a)
                            <option value="{{ $a->id}}">{{ $a->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title">description</label>
                    <textarea  value="{{ $maisons->description}}" class="form-control @error('description') is-invalid @enderror" id="description" name="description"> </textarea>
                    @error('description')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="title">equipment</label>
                    <input type="text" value="{{ $maisons->equipment}}" class="form-control @error('equipment') is-invalid @enderror" id="equipment" name="equipment">
                    @error('equipment')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="users_id">categories users</label>
                    <select name="users_id" id="users_id" class="form-control">
                        @foreach ($users as $s)
                            <option value="{{ $s->id }}">{{ $s->name}}</option>
                        @endforeach
                    </select>
                    @error('users_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="price">('price');</label>
                    <input type="text" value="{{ $maisons->price}}" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                    @error('price')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="address">('address');</label>
                    <input type="text" value="{{ $maisons->address}}" class="form-control @error('address') is-invalid @enderror" id="address" name="address">
                    @error('address')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="villes_id">categories villes</label>
                    <select name="villes_id" id="villes_id" class="form-control">
                        @foreach ($villes as $m)
                            <option value="{{ $m->id }}">{{ $m->name}}</option>
                        @endforeach
                    </select>
                    @error('villes')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="gallery">('gallery');</label>
                    <input type="text" value="{{ $maisons->gallery}}" class="form-control @error('gallery') is-invalid @enderror" id="gallery" name="gallery">
                    @error('gallery')
                        <strong class="text-danger">{{ $message }}</strong>
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
