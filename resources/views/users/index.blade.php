@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
@endsection

@section('content')
  @session('status')
    <div class="alert alert-success"> {{ $value }}</div>
  @endsession
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-flex gap-2">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">
                    Editar
                </a>

                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection