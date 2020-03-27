@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>Diagnostico</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav justify-content-center" style="border-radius: all;background: #D1D1D1;">
                        <br>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{{asset('/home')}}}">INICIO</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/causas')}}}">CAUSAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/sintomas')}}}">SINTOMAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/prevencion')}}}">PREVENCION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/tipos')}}}">TIPOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/diagnostico')}}}">DIAGNOSTICO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{{asset('/tratamiento')}}}">TRATAMIENTOS</a>
                        </li>
                        </ul>
                        <br>

                        <div class="row justify-content-center">
                            <div class="col-md-10">
                    <DIV ALIGN="justify"><br>
                        <p style="j">Para determinar si el malestar que sufre un paciente proviene de un simple resfriado o de un coronavirus los médicos puede realizar un cultivo de nariz y garganta, o incluso un análisis de sangre.<br><br>

                        En casos de sospecha de coronavirus se suele realizar una tomografía de tórax para determinar los síntomas de neumonía, así como otros análisis de coagulación de sangre, un análisis bioquímico y un conteo sanguíneo. También se realizan pruebas de anticuerpos y aislamiento del virus del SARS.<br><br>

                        Asimismo, con el fin de contener la transmisión, se efectúa una evaluación a aquellas personas que presentan los síntomas y que puedan ser proclives a contraer el virus.<br><br>

                        El control de la temperatura (con cámaras térmicas y termómetros digitales) de las personas que llegan a un aeropuerto procedentes de zonas afectadas ha sido una de las medidas que se han puesto en marcha para detectar posibles casos del COVID-19, tal y como se hizo con los brotes anteriores. También se realizan cuestionarios a los viajeros; en caso de sospecha, se les somete a evaluación y, en su caso, se les traslada a centros sanitarios.<br><br>
</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 600px;" src="https://www.elsevier.com/__data/assets/image/0006/978738/Coronavirus-1.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection