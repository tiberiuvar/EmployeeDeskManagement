@extends('layouts.main')


@section('content')

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Birouri</h1>
 </div>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editeaza Birou') }}
                <a href="{{ route('birouris.index') }}" class="float-right">Inapoi</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('birouris.update', $birouri->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="Denumire_birouri" class="col-md-4 col-form-label text-md-right">{{ __('Denumire Birou') }}</label>

                            <div class="col-md-6">
                                <input id="Denumire_birouri" type="text" class="form-control @error('name') is-invalid @enderror" name="Denumire_birouri" value="{{ old('Denumire_birouri', $birouri->Denumire_birouri) }}" required>

                                @error('Denumire_birouri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Salveaza') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="m-2 p-2">
                    <form method="POST" action="{{ route('birouris.destroy', $birouri->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Sterge Birou</button>
                    </form>
                </div>
        </div>
    </div>
</div>

 @endsection 