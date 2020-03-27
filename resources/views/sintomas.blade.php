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
                    <DIV ALIGN="justify">
                        <p style="j">En general, los síntomas principales de las infecciones por coronavirus pueden ser los siguientes. Dependerá del tipo de coronavirus y de la gravedad de la infección:<br>

            <ul><li>Tos.</li></ul>  

            <ul><li>Dolor de garganta.</li></ul>

            <ul><li>Fiebre.</li></ul>

            <ul><li>Dificultad para respirar (disnea).</li></ul>

            <ul><li>Dolor de cabeza.</li></ul>

            <ul><li>Escalofríos y malestar general.</li></ul>

            <ul><li>Secreción y goteo nasal.</li></ul>
 
En espectro clínico de este tipo de infecciones varía desde la ausencia de síntomas hasta síntomas respiratorios leves o agudos. Esta tipología suele cursar con tos, fiebre y dificultades respiratorias. Es frecuente que haya neumonía y, en el caso del MERS, también se pueden registrar síntomas gastrointestinales, en especial, diarrea.<br><br>

Tal y como ocurre con el virus de la gripe, los síntomas más graves (y la mayor mortalidad) se registra tanto en personas mayores como en aquellos individuos con inmunodepresión o con enfermedades crónicas como diabetes, algunos tipos de cáncer o enfermedad pulmonar crónica. En los casos más graves pueden ocasionar insuficiencia respiratoria.<br><br>

En la pandemia de COVID-19 se ha constatado que en torno al 80% de las personas infectadas presentan síntomas leves.


</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img style="height: 400px;" src="https://e00-elmundo.uecdn.es/elmundo/2020/graficos/feb/s4/sintomascorona470.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection