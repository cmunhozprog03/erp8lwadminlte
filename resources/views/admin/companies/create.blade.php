@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')
<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="w3-card-4">
      <header class="w3-container bg-secondary"><h3>Cadastrar Nova Empresa</h3></header>
     
      {!! Form::open(['route' => 'admin.companies.store', 'autocomplete' => 'off', 'files' => true]) !!}

        <div class="form-group px-1 mt-1">
          <div class="row">
            <div class="col-7">
              {!! Form::label('social_name', 'Razão Social') !!}
              {!! Form::text('social_name', null, ['class' => 'w3-input']) !!}

              @error('social_name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-5">
              {!! Form::label('fantasy_name', 'Nome Fantasia') !!}
              {!! Form::text('fantasy_name', null, ['class' => 'w3-input form-control-sm']) !!}

              @error('social_name')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group px-1">
          <div class="row">
            <div class="col-5">
              {!! Form::label('cnpj', 'CNPJ') !!}
              {!! Form::text('cnpj', null, ['class' => 'w3-input', 'onblur = validaCpfCnpj(this.value);']) !!}

              @error('cnpj')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-4">
              {!! Form::label('ie', 'I.E.') !!}
              {!! Form::text('ie', null, ['class' => 'w3-input ']) !!}

              @error('ie')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-3">
              {!! Form::label('im', 'I.M.') !!}
              {!! Form::text('im', null, ['class' => 'w3-input']) !!}

              @error('im')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group px-1">
          <div class="row">
            <div class="col-2">
              <label for="cep">Cep</label>
              <input id="cep" onblur="pesquisacep(this.value);" class="w3-input" name="cep" type="text">
              
              @error('cep')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-9">
              {!! Form::label('address', 'Endereço') !!}
              {!! Form::text('address', null, ['class' => 'w3-input']) !!}
              @error('address')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-1">
              {!! Form::label('address_number', 'Número') !!}
              {!! Form::text('address_number', null, ['class' => 'w3-input']) !!}
              @error('address_number')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

        <div class="form-group px-1">
          <div class="row">
            <div class="col-3">
              {!! Form::label('address_complement', 'Complemento') !!}
              {!! Form::text('address_complement', null, ['class' => 'w3-input']) !!}
              @error('address_complement')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-4">
              {!! Form::label('address_district', 'Bairro') !!}
              {!! Form::text('address_district', null, ['class' => 'w3-input']) !!}
              @error('address_district')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-4">
              {!! Form::label('address_city', 'Cidade') !!}
              {!! Form::text('address_city', null, ['class' => 'w3-input']) !!}
              @error('address_city')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            <div class="col-1">
              {!! Form::label('address_state', 'UF') !!}
              {!! Form::text('address_state', null, ['class' => 'w3-input']) !!}
              @error('address_state')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
        </div>

          <div class="form-group px-1">
            <div class="row">
              <div class="col-6">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::email('email', null, ['class' => 'w3-input']) !!}
                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-3">
                {!! Form::label('phone', 'Telefone') !!}
                {!! Form::text('phone', null, ['class' => 'w3-input']) !!}
                @error('phone')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="col-3">
                {!! Form::label('mobile', 'Celular') !!}
                {!! Form::text('mobile', null, ['class' => 'w3-input']) !!}
                @error('mobile')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
        
        {!! Form::submit('Criar Empresa', ['class' => 'btn btn-secondary mb-2']) !!}

      {!! Form::close() !!}

    </div>
    
  </div>  
</div>     
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jQuery-Mask-Plugin/dist/jquery.mask.min.js') }}"> </script>
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/cpfCnpj.js') }}"></script>

    @stop