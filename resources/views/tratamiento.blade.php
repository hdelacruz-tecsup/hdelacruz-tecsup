@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>Tratamiento</strong></h2></div>

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
                        <p style="j">No existe una vacuna contra el coronavirus humano que causa resfriado, pero los casos más leves pueden superarse siguiendo los mismos pasos que un catarro común. Esto no requiere intervención médica y simplemente con lavarse las manos de forma frecuente, guardar reposo y beber líquidos de forma abundante los síntomas desaparecerán a los pocos días. También se pueden tomar analgésicos como ibuprofeno o paracetamol para aliviar dolores de garganta o fiebre.<br><br>

                        En casos de coronavirus SRAS, MERS CoV y COVID-19, suele ser conveniente el ingreso hospitalario en los casos graves.  En los casos que los médicos lo consideran necesario, se administran antivirales, dosis altas de esteroides para reducir la inflamación pulmonar y un soporte respiratorio con oxígeno; en ocasiones puede precisar antibióticos, pero solo en caso de que existan infecciones bacterianas sobrevenidas, es decir, sobreinfección.<br><br>

                        En resumen, este tipo de infecciones respiratorias se tratan con antivirales (según el criterio del profesional sanitario) y medidas de soporte. El tratamiento se suele adaptar en función de la gravedad del paciente, ya que hay casos en los que se producen neumonías graves, pero en otros las manifestaciones son leves.<br><br>

</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 400px;" src="https://i.ytimg.com/vi/tykIWR09-1I/maxresdefault.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection