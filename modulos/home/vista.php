<?php 
session_start();
require ("../estructura/header.php");
require ("../estructura/sidebar.php");
?>
<br>
<!--Modulo de Herramientas-->
<div class="card m-3 d-flex flex-row bd-highlight">        
  <div class="card-body">
    <h4 class="card-title"><h3>Herramientas</h3></h4>          
    <div class="row">  
      <!--ATAJO COTIZAR-->
      <div class="bd-highlight m-2">
        <a type="button" class="btn btn-info" href="../cotizaciones/vista.php">
          <div class="row">            
            <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
              <div class="p-1 bd-highlight"><h1>Cotizar</h1></div>
              <div class="p-1 bd-highlight">Generar nueva cotizacion</div>
            </div>          
            <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
              <i class="fas fa-file-alt fa-5x"></i>
            </div>
          </div>
        </a>
      </div>   
      <!--ATAJO A SOLICITUD DE COTIZACION--> 
      <div class="bd-highlight m-2">
        <a type="button" class="btn btn-success" href="../solicitudes/vista.php">
          <div class="row">            
            <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
              <div class="p-1 bd-highlight"><h1>Solicitud</h1></div>
              <div class="p-1 bd-highlight">Solicitar nueva cotizacion</div>
            </div>          
            <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
            <i class="fas fa-file-upload fa-5x"></i>
          </div>
          </div>
        </a>
      </div> 
      <!--ATAJO GENERAR CONTRATO-->
      <div class="bd-highlight m-2">
        <a type="button" class="btn btn-danger" href="../contratos/vista.php">
          <div class="row">            
            <div class="col d-flex align-items-start flex-column bd-highlight mb-3">
              <div class="p-1 bd-highlight"><h1>Contrato</h1></div>
              <div class="p-1 bd-highlight">Generar nuevo contrato</div>
            </div>          
            <div class="col d-flex justify-content-center align-items-center" style="color: rgba(0, 0, 0, 0.15);  ">
              <i class="fa-solid fa-file-signature fa-5x"></i>
            </div>
          </div>
        </a>
      </div>  
    </div>
  </div>
</div>

<div class = "row m-3">
        <div id="solicitudes" class="card w-100 h-100 mt-2 shadow p-2 mb-5 bg-white rounded data-spy="scroll">          
          <div class="card-body">
            <h5 class="card-title">SOLICITUDES PENDIENTES</h5>            
          </div>
          
        </div>
      </div>

      <!--JQuery-->
<script src="../../assets/js/jquery-3.7.1.min.js"></script>

<script src="funcionesH.js"></script>

<?php
require ("../estructura/footer.php");
?>