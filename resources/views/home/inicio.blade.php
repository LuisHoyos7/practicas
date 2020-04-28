@extends('home.navbar')

@section('contentInicio')
<style>
    .uno 
    {
        margin-right: -30px !important;
        margin-left: -30px !important;
        margin-top: -10px !important;
        height: 2700px !important;
    }

    .cuatro{
       
          background: linear-gradient(180deg,##21f63daf,#395177);
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#637bff)) fixed; */
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#395177)) fixed; */
        background: -webkit-gradient(linear, left top, left bottom, from(#21f63daf), to(#395177)) fixed;
    
    }
    .dos{
        background: linear-gradient(180deg,##21f63daf,#395177);
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#637bff)) fixed; */
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#395177)) fixed; */
        background: -webkit-gradient(linear, left top, left bottom, from(#21f63daf), to(#395177)) fixed;

    }
    .tres
    {
        background: white !important;
        margin-left: 5px !important;
        margin-top: 0px !important;
        margin-right: 5px !important;
    }

    .cinco
    {
        background: white !important;
        padding: 50px !important;
        padding-left: 20px !important,
    }
    {
        background: #fff !important;
          margin-right: 5px !important;
        margin-left: 5px !important;
        margin-top: 0px !important;
    }
    .contdiv{
        background-color:transparent;
        box-shadow: 0px 0px 0px 0px rgba(82, 63, 105, 0.0);
    }
    .tw-text-white {
        color: #fff;
        text-align: center;
    }
    .img-center{
        display: block;
        margin: auto;
    }
    .link1{
        background-color: #304260;
        width: 120px;
        height: 120px;
        border-radius: 10px;
        display: inline;
        float: left;
        margin-right: 10px;
    }
    .link1:hover{
        transition-property: opacity, left, top, height;
        transition-duration: 3s, 5s, 3s, 5s;
        background: linear-gradient(180deg,#25c2f6,#528efc);
    }

    ul, li , a , h2{
        color: white !important;
        text-decoration: none !important;

    }

    .seis
    {
      
padding-top: 10px !important;
padding-left: 30px !important;

     background: linear-gradient(90deg,##21f63daf,#395177);
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#637bff)) fixed; */
        /* background: -webkit-gradient(linear, left top, left bottom, from(#21c8f6), to(#395177)) fixed; */
        background: -webkit-gradient(linear, left top, left bottom, from(#21f63daf), to(#395177)) fixed;
    }

</style>

<div class="row dos">
    <div class="col-lg-5">
        <!--begin::Portlet-->
        <div class="kt-portlet contdiv">
            {{-- <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                </div>
            </div> --}}
            <div class="kt-portlet__body  ">
                <img src="{{asset ('/logos/logo_transparente.png') }}" class="img-center" style="margin-top:20%; " width="80%">
            </div>
            {{-- <div class="kt-portlet__foot">
                <div class="row align-items-center">
                </div>
            </div> --}}
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-lg-7">
        <!--begin::Portlet-->
        <div class="kt-portlet contdiv">
            {{-- <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                </div>
            </div> --}}
            <div class="kt-portlet__body">

                <div class="primary phone:tw-pt-0 tw-text-white">
                    <h2 class="tw-text-white tw-text-3xl tw-mb-4"><br><br><br><br><br>
                        <p>Programa de Licenciatura en Ciencias Naturales</p>  
                        <p>Sistema de Prácticas Pedagógicas Institucionales</p> 
                        <p>Modalidad Presencial</p>
                    </h2>
                </div>

            </div>
            {{-- <div class="kt-portlet__foot">
                <div class="row align-items-center">
                </div>
            </div> --}}
        </div>
        <!--end::Portlet-->
    </div>
</div>

<div class="row row1 tres"><br>
    <!-- seccion de servicios-->
    <section class="ftco-section" id="services">
   
        <div class="row justify-content-center mb-5 pb-5">
      
            <button class="btn btn-label-success btn-lg" type="" id=""><b>Servicios</b></button>
    
        </div>
        <div class="row">
          <div class="col-md-5 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-lightbulb-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Mision</h3>
                <p>Formar profesionales integrales en el área de las Ciencias Naturales y Educación Ambiental, capaces de liderar e impulsar procesos de desarrollo educativo, ético, social, ambiental y de articular el proceso de enseñanza y aprendizaje de las Ciencias, con la investigación pedagógica y disciplinar, para dar solución a los problemas del entorno como producto de su desempeño docente.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-laptop"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading" style="background: linear-gradient(#232323,#24e455);
                -webkit-background-clip: text;
                color: transparent;font-family:monospace">Vision</h3>
                <p>Para el año 2013 el Programa de Licenciatura en Ciencias Naturales y Educación Ambiental aporta  al servicio de la Educación Colombiana  y de la región Caribe y Cordobesa en particular,  egresados calificados con alta demanda en el contexto regional y nacional,  con  dominio de competencias integrales en el campo pedagógico,  investigativo, humanístico y disciplinar, y en  la dirección del proceso de  enseñanza y aprendizaje de las ciencias que le permitan  aportar a la transformación y mejoramiento de la calidad educativa, de la cultura y del desarrollo sostenible de la región. .</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gear"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading" style="background: linear-gradient(#232323,#24e455);
                -webkit-background-clip: text;
                color: transparent;font-family:monospace">Responsabilidad</h3>
                <p>Es la capacidad de la Universidad para reconocer y afrontar las consecuencias de sus acciones. En cumplimiento de ello dará cuenta a la sociedad sobre el carácter de su misión; velará por su cumplimiento y responderá ante ella y el Estado por la calidad y la excelencia académica.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading" >Objetivos generales
                </h3>
                <p>Formar personas integrales, éticas y socialmente responsables, con claros principios y convicciones en la dirección del proceso docente educativo y en la aplicación de conocimientos, habilidades y competencias que le permitan la solución del encargo social.
                  Propiciar la educación ambiental como un eje transversal en la formación, específicamente en los currículos de los diferentes niveles de la educación básica y media académica.
                  </p>
              </div>
            </div>      
          </div>
        </div>
    
    </section>
<!-- fin de seccion de servicios -->
</div>

<div class="row cuatro">
       <section class="ftco-section-parallax" id="nosotros">
      <div class="parallax-img d-flex align-items-center">
        
          <div class="row d-flex justify-content-center"><br>
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate"><br><br><br>
              <h1 style="color:#fff !important"><b>Mas Informacion sobre nosotros</b></h1>
              <p style="color:#ffffff !important; font-size:19px;">El proyecto educativo del programa hace explicito los aspectos filosóficos, misionales, pedagógicos, curriculares y metodológicos en relación con la formación de licenciados en el área de las Ciencias Naturales y la Educación Ambiental de la Facultad de Educación y Ciencias Humanas de la Universidad de Córdoba y es el resultado de una construcción participativa de sus estamentos, en especial, los integrantes del comité de acreditación y currículo, que da cuenta de la gestión del programa y su impacto en la región y el país. </p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <!--<span class="icon icon-paper-plane"></span>
                      <input type="text" class="form-control" placeholder="Dejanos tu correo!!">-->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 
    </section>
</div>


 <footer class="ftco-footer ftco-bg-dark ftco-section seis" id="contactos">
  
        <div class="row mb-6">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2">Enlances</h2>
              <ul class="list-unstyled">
                <li><a href="#index" class="py-2 d-block">inicio</a></li>
                <li><a href="#services" class="py-2 d-block">Servicios</a></li>
                <li><a href="#galeria" class="py-2 d-block">Galeria</a></li>
                <li><a href="#nosotros" class="py-2 d-block">Nosotros</a></li>
                <li><a href="#contactos" class="py-2 d-block">Contactos</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">Informacion</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Nombre del Programa: Licenciatura en Ciencias Naturales y Educación Ambiental</a></li>
                <li><a href="#" class="py-2 d-block">Título que otorga: Licenciado (a) en Ciencias Naturales y Educación Ambiental</a></li>
                <li><a href="#" class="py-2 d-block">Nivel de formación: Universitario</a></li>
              </ul>
              </div>
          </div>
          <div class="col-md">
              <div class="ftco-footer-widget mb-6">
               
               <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Metodología: Presencial</a></li>

                 <li><a href="#" class="py-2 d-block">Departamento: Córdoba</a></li>
                 <li><a href="#" class="py-2 d-block">Municipio: Montería</a></li>
                 <li><a href="#" class="py-2 d-block">Dirección: Carrera 6 N° 76-103</a></li>
                 <li><a href="#" class="py-2 d-block">Teléfono: 7908234</a></li>
                 <li><a href="#" class="py-2 d-block">Fax: 7908234</a></li>
                 <li><a href="#" class="py-2 d-block">E-mail: viceacademicaunicor@gmail.com- edunaturales@correo.unicordoba.edu.co</a></li>
               </ul>
             </div>
           </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Redes Sociales</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="color:black !important"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Departamento de ciencias naturales Unicor | Hecho con <i class="la la-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Estudiantes de Ingenieria de sistemas Unicor</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>

    </footer>
    
    



@endsection
