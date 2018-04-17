<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registra tus datos </title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container"> 
                    <div class="row">
                        @if($winner)
                            <div class="col-sm-6 text form-box">
                                <h1>Ganador !!!</h1>
                                <p>El ganador del mas reciente concurso es <h2 class="text">{{$winner->name}} {{$winner->lastname}}</h2> con número de documento {{$winner->ident}} <br>
                                Felicidades
                                </p>
                            </div>
                        @else
                            <div class="col-sm-6 text form-box">
                                <h1>Registra tus datos, Participa y gana</h1>
                                <div class="description">
                                    <p>Nuetra empresa desea premiar tu fidelidad y conocerte un poco mas, solo registra los datos personales a continuación y estaras participando por un automovil 0 KM.</p>
                                </div>   
                            </div>
                        @endif
                        
                        <div class="col-sm-6 form-box">
                            <div class="form-bottom contact-form">
                                <?php $message=Session::get('message') ?>
                                @if($message == 'store')
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      Registro Exitoso
                                    </div>
                                @endif
                                {!!Form::open(['route'=>'participant.store','method'=>'POST','class'=>''])!!}
                                    <div class="form-group">
                                      {!!Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nombres', 'required'])!!}
                                        @if ($errors->has('name'))
                                          <span class="">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                      {!!Form::text('lastname', null, ['class'=>'form-control', 'placeholder' => 'Apellidos', 'required'])!!}
                                        @if ($errors->has('lastname'))
                                          <span class="">
                                              <strong>{{ $errors->first('lastname') }}</strong>
                                          </span>
                                        @endif
                                    </div>

                                    <div class="row">
                                      <div class="form-group col-md-6">
                                        {!!Form::number('ident', null, ['class'=>'form-control', 'placeholder' => 'Cédula', 'required'])!!}
                                        @if ($errors->has('ident'))
                                          <span class="">
                                              <strong>{{ $errors->first('ident') }}</strong>
                                          </span>
                                        @endif
                                      </div>
                                      <div class="form-group col-md-6">
                                        {!!Form::number('phone', null, ['class'=>'form-control', 'placeholder' => 'Telefono', 'required'])!!}
                                        @if ($errors->has('phone'))
                                          <span class="">
                                              <strong>{{ $errors->first('phone') }}</strong>
                                          </span>
                                        @endif
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="form-group col-md-6">
                                        Departamento
                                        <select name="department_id" class="form-control" id="departs" required>
                                          <option value="">-- Seleccione --</option>
                                        </select>
                                        @if ($errors->has('department_id'))
                                          <span class="">
                                              <strong>{{ $errors->first('department_id') }}</strong>
                                          </span>
                                        @endif
                                      </div>
                                      <div class="form-group col-md-6">
                                        Ciudad
                                        <select name="city_id" class="form-control" id="cities" required>
                                          <option value="">-- Seleccione --</option>
                                        </select>
                                        @if ($errors->has('city_id'))
                                          <span class="">
                                              <strong>{{ $errors->first('city_id') }}</strong>
                                          </span>
                                        @endif
                                      </div>  
                                    </div>
                                    
                                    <div class="form-group">
                                      {!!Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Correo Electrónico', 'required'])!!}
                                        @if ($errors->has('email'))
                                          <span class="">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="autoriced" name="protecteddata" required>
                                        Autorizo el tratamiento de mis datos de acuerdo con la finalidad
                                        establecida en la política de protección de datos personales. 
                                        <a href="">Haga clic aquí</a></label>
                                        @if ($errors->has('protecteddata'))
                                          <span class="">
                                              <strong>{{ $errors->first('protecteddata') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    {!!Form::submit('Participar', ['class' => 'btn btn-info btn-block'])!!}
                                  {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="/js/dropdown.js"></script>
    </body>
</html>