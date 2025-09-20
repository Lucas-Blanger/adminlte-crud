@extends('layouts.default')
@section('page-title', 'Adicionar Usuários')
@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" >
    @error('name')
        <div class="invalid-feedback"> {{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" >
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
  <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Adicionar</button>
</form>
@endsection