
<div class="container-fluid">
    <div class="row bg-dark" >
        <div class="col -1"></div>
        <div class="col-auto "><p class="text-white bg-dark" href="<?= esc_url(home_url('/')); ?>">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/posicion.png'; ?>" width="20" height="20" alt=""><small><b>25 de Mayo 2251 - 2º piso (Galería Santa Fe) - Santa Fe</b></small>  
        </p></div>
        <div class="col-auto"><p class="text-white bg-dark" href="<?= esc_url(home_url('/')); ?>">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/telefono.png'; ?>" width="20" height="20" alt=""><small><b>0342 4815575 </b> </small>
        </p></div>
        <!--<div class="col-auto"><p class="text-white bg-dark" href="<?= esc_url(home_url('/')); ?>">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/correo.png'; ?>" width="20" height="20" alt=""><small><b>info@website.com</b></small>
        </p></div>-->
        <div class="col-auto"><p class="text-white bg-dark" href="<?= esc_url(home_url('/')); ?>">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/reloj.png'; ?>" width="20" height="20" alt=""><small><b>Lun a Vie de 08:00 a 13:00 hs</b>  </small>
        </p></div>
        <div class="col -2"></div>
        <div class="col-auto"><a href="https://www.facebook.com/SeguridadVialSantaFe/">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/facebook.png'; ?>" width="20" height="20" alt="" >
        </a></div>
        <div class="col-auto"><a href="https://twitter.com/RedSegVial">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/twitter.png'; ?>" width="20" height="20" alt="" >
        </a></div>
        <div class="col-auto"><a href="https://instagram.com/apsv_santa_fe">     
          <img src="<?php echo get_template_directory_uri() . '/dist/images/instagram.png'; ?>" width="20" height="20" alt="" >
        </a></div>
        <div class="col -1"></div>
        
    </div>    
</div>
<div class="container-fluid">
  <div class="row bg-light">
    <nav class="navbar navbar-expand-sm navbar-light bg-light container navbar-toggleable-sm">
         
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() . '/dist/images/APSV-logo-nuevo-negro.png'; ?>" class="img-fluid" alt=""  width="225" height="100">
          </a>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>APSV</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item text-dark" href="<?php echo esc_url(home_url('/')) . '/informe-de-transito'; ?>"><b>Informe de tránsito</b></a>
                        <a class="dropdown-item text-dark" href="<?php echo esc_url(home_url('/')) . '/la-agencia'; ?>"><b>La Agencia</b></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo esc_url(home_url('/')) . '/cursos-y-capacitaciones'; ?>"><b>Capacitación</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo esc_url(home_url('/')) . '/estadisticas'; ?>"><b>Estadísticas</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo esc_url(home_url('/')) . '/controles'; ?>"><b>Controles</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo esc_url(home_url('/')) . '/campanas-de-concientizacion'; ?>"><b>Campañas</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Trámites</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?php echo esc_url(home_url('/')) . '/obtencion-de-licencia-en-centro-de-habilitacion-de-conductores'; ?>"><b>Licencias</b></a>
                        <a class="dropdown-item" href="<?php echo esc_url(home_url('/')) . '/revision-tecnica-vehicular-obligatoria'; ?>"><b>RTO</b></a>
                        <a class="dropdown-item" href="<?php echo esc_url(home_url('/')) . '/procedimiento-ante-juzgado-de-faltas-habilitados'; ?>"><b>Juzgado de faltas</b></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Noticias</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?php echo esc_url(home_url('/')) . '/noticias'; ?>"><b>Institucionales</b></a>
                        <a class="dropdown-item" href="<?php echo esc_url(home_url('/')) . '/informes-y-articulos-de-opinion'; ?>"><b>Opinión</b></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
  </div>
</div>

