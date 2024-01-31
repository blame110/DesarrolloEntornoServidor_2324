@extends('alumnos.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Añadir Alumno
                </div>
                <div class="float-end">
                    <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-sm">&larr; Atras</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('alumnos.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">Nombre</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="apellidos" class="col-md-4 col-form-label text-md-end text-start">Apellidos</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" value="{{ old('apellidos') }}">
                            @if ($errors->has('apellidos'))
                                <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="edad" class="col-md-4 col-form-label text-md-end text-start">Edad</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" value="{{ old('edad') }}">
                            @if ($errors->has('edad'))
                                <span class="text-danger">{{ $errors->first('edad') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nota" class="col-md-4 col-form-label text-md-end text-start">Nota</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('nota') is-invalid @enderror" id="nota" name="nota" value="{{ old('nota') }}">
                            @if ($errors->has('nota'))
                                <span class="text-danger">{{ $errors->first('nota') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-end text-start">Descripcion</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                            @if ($errors->has('descripcion'))
                                <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Añadir Alumno">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
