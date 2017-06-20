
<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>
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
            <li><a href="#">CIM G</a></li>
            <li><a href="#">CIM G</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-5">
       <div class="marge-icons">
        <img class="add-person" src="images/woman.png">
        <a href="#"><img class="add-icon" src="images/add-icon.png"></a>
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
      <div class="col-md-4 col-xs-12">
        <!-- Button trigger modal -->
        <img  data-toggle="modal" data-target="#myModal" class="sol-pd" src="images/solicitar-pd.png">
      </div>
    </div>
  </section>

  <!-- Modal -->
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
              <label for="tipo" class="etiquetas">Tipo:</label>
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
<!-- TERMINA Modal -->


<section class="section3">
  <div class="panel panel-default">
    <table class="table">
      <tr class="blue-color">
        <td>Nombre del Producto</td>
        <td >No. Referencia</td>
        <td class="responsive-ocult">Fecha de Creación</td>
        <td class="responsive-ocult">Versiones</td>
        <td >Usuarios</td>
        <td ></td>
        <td class="responsive-ocult"></td>
      </tr>
      <!-- FILA UNO DE TABLA principal -->
      <tr class="visible">
        <td data-toggle="modal" data-target="#myModal2" class="sol-pd estado-color cursor">Estado de Cuenta 000000</td>
        <td>603547</td>
        <td class="responsive-ocult">29 Abr</td>
        <td class="responsive-ocult">1</td>
        <td><img src="images/man.png"> 3 más</td>
        <td class="estado-color responsive-ocult">4 pedidos (s)</td>
        <td>
         <div class="action"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
       </td>
     </tr>

     <!-- Modal2 -->
     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="dropdown">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <button  id="dLabel" class="cim-generica bt-azul" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Edo de Cuenta BBVA_r08
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
              <li><a href="#">CIM G</a></li>
              <li><a href="#">CIM G</a></li>
            </ul>
          </div>
        </div>
        <div class="modal-body">
        
          <div class="body-proyecto">
            <div class="estado actual e-1"><img class="status" src="./images/status-1.png" alt=""></div>
            <div class="estado e-2"><img class="status" src="./images/status-2.png" alt=""></div>
            <div class="estado e-3"><img class="status" src="./images/status-3.png" alt=""></div>
            <div class="estado e-4"><img class="status" src="./images/status-4.png" alt=""></div>
            <div class="estado e-5"><img class="status" src="./images/status-5.png" alt=""></div>
            <div class="estado e-6"><img class="status" src="./images/status-6.png" alt=""></div>
            <div class="line"></div>
            <br><br><br>
          </div>

          <h4>Últimos archivos</h4>
          <ul>
            <li class="fav">
            <br>
              <div class="fav-img"><img src="./images/estadodecuenta.jpg" alt=""></div>
              <div class="fav-text">
                <h6><a href="#">Edo de Cuenta BBVA r08.pdf</a></h6>
                <p>Enviado por: Karen Castañeda
                  <br></span>14 May. a las 08:50</p>
                </div>
                <div class="icons-product"><a href="#"><img class="eye" src="images/icon-eye.png"></a></div>
                <div class="icons-product"><a href="#"><img class="eye" src="images/icon-msn.png"></a></div>

                <div class="icons-product"><a href="#" class="buton-estado"><button class="buton-estado"> • No</button></a></div>
                <div class="icons-product"><a href="#" class="buton-estado"><button class="buton-estado"> • Si</button></a></div>
              </li>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <ul>
                    <li class="fav">
                               <br>
                      <div class="fav-img"><img src="./images/estadodecuenta.jpg" alt=""></div>
                      <div class="fav-text">
                        <h6><a href="#">Edo de Cuenta BBVA r08.pdf</a></h6>
                        <p>Enviado por: Karen Castañeda
                          <br></span>14 May. a las 08:50</p>
                        </div>
                        <div class="icons-product"><a href="#"><img class="eye" src="images/icon-eye.png"></a></div>
                        <div class="icons-product"><a href="#"><img class="eye" src="images/icon-msn.png"></a></div>
                        <div class="icons-product"><a href="#" class="buton-estado"><button class="buton-estado"> • No</button></a></div>
                        <div class="icons-product"><a href="#" class="buton-estado"><button class="buton-estado"> • Si</button></a></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                  </div>
                  <div class="panel">
                    <div class="" role="tab" id="headingTwo">
                      <br>
                      <h4 class="panel-title">
                        <a class="collapsed ver-mas-archivos" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Ver todos
                        </a>
                        <br><br>
                      </h4>
                    </div>

                  </div>
                </ul>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <h3>Comentarios</h3>
                        <br>
                        <div class="col-md-1"><img src="images/woman.png"></div>
                        <div class="col-md-3">Evelin Aguilar</div>
                        <div class="col-md-4">10 May a las 14:50</div>
                        <br><br>
                        <div class="col-md-12"><b>Comentario para: </b> <b style="color:#00aeef;">Priority Kit</b> hombre r08.pdf Revisado el archivo. Sólo una observación: poner el Bold la personalización del frente del archivo.
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <br>
                            <div class="col-md-8 col-sm-12">
                              <form>
                                <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Comenta aquí ..." id="email">
                                </div>
                              </form>
                            </div>
                            <div class="col-md-4 col-sm-12 margin-tp">
                              <a class="coment-estadocuenta" href="#">Comentar</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <a class="collapsed ver-comentarios" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Ver 13 comentarios más
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse color-collaps" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <div class="col-md-1"><img src="images/woman.png"></div>
                            <div class="col-md-3">Evelin Aguilar</div>
                            <div class="col-md-4">10 May a las 14:50</div>
                            <br><br>
                            <div class="col-md-12"><b>Comentario para: </b> <b style="color:#00aeef;">Priority Kit</b> hombre r08.pdf Revisado el archivo. Sólo una observación: poner el Bold la personalización del frente del archivo.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </ul>
  </div>
</div>
<!-- TERMINA Modal2 -->





<tr class="uno">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/solicitar-pedido.png"></a></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="uno">
  <td class="estado-color">Estado de Cuenta BBVA </td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td class="responsive-ocult"> 5 más</td>
  <td class="responsive-ocult">1 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>



<tr class="uno">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td class="responsive-ocult"> 1 más</td>
  <td class="responsive-ocult">2 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="uno">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td>603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td class="responsive-ocult"> 3 más</td>
  <td class="responsive-ocult">4 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!-- TERMINA FILA UNO DE TABLA -->

<!-- FILA DOS DE TABLA -->
<tr class="visible">
  <td class="estado-color">Welcome Kit nuevos 000000</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td class="responsive-ocult">3</td>
  <td ><img src="images/woman.png"> 5 más</td>
  <td class="estado-color responsive-ocult">1 pedido (s)</td>
  <td>
   <div class="action2"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>
<tr class="dos">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/solicitar-pedido.png"></a></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="dos">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td class="responsive-ocult"> 5 más</td>
  <td class="responsive-ocult">1 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="dos">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td class="responsive-ocult"> 1 más</td>
  <td class="responsive-ocult">2 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="dos">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td>603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td class="responsive-ocult"> 3 más</td>
  <td class="responsive-ocult">4 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA DOS DE TABLA -->

<!-- FILA TRES DE TABLA -->
<tr class="visible">
  <td class="estado-color">Flyer Edo de Cuenta BBVA 000000</td>
  <td>5347</td>
  <td class="responsive-ocult">12 May</td>
  <td class="responsive-ocult">3</td>
  <td><img src="images/woman.png"> 1 más</td>
  <td class="estado-color responsive-ocult">2 pedido (s)</td>
  <td>
   <div class="action3"><span class="glyphicon glyphicon-triangle-bottom"></span></div>
 </td>
</tr>

<tr class="tres">
  <td><h4 class="h4-ver">Versiones</h4><a href="#"><img class="sol-pedido" src="images/solicitar-pedido.png"></a></td>
  <td></td>
  <td></td>
  <td></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
  <td class="responsive-ocult"></td>
</tr>

<tr class="tres">
  <td class="estado-color">Estado de Cuenta BBVA</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="aprobar"><b class="bullet">•</b> Aprobación</button></td>
  <td class="responsive-ocult"> 5 más</td>
  <td class="responsive-ocult">1 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="tres">
  <td class="estado-color">Estado de Cuenta B/N</td>
  <td>063547</td>
  <td class="responsive-ocult">02 Feb</td>
  <td><button class="entiempo"><b class="bullet-entiempo">•</b> En tiempo</button></td>
  <td class="responsive-ocult"> 1 más</td>
  <td class="responsive-ocult">2 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>

<tr class="tres">
  <td class="estado-color">RA Edo de Cta BBVA</td>
  <td>603547</td>
  <td class="responsive-ocult">27 Jun</td>
  <td><button class="detenido"><b class="bullet-detenido">•</b> Detenido</button></td>
  <td class="responsive-ocult"> 3 más</td>
  <td class="responsive-ocult">4 pedido (s)</td>
  <td><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></td>
</tr>
<!--TERMINA FILA TRES DE TABLA -->
</table>
</div>
</section>


</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<!--modal-->
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

</body>
</html>