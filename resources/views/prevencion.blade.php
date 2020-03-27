@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>Prevencion</strong></h2></div>

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
                        <p style="j">Hasta la fecha no se dispone de vacuna alguna ni de tratamiento específico para combatir la infección por coronavirus.<br><br>

Mantener una higiene básica es la forma más eficaz de evitar contraer este virus en los lugares en los que existe un mayor riesgo de transmisión, fundamentalmente las zonas en las que se han registrado casos. Es conveniente lavarse las manos con frecuencia y evitar el contacto con personas ya infectadas, protegiendo especialmente ojos, nariz y boca. A las personas infectadas (o que crean que pueden estarlo) se les aconseja el uso de mascarillas y usar pañuelos para cubrirse la nariz y la boca cuando se tose o se estornuda.<br><br>

Las personas infectadas por el virus que causa el COVID-19 deben guardar cuarentena desde el diagnóstico de la enfermedad hasta 15 días después de ser dadas de alta. Así lo aconseja la OMS porque se ha observado que, aunque ya estén recuperadas, pueden seguir transmitiendo la infección.
<br><br>
La población general sana no necesita utilizar mascarillas, ya que ayudan a prevenir la transmisión del virus si las llevan las personas que están enfermas. El Ministerio de Sanidad advierte de que un uso inadecuado de mascarillas puede contribuir al desabastecimiento en aquellas situaciones para las que están indicadas.<br><br>

Las medidas preventivas deben seguirlas especialmente aquellas personas que padezcan diabetes, insuficiencia renal, neumopatía crónica o inmunodepresión, ya que tienen más riesgo de padecer enfermedad grave en caso de infección por coronavirus. 

</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 400px;" src="https://s2.lanzadigital.com/wp-content/uploads/2020/03/C%C3%B3mo-prevenir-el-coronavirus.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection