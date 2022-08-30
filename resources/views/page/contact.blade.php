@extends('layouts.app');
@section('title', 'Contact Us');
@section('content');

    <div class="container ">
        <div class="col-md-6  mx-auto">
            <div class="card-shadow ">
                <div class="card-body mt-5">
                    <h3>Remplissez ce formulaire pour nous contacter !</h3>
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nom complet</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Téléphone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="content">Message</label>
                            <textarea rows="5" class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content') }}</textarea>
                            @error('content')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="text">ajouter votre ville</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                name="phone" value="{{ old('ville') }}">
                            @error('ville')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>


                        <div class="form-group mb-4">
                            <button class="btn btn-primary w-100">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
