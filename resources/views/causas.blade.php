@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>Cusas</strong></h2></div>

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
                        <p style="j">Hasta ahora, los coronavirus se transmitían de forma limitada entre humanos. Se desconoce el origen de estos virus, pero se sabe que ciertos animales, como los murciélagos, actúan como reservorios.

Como en otros virus que causan neumonía, cuando se transmiten en humanos, el contagio se produce generalmente por vía respiratoria, a través de las gotitas respiratorias que las personas producen cuando tosen, estornudan o al hablar.<br><br>

Todo parece indicar que  nuevo coronavirus, COVID-19, también conocido como coronavirus de Wuhan, tiene una procedencia animal. De hecho, los primeros casos se han relacionado con un mercado de animales vivos de la ciudad de Wuhan, en China.

En cuanto al MERS, es probable que los camellos sean un importante reservorio para este tipo de coronavirus y una fuente animal de infección en los seres humanos, como especificaba la Organización Mundial de la Salud en su nota descriptiva sobre la enfermedad. Sin embargo, se desconoce la función específica de los camellos en la transmisión del virus y también la ruta o rutas exactas de transmisión.<br><br>

En origen, el coronavirus MERS-CoV es un virus zoonótico que se transmite de animales a personas. Según se desprende del análisis de varios de sus genomas, se cree que el virus se originó en murciélagos y se transmitió a los camellos en algún momento de un pasado lejano.

Se cree que el coronavirus del SRAS tuvo su origen en los murciélagos, saltando posteriormente a alguna otra especie de pequeño mamífero, como la civeta, y por último a los humanos.<br><br>

</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 400px;" src="https://img.europapress.es/fotoweb/fotonoticia_20200226145006_1200_v3.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection