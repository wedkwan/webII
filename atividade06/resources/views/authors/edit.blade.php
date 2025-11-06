@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Autor</h1>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$author->name ) }}" required>
            <label for="email" class="form-label">Email </label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email', $author->email)}}" required>
            <label for="birth_date" class="form-label">Data de nascimento</label>
            <input type="date" class="form-controll" id="birth_date" name="birth_date" value="{{ old('birth_date', $author->birth_date) }}" required> 
            @error('email')
                <div class="invalid-feedback">s
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Atualizar
        </button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </form>
</div>
@endsection