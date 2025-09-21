@extends('layouts.default')
@section('page-title', 'Editar Usuários')
@section('content')
    @session('status')
     <div class="alert alert-success"> {{ $value }}</div>
    @endsession
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" value="{{ old('name') ?? $user->name }}" name="name" class="form-control @error('name') is-invalid @enderror" >
    @error('name')
        <div class="invalid-feedback"> {{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="{{ old('email') ?? $user->email }}" name="email" class="form-control @error('email') is-invalid @enderror" >
    @error('name')
        <div class="invalid-feedback"> {{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Senha</label>
    <input type="password" " name="password" class="form-control @error('password') is-invalid @enderror" >
    @error('name')
        <div class="invalid-feedback"> {{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Editar</button>
</form>
@endsection