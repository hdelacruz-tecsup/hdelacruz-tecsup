@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>Tipos</strong></h2></div>

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
                        <p style="j">En los coronavirus humanos, la gravedad puede variar sustancialmente entre un tipo y otro:<br><br>

<h4>Coronavirus del resfriado</h4>
Esta variante de coronavirus corresponde a los tipos 229E y OC43, que provocan los síntomas comunes de un resfriado, aunque en los casos más graves también pueden ocasionar una neumonía en personas de edad avanzada o en neonatos.<br>

Los tipos de coronavirus 229E y OC43 causan los síntomas comunes de un resfriado.<br><br>


<h4>índrome respiratorio agudo severo (SRAS)</h4>
    Es una forma grave de neumonía. Provoca dificultad respiratoria y fiebre superior a los 38 grados. El brote de 2002 se extendió por todo el mundo, aunque su frecuencia siempre ha sido mayor en el este asiático.<br><br>

<h4>Síndrome respiratorio de Oriente Medio (MERS-CoV)</h4>
Causa graves problemas respiratorios, además de fiebre, tos y dificultad para respirar, aunque en un primer momento puede ser asintomático. En los casos más graves también se produce expectoración de sangre, diarrea y vómitos. Tuvo su primer brote en el año 2012 y desde entonces se han reportado muchos casos en Oriente Medio, aunque también ha llegado a Europa y Estados Unidos.<br><br>

<h4>Coronavirus COVID-19</h4>
El nuevo coronavirus detectado a finales de 2019, causante del COVID-19, en China muestra una secuencia genética que coincide con la del SRAS en un 80%. No obstante, en un principio parece menos virulento y con una tasa de letalidad inferior. En cambio, su transmisión ha sido muy superior, ya  ha causado varios miles de casos más que el SRAS y, como consecuencia, el número de fallecimientos también es mucho más elevado.

</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 400px;" src="https://images.nplus1.ru//images/2020/01/21/516f7b0e2311a06375841d9ebceb8f33.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection