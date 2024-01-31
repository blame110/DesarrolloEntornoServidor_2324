@extends('alumnos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Alumnado</div>
            <div class="card-body">
                <a href="{{ route('alumnos.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Nuevo Alumno</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Descripcion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                        <tr>
                            <th scope="row">{{ $alumno->id }}</th>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellidos }}</td>
                            <td>{{ $alumno->edad }}</td>
                            <td>{{ $alumno->nota }}</td>
                            <td>{{ $alumno->descripcion }}</td>
                            <td>
                                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Ver</a>

                                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres Borrar este producto?');"><i class="bi bi-trash"></i> Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                  {{ $alumnos->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection
