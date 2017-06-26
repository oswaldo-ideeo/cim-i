

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/header.php'; ?>
</head>
<body>
      <?php include 'includes/nav.php'; ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->

      <div class="row">

      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <h2 class="estado-cuenta">Estado de cuenta</h2>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="line-black">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-6">
          <table class="calendar">
            <tr>
              <th>No. Referencia</th>
              <th><p class="no-ref-header">90364</p></th>
            </tr>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-xs-12">
         <h4>DESCRIPCIÓN DEL PROYECTO</h4>
       </div>
       <div class="col-md-8 col-sm-12">
        <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
      </div>
      <div class="col-md-3 col-sm-12 solicitudes-espacio">
        <p class="color-azul">(2) Solicitude(s) pendiente(s)</p>
        <p>(0) Incidencias reportadas</p>
      </div>
    </div>



    <div class="row">
      <div class="col-md-2">
        <h5>Tipo de remisión</h5>
      </div>
      <div class="col-md-4">
        <div class="dropdown">
          <button id="dLabel" class="cim-generica" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CIM Genérica
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="#"><b>Comentarios 1</b></a></li>
            <li><a href="#"><b>Comentarios 2</b></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-5">
       <div class="marge-icons">
        <a href="#"><a href="#"><img class="clip" src="images/clip.png"></a>
        <a href="#"><img class="clip" src="images/fecha.png"></a>
        <a href="#"><img class="clip" src="images/icon-points.png"></a>
      </div>
    </div>
  </div>



  <section class="section2">
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <h2 class="proyecto">Productos</h2>
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
        <!--<button data-toggle="modal" data-target="#myModal" class="sol-pd">+ Solicitar Producto</button>-->
      </div>
    </div>
  </section>

  <!-- Modal 1 -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nueva Solicitud</h4>
        </div>
        <div class="modal-body">
          <div class="body-proyecto">
            <form action="">
              <label for="tipo" class="etiquetas">Naturaleza de producto:</label>
              <select name="tipo" id="opciones" class="opciones">
                <option value="0">Elige una opción</option>
                <option value="1">Dato Varibale</option>
                <option value="2">Dato Fijo</option>
                <option value="3"><!--Opción3--></option>
              </select>

              <div class="data1">
                <label for="referencia" class="etiquetas">Producto:</label>
                <select name="referencia" id="" class="opciones">
                  <option value="1">0937</option>
                  <option value="2">0938</option>
                  <option value="3">0939</option>
                </select>
              </div>

              <div class="data1 data2"><label for="nombre" class="etiquetas float-der">Ruta de la BdD:</label>
                <div class="form-group">
                  <input type="text" class="form-control form-formulario" id="" placeholder="ftp://citi.bnmx/modifica/priority">
                </div>
              </div>

              <div class="data1 data2">
                <label for="nombre" class="etiquetas float-der">Archivo:</label>
                <div class="form-group">
                  <input type="text" class="form-control form-formulario" id="" placeholder="Prefijo">
                </div>
              </div>

              <div class="data1">
                <label for="nombre" class="etiquetas float-der">Canales</label>
                <div class="boton-grups">
                  <div class="col-md-2">
                   <button type="button" class="btn btn-primary buton-solicitud">Impreso</button>
                 </div>
                 <div class="col-md-2">
                   <button type="button" class="btn btn-primary buton-solicitud">SMS</button>
                 </div>
                 <div class="col-md-2">
                   <button type="button" class="btn btn-primary buton-solicitud">Email</button>
                 </div>
                 <div class="col-md-2">
                   <button type="button" class="btn btn-primary buton-solicitud">Llamada</button>
                 </div>
               </div>
             </div>

             <div class="data1">
              <label for="nombre" class="etiquetas float-der">Cantidad de pzs:</label>
              <div class="form-group">
                <input type="text" class="form-control form-formulario" id="" placeholder="80,000">
              </div>
            </div>

            <div class="data1">
              <div class="input-date">
                <label for="nombre" class="etiquetas float-der f-v">Fecha de vencimiento</label>
                <input class="form-control fecha" type="date" name="">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn-envio">Enviar orden</button>
      </div>
    </div>
  </div>
</div>
<!-- TERMINA Modal 1-->


<section class="section3">
  <div class="panel panel-default">
    <table class="table">
      <tr class="blue-color">
        <td>Nombre del Producto</td>
        <td class="responsive-ocult">Id</td>
        <td >No. Referencia</td>
        <td class="responsive-ocult">Fecha de Creación</td>
        <td class="responsive-ocult">Versiones</td>
        <td >Usuarios</td>
        <td class="responsive-ocult">Pedidos</td>
        <td class="responsive-ocult"></td>
      </tr>
      <!-- FILA UNO DE TABLA principal -->
      <tr class="visible">
        <td data-toggle="modal" data-target="#myModal2" class="sol-pd estado-color cursor">Estado de Cuenta
        </td>
        <td class="responsive-ocult">47</td>
        <td>603547</td>
        <td class="responsive-ocult">29 Abr</td>
        <td class="responsive-ocult">1</td>
        <td><img class="icon-people" src="images/man.png"> 3 más</td>
        <td class="estado-color responsive-ocult">4 </td>
        <td>
         <div class="action"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
       </td>
     </tr>

<tr class="uno">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td class="responsive-ocult"></td>
  <td></td>
  <td ></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="uno">
  <td class="estado-color">Estado de Cuenta BBVA </td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">9</td>
  <td class="responsive-ocult"></td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>



<tr class="uno">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">2</td>
  <td class="responsive-ocult"></td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="uno">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>

  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">4</td>
  <td class="responsive-ocult"></td>
    <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!-- TERMINA FILA UNO DE TABLA -->

<!-- FILA DOS DE TABLA -->
<tr class="visible">
  <td class="estado-color" data-toggle="modal" data-target="#myModal3">Welcome Kit nuevos</td>
  <td class="responsive-ocult">98</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult">3</td>
  <td><img class="icon-people" src="images/woman.png"> 5 más</td>
  <td class="estado-color responsive-ocult">1</td>
  <td>
   <div class="action2"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>
<tr class="dos">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="dos">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>

  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">1</td>
  <td class="responsive-ocult"></td>
    <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="dos">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">2</td>
  <td class="responsive-ocult"></td>
    <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="dos">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>

  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">4</td>
  <td class="responsive-ocult"></td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA DOS DE TABLA -->


<!-- FILA TRES DE TABLA -->
<tr class="visible">
  <td class="estado-color" data-toggle="modal" data-target="#myModal4" class="sol-pd estado-color cursor" id="grafica-det">Flyer Edo de Cuenta BBVA</td>
  <td class="responsive-ocult">34</td>
  <td>5347</td>
  <td class="responsive-ocult">12 May</td>
  <td class="responsive-ocult">3</td>
  <td><img class="icon-people" src="images/woman.png"> 1 más</td>
  <td class="estado-color responsive-ocult">2</td>
  <td>
   <div class="action3"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>

<tr class="tres">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="tres">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">3</td>
  <td class="responsive-ocult"></td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="tres">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">5</td>
  <td class="responsive-ocult"></td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="tres">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">1</td>
  <td class="responsive-ocult"></td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA TRES DE TABLA -->


<!-- FILA cuatro DE TABLA -->
<tr class="visible">
  <td class="estado-color" data-toggle="modal" data-target="#myModal5" class="sol-pd estado-color cursor">Cuenta BBVA</td>
  <td class="responsive-ocult">34</td>
  <td>5347</td>
  <td class="responsive-ocult">12 May</td>
  <td class="responsive-ocult">3</td>
  <td><img class="icon-people" src="images/woman.png"> 1 más</td>
  <td class="estado-color responsive-ocult">2</td>
  <td>
   <div class="action4"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>

<tr class="cuatro">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="cuatro">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">3</td>
  <td class="responsive-ocult"></td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="cuatro">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">5</td>
  <td class="responsive-ocult"></td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="cuatro">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">1</td>
  <td class="responsive-ocult"></td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA cuatro DE TABLA -->

<!-- FILA SINCO DE TABLA -->
<tr class="visible">
  <td class="estado-color" data-toggle="modal" data-target="#myModal6" class="sol-pd estado-color cursor">BBVA</td>
  <td class="responsive-ocult">34</td>
  <td>5347</td>
  <td class="responsive-ocult">12 May</td>
  <td class="responsive-ocult">3</td>
  <td><img class="icon-people" src="images/woman.png"> 1 más</td>
  <td class="estado-color responsive-ocult">2</td>
  <td>
   <div class="action5"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>

<tr class="sinco">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="sinco">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">3</td>
  <td class="responsive-ocult"></td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="sinco">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">5</td>
  <td class="responsive-ocult"></td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="sinco">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">1</td>
  <td class="responsive-ocult"></td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA SINCO DE TABLA -->



<!-- FILA SEIS DE TABLA -->
<tr class="visible">
  <td class="estado-color" data-toggle="modal" data-target="#myModal7" class="sol-pd estado-color cursor">Cuenta</td>
  <td class="responsive-ocult">34</td>
  <td>5347</td>
  <td class="responsive-ocult">12 May</td>
  <td class="responsive-ocult">3</td>
  <td><img class="icon-people" src="images/woman.png"> 1 más</td>
  <td class="estado-color responsive-ocult">2</td>
  <td>
   <div class="action6"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>

<tr class="seis">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/add-icon.png"></a></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="seis">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">3</td>
  <td class="responsive-ocult"></td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="seis">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td class="responsive-ocult">063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">5</td>
  <td class="responsive-ocult"></td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="seis">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td class="responsive-ocult">603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult">1</td>
  <td class="responsive-ocult"></td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA SEIS DE TABLA -->


</table>
</div>
</section>


</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include 'includes/modal2.php'; ?>
<?php include 'includes/modal3.php'; ?>
<?php include 'includes/modal4.php'; ?>
<?php include 'includes/modal5.php'; ?>
<?php include 'includes/modal6.php'; ?>
<?php include 'includes/modal7.php'; ?>


<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/chartist.js"></script>

<!--modal-->

<script>
function cargaAsin(){
    new Chartist.Pie('.chart', {
  series: [62],
  labels: ['62%']

}, {
  donut: true,
  donutWidth: 10,
  startAngle: 0,
  total: 100
});
 }

$('#grafica-det').on('click', function(){
  setTimeout('cargaAsin()', 500);
})


</script>

<script>
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })
</script>

<!-- scrip tablas -->
<script>
  $(".action").click(function(){
    $(".uno").slideToggle();
  })
  $(".action2").click(function(){
    $(".dos").slideToggle();
  })
  $(".action3").click(function(){
    $(".tres").slideToggle();
  })

   $(".action4").click(function(){
    $(".cuatro").slideToggle();
  })

    $(".action5").click(function(){
    $(".sincos").slideToggle();
  })

        $(".action6").click(function(){
    $(".seis").slideToggle();
  })

                $(".action7").click(function(){
    $(".siete").slideToggle();
  })


</script>
<!--cierre scrip tablas -->


<!-- script formulario producto ocultando cosas -->
<script>
  $('#opciones').on('change',function(){
    var valor = $(this).val();

    if (valor == 1) {
      $('.data1').show();
    } else if (valor == 2) {
      $('.data1').hide()
      $('.data2').show();

    }else if (valor == 0) {
      $('.data1 , data2').hide();
    }
  });

  function mostrarDatos(){
    var datoTabla = $(select).val();
  }
</script>
<script>
  $(document).ready(function(){
    $('.map1, .map2').hide();
  })
  $('.map-apar-1').on('click', function(){
    $('.map1').toggle();
  })
  $('.map-apar-2').on('click', function(){
    $('.map2').toggle();
  })
</script>
</body>
</html>