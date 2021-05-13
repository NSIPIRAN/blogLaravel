@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear artículo</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                  <form 
                    action="{{ route('posts.store') }}" 
                    method="POST"
                    enctype="multipart/form-date">
                    <div class="mb-3">
                      <label class="form-label">Título *</label>
                      <input type="text" class="form-control" name="title" placeholder="Título" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Image</label>
                      <input type="file"  name="file" >
                    </div>
                    <div class="mb-3">
                     <label class="form-label">Contenido *</label>
                     <textarea class="form-control" name="body"  rows="6" required></textarea> 
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Contenido embebido</label>
                      <textarea class="form-control" name="iframe" ></textarea> 
                    </div>
                    <div class="form-group">
                      @csrf
                      <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                    </div>

                    
                  </form>        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
