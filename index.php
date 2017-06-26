<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
      <?php include 'includes/nav.php'; ?>
</head>
<body>

  
<div id="page-wrapper">
    <div class="container-fluid">
           
      <div class="row">
        <div class="col-md-10 col-xs-6">
          <h2 class="bienvenido">Bienvenido(a)</h2>
        </div>
        <div class="col-md-2 col-xs-6">
          <table class="calendar">
            <tr>
              <th>7-jun-17</th>
              <th><img class="calendar" src="images/calendar.png"></th>
            </tr>
          </table>
        </div>
      </div>
    
        
      <div class="row cont-text">
       
        <div class="col-md-3">
          <span class="glyphicon glyphicon-record" style="color: red;"></span>
          <p class="solicitud"><b>(3)</b> solicitud pendiente</p>
        </div>
        <div class="col-md-3">
        <p><b>(0)</b> incidencias reportadas</p>
        </div>
      </div>



  <section class="section2">
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <h2 class="proyecto">Proyectos</h2>
      </div>
      <div class="col-md-4 col-xs-12">
        <form class="navbar-form navbar-left buscar" role="search">
          <div class="form-group">
            <input type="text" class="form-control-buscar" placeholder="Buscar">
          </div>
        </form>
      </div>
      <div class="col-md-4 col-xs-12 div-paddin">
        <!-- Button trigger modal -->
        <!--<button data-toggle="modal" data-target="#myModal" class="sol-pd">+ Solicitar proyecto</button>-->
      </div>
    </div>
    <!-- Modal PROYECTOS-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nueva Solicitud</h4>
        </div>
        <div class="modal-body">
          <div class="body-proyecto">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- TERMINA Modal PROYECTOS-->
  </section>

<section class="row 0section3">
    <div class="panel panel-default">
      <table class="table">
        <tr class="blue-color">
          <td>No. Referencia</td>
          <td >Nombre del Proyecto</td>
          <td class="responsive-ocult">Fecha de Creación</td>
          <td >Usuario</td>
          <!--<td class="responsive-ocult">Estatus</td>-->
          <td class="responsive-ocult"></td>
      </tr>

      <tr>
          <td class="no-ref">96357</td>
          <td class="no-pro"><a href="proyectos-2.php"> Estado de Cuenta Bancomer </a></td>
          <td class="responsive-ocult">29 Nov</td>
          <td class="no-user"><img class="icon-people" src="images/woman.png"> Evelyn Aguilar</td>
          <!--<td class="responsive-ocult"><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>-->
          <td class="responsive-ocult"><a href="#"><span class="glyphicon glyphicon-cog"></span></td></a>
      </tr>

      <tr>
          <td class="no-ref">45648</td>
          <td class="no-pro"><a href="proyectos-2.php">Bancomer Móvil</a></td>
          <td class="responsive-ocult">08 Nov</td>
          <td class="no-user"><img class="icon-people" src="images/man.png"> Esteban Juarez</td>
          <!--<td class="responsive-ocult"><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>-->
          <td class="responsive-ocult"><a href="#"><span class="glyphicon glyphicon-cog"></span></td></a>
      </tr>

      <tr>
          <td class="no-ref">59658</td>
          <td class="no-pro"><a href="proyectos-2.php">Postal tarjeta de crédito</a></td>
          <td class="responsive-ocult">1 Dic</td>
          <td class="no-user"><img class="icon-people" src="images/woman.png"> Evelyn Aguilar</td>
          <!--<td class="responsive-ocult"><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>-->
          <td class="responsive-ocult"><a href="#"><span class="glyphicon glyphicon-cog"></span></td></a>
      </tr>

      <tr>
          <td class="no-ref">87829</td>
          <td class="no-pro"><a href="proyectos-2.php">Folleto viajes</a></td>
          <td class="responsive-ocult">8 Feb</td>
          <td class="no-user"><img class="icon-people" src="images/man.png"> Esteban Juarez</td>
          <!--<td class="responsive-ocult"><button class="demorado"><b class="bullet-demorado">•</b> Demorado</button></td>-->
          <td class="responsive-ocult"><a href="#"><span class="glyphicon glyphicon-cog"></span></td></a>
      </tr>
  </table>
</div>
<a href="#"><button class="mas">Ver más</button></a>
</section>






</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->






	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>