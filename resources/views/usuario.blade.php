@extends('menu')

@section('content')
    <div class="profile">
        <h1>Perfil del Usuario</h1>
        
        @if(Auth::check())
            <img src="{{ asset('images/perfil.jpg') }}" alt="Foto del Usuario" style="width:150px; height:150px; border-radius:50%;">
            <h2>Nombre: {{ Auth::user()->name }}</h2>
            <p>Email: {{ Auth::user()->email }}</p>

            <a href="{{ route(  'usuario.editar') }}">
                <button>✏️ Editar Perfil</button>
            </a>
            <a href="{{ route('home') }}">
                <button>⬅️ Regresar</button>
            </a>
        @else
            <p>No estás autenticado. Por favor, inicia sesión.</p>
        @endif
    </div>
@endsection
