@extends('connect.master')
@section('title', 'Iniciar Sesión')
@section('content') 
<div class="container">
<!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Inicar Sesión</h1>
                                </div>
                                {!! Form::open(['url' => '/login']) !!}
                                    <div class="form-group">
                                        {!!Form::email('email', null, ['class'=> 'form-control form-control-user', 'aria-describedby'=>'emailHelp','placeholder'=>'Ingresa tú Correo Electrónico...', 'required'])!!}
                                        
                                    </div>
                                    <div class="form-group">
                                        {!!Form::password('password', ['class'=> 'form-control form-control-user', 'placeholder'=>'Contraseña', 'required'])!!}
                                    </div>
                                    {!! Form::submit('Iniciar Sesión',['class' =>'btn btn-primary btn-user btn-block']) !!}
                                    <hr>
                                {!! Form::close() !!}  
                                
                                @if(Session::has('message'))
                                    <div class="container">
                                        <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
                                            {{ Session::get('message') }}
                                            @if ($errors->any())
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            @endif
                                            <script>
                                                $('.alert').slideDown();
                                                setTimeout(function(){ $('.alert').slideUp(); },10000);
                                            </script>
                                        </div>
                                    </div>
                                @endif
                                <div class="text-center">
                                    <a class="small"  href="{{url('/recover')}}">¿Olvidaste tu Contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop