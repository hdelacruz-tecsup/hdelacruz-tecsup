@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2><strong>¿Que es ?</strong></h2></div>

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
                        <p style="j"><br>
Los coronavirus son una familia de virus que se descubrió en la década de los 60 pero cuyo origen es todavía desconocido. Sus diferentes tipos provocan distintas enfermedades, desde un resfriado hasta un síndrome respiratorio grave (una forma grave de neumonía).

Gran parte de los coronavirus no son peligrosos y se pueden tratar de forma eficaz. De hecho, la mayoría de las personas contraen en algún momento de su vida un coronavirus, generalmente durante su infancia. Aunque son más frecuentes en otoño o invierno, se pueden adquirir en cualquier época del año.<br><br>

El coronavirus debe su nombre al aspecto que presenta, ya que es muy parecido a una corona o un halo. Se trata de un tipo de virus presente tanto en humanos como en animales.

En los últimos años se han descrito tres brotes epidémicos importantes causados por coronavirus:

SRAS-CoV: El síndrome respiratorio agudo y grave (SRAS, también conocido como SARS y SRAG) se inició en noviembre de 2002 en China, afectó a más de 8.000 personas en 37 países y provocó más de 700 muertes. La mortalidad del SRAS-Cov se ha cifrado en el 10% aproximadamente.<br><br>

MERS-CoV: El coronavirus causante del síndrome respiratorio de Oriente Medio (MERS) fue detectado por primera vez en 2012 en Arabia Saudita. Se han notificado hasta octubre de 2019 más de 2.400 casos de infección en distintos países, con más de 800 muertes. La letalidad es, por tanto, del 35%.

COVID-19: A finales de diciembre de 2019 se notificaron los primeros casos de un nuevo coronavirus en la ciudad de Wuhan (China). Desde entonces el goteo de nuevos infectados por el virus SARS-CoV-2 (inicialmente llamado 2019nCoV), que provoca el COVID-19, ha sido continuo y su transmisión de persona a persona se ha acelerado. Los casos declarados de nemonía de Wuhan ya superan con creces a los de la epidemia de SRAS, pero la tasa de letalidad es más baja.<br><br>

La Organización Mundial de la Salud (OMS) ha declarado la situación de pandemia. Hay personas infectadas en la mayoría de los países y los profesionales sanitarios insisten en la necesidad de seguir las medidas preventivas y evitar la alarma social.

En España y otros países se ha decretado el estado de alarma y las autoridades sanitarias insisten en la necesidad de permanecer en casa para contener la transmisión.

</p> 
                    </DIV>        
                   
            </div>
            </div>
<div align="center"><img  src="https://as01.epimg.net/deporteyvida/imagenes/2020/03/17/portada/1584427134_983250_1584427275_noticia_normal_recorte1.jpg"></div>


</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
