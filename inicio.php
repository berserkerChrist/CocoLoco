<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap 4/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap 4/adicional.css">
  <link href="css/uikit.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

  <!--
  <div class="container-fluid text-center espacioHeight">
    proyecto Desarrollado por 8B1 con coquiux
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top my-2">
    <a class="navbar-brand" href="#">
      <h4 class="text-black font-weight-bold" style="padding-left: 2rem;">COCO</h4>
      <h6 class="text-black font-weight-bold" style="padding-left: 1rem;">Hola, username</h6>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor02" style="">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#">Inicio</a>
        </li>
        <li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">Departamentos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Link 2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link font-weight-bold">Link</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link font-weight-bold">Link</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#" data-toggle="modal" data-target="#modalRegistro"><img src="imagenes/account_circle_black.png" alt=""> Mi cuenta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="#" data-toggle="modal" data-target="#modalCarrito"> <img src="imagenes/shopping_cart_black.png" alt=""> Carrito</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="¿Qué buscamos?" name="buscador">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><img src="imagenes/search_black.png" width="30" height="30"></button>
      </form>
    </div>
  </nav>
-->
  <div class="container-fluid text-center espacioHeight">
    proyecto Desarrollado por 8B1 con coquiux
    <a href="#" data-toggle="modal" data-target="#modalProducto">hola</a>
  </div>

  <!--barra inicio-->
  <div class="section-header sticky-top bg-white">
    <section class="header-main">
      <div class="container sticky-top">
        <div class="row align-items-center">
          <div class="col-lg-5-24 col-sm-5 col-4">
            <div class="brand-wrap">
              <img class="logo" src="">
              <h2 class="logo-text">CoCo</h2>
            </div>
            <!-- brand-wrap.// -->
          </div>
          <div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link font-weight-bold" href="#">Inicio</a>
              </li>
              <li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbardrop" data-toggle="dropdown">Departamentos</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link 3</a>
                  </div>
                </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link font-weight-bold">Link</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link font-weight-bold">Link</a>
              </li>
            </ul>
            <!-- search-wrap .end// -->
          </div>
          <!-- col.// -->
          <div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
            <div class="d-flex justify-content-end">
              <div class="widget-header">
                <small class="title text-muted">¡Hola, invitado!</small>
                <div>
                  <a href="#" class="text-dark" data-toggle="modal" data-target="#modalModificar">Login</a>
                  <span class="dark-transp"> | </span>
                  <a href="#" class="text-dark">Crear cuenta</a>
                </div>
              </div>
              <a href="#" class="widget-header border-left pl-3 ml-3" data-toggle="modal" data-target="#modalCarrito">
                <div class="icontext">
                  <div class="icon-wrap icon-sm round border"><i class="fa fa-shopping-cart text-dark"></i></div>
                </div>
                <span class="badge badge-pill badge-danger notify">0</span>
              </a>
            </div>
            <!-- widgets-wrap.// -->
          </div>
          <!-- col.// -->
        </div>
        <!-- row.// -->
      </div>
      <!-- container.// -->
    </section>
    <!-- header-main .// -->
  </div>
  <!--barra inicio-->

  <!--Carrusel-->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/gray.jpg" alt="Los Angeles" width="100%" height="800">
      </div>
      <div class="carousel-item">
        <img src="imagenes/gray.jpg" alt="Chicago" width="100%" height="800">
        <div class="carousel-caption">
          <h3>nombre</h3>
          <p>Descripcion de producto</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/gray.jpg" alt="New York" width="100%" height="800">
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!--Carrusel-->

  <!--modalRegistro-->
  <div class="modal" id="mo+dalRegistro">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Inicia sesión o registrate</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="card w-100 mx-auto">
            <div class="card-header">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#login">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#signup">Registrarse</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div id="login" class="container tab-pane active">
                  <br>
                  <form>
                    <div class="form-group">
                      <label for="email">Correo electrónico:</label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Contraseña:</label>
                      <input type="password" class="form-control" name="contraseña" required>
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="checkbox"> Recordarme
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                  </form>
                </div>
                <div id="signup" class="container tab-pane fade">
                  <br>
                  <form>
                    <div class="form-row">
                      <div class="col-md-8 mb-3">
                        <label for="mail">Correo electrónico:</label>
                        <input type="email" class="form-control" name="emailRegistro" id="mail" required>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="nombre">Nombre de usuario:</label>
                        <input type="text" class="form-control" name="nombreUser" id="nombreUser" required>
                      </div>
                    </div>
                    <div class="form-row" style="padding-top: 1.2rem;">
                      <div class="col">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" class="form-control" name="nombreUsuario" id="nombre" required>
                      </div>
                      <div class="col">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" required>
                      </div>
                    </div>
                    <div class="form-row" style="padding-top: 1.2rem;">
                      <div class="col">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseñaRegistro" id="pwd" required>
                      </div>
                      <div class="col">
                        <label for="pwd2">Repertir contraseña:</label>
                        <input type="password" class="form-control" name="contraseñaRegistro2" id="pwd2" required>
                      </div>
                    </div>
                    <h6 class="text-primary" style="padding-top:1.22rem;">Domicilio</h6>
                    <hr>
                    <div class="form-row">
                      <div class="col-md-4 mb-2">
                        <label for="streetReg">Calle</label>
                        <input type="text" class="form-control" id="streetReg" name="calle" required>
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="numCalleReg">Numero</label>
                        <input type="text" class="form-control" id="numCalleReg" name="numeroCalle" required>
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="formSelect0">Colonia</label>
                        <select class="form-control" id="formSelect0" name="colonia" required>
                          <option value=""></option>
                          <option value="0">La chida</option>
                          <option value="1">La chafa</option>
                          <option value="2">La fresa</option>
                          <option value="3">La naca</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="cpReg">Código postal</label>
                        <input type="text" class="form-control" id="cpReg" name="codigoPostal" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="button">Registrar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!--modalRegistro -->

  <!--modalModificar-->
  <div class="modal" id="modalModificar">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modifica tus datos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="card w-100 mx-auto">
            <div class="card-header">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#saldo">Agregar saldo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#datos">Modificar mis datos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#modPassword">Modificar contraseña</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div id="saldo" class="container tab-pane active">
                  <h6 class="text-primary">Ingresa tu contraseña y el saldo deseado</h6>
                  <hr>
                  <form>
                    <div class="form-group">
                      <label for="pwd">Contraseña:</label>
                      <input type="password" class="form-control" id="pwd" name="contraseña" required>
                    </div>
                    <div class="form-group">
                      <label for="saldoNew">Saldo nuevo:</label>
                      <input type="text" class="form-control" id="saldoNew" name="saldoNuevo">
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="checkbox" required>Autorizar
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar saldo</button>
                  </form>
                </div>
                <div id="datos" class="container tab-pane fade">
                  <form>
                    <h6 class="text-primary">Datos personales</h6>
                    <hr>
                    <div class="form-row espacioHeightsm">
                      <div class="col">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" class="form-control" name="nombreUsuario" id="nombre" placeholder="consulta para nombre">
                      </div>
                      <div class="col">
                        <label for="apellidoMod">Apellido:</label>
                        <input type="text" class="form-control" name="apellidoPatUsuario" id="apellidoMod" placeholder="consulta para AP">
                      </div>
                      <div class="col">
                        <label for="tel">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="tel" placeholder="consulta para tel">
                      </div>
                    </div>
                    <h6 class="text-primary">Domicilio</h6>
                    <hr>
                    <div class="form-row espacioHeightsm">
                      <div class="col-md-4 mb-2">
                        <label for="street">Calle</label>
                        <input type="text" class="form-control" id="street" name="calle" placeholder="consulta para calle">
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="numCalle">Numero</label>
                        <input type="text" class="form-control" id="numCalle" name="numeroCalle" placeholder="consulta para numero">
                      </div>
                      <div class="col-md-4 mb-2">
                        <label for="formSelect0">Colonia</label>
                        <select class="form-control" id="formSelect0" name="colonia" required>
                          <option value=""></option>
                          <option value="0">La chida</option>
                          <option value="1">La chafa</option>
                          <option value="2">La fresa</option>
                          <option value="3">La naca</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-2">
                        <label for="cp">Código postal</label>
                        <input type="text" class="form-control" id="cp" name="codigoPostal" placeholder="consulta para CP">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="button">Modificar</button>
                  </form>
                </div>
                <div id="modPassword" class="container tab-pane">
                  <form>
                    <div class="form-row espacioHeightsm">
                      <div class="col-md-6 -mb-3">
                        <label for="passOld">Contraseña antigua:</label>
                        <input type="password" class="form-control" name="modPasswordOld" id="passOld">
                      </div>
                    </div>
                    <h6 class="text-primary">Escribe tu nueva contraseña</h6>
                    <hr>
                    <div class="form-row espacioHeightsm">
                      <div class="col">
                        <label for="newPwd">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasenaMod" id="newPwd">
                      </div>
                      <div class="col">
                        <label for="newPwd2">Repertir contraseña:</label>
                        <input type="password" class="form-control" name="contraseMod2" id="newPwd2">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!--modalModificar-->

  <!--modalCarrito-->
  <div class="modal" id="modalCarrito">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Carrito de compras</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th colspan="2">Producto</th>
                  <th>Descripcion </th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th colspan="2">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="#">
                      <img src="" alt="">Imagen
                    </a>
                  </td>
                  <td><a href="#">Tostadora</a>
                  </td>
                  <td>Mejor que la de abajo</td>
                  <td>
                    <input type="number" value="2" class="form-control">
                  </td>
                  <td>$0.00</td>
                  <td>$0.00</td>
                  <td><a href="#"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="#">
                      <img src="" alt="">Imagen
                    </a>
                  </td>
                  <td><a href="#">Omen</a>
                  </td>
                  <td>Mejor que la de arriba</td>
                  <td>
                    <input type="number" value="1" class="form-control">
                  </td>
                  <td>$0.00</td>
                  <td>$0.00</td>
                  <td><a href="#"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="5">Total</th>
                  <th colspan="2">$0.00</th>
                </tr>
              </tfoot>
            </table>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!--modalCarrito-->

  <div class="modal" id="modalProducto">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-xl-10 col-md-9 col-sm-12">


              <main class="card">
                <div class="row no-gutters">
                  <aside class="col-sm-6 border-right">
                    <article class="gallery-wrap">
                      <div class="img-big-wrap">
                        <div>
                          <a href="images/items/1.jpg" data-fancybox=""><img src="images/items/1.jpg"></a>
                        </div>
                      </div>
                      <!-- slider-product.// -->
                      <div class="img-small-wrap">
                        <div class="item-gallery"> <img src="images/items/1.jpg"></div>
                        <div class="item-gallery"> <img src="images/items/2.jpg"></div>
                        <div class="item-gallery"> <img src="images/items/3.jpg"></div>
                        <div class="item-gallery"> <img src="images/items/4.jpg"></div>
                      </div>
                      <!-- slider-nav.// -->
                    </article>
                    <!-- gallery-wrap .end// -->
                  </aside>
                  <aside class="col-sm-6">
                    <article class="card-body">
                      <!-- short-info-wrap -->
                      <h3 class="title mb-3">Original Version of Some product name</h3>

                      <div class="mb-3">
                        <var class="price h3 text-warning">
		                        <span class="currency">US $</span><span class="num">1299</span>
	                      </var>
                        <span>/per kg</span>
                      </div>
                      <!-- price-detail-wrap .// -->
                      <dl>
                        <dt>Description</dt>
                        <dd>
                          <p>Here goes description consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                        </dd>
                      </dl>
                      <dl class="row">
                        <dt class="col-sm-3">Model#</dt>
                        <dd class="col-sm-9">12345611</dd>

                        <dt class="col-sm-3">Color</dt>
                        <dd class="col-sm-9">Black and white </dd>

                        <dt class="col-sm-3">Delivery</dt>
                        <dd class="col-sm-9">Russia, USA, and Europe </dd>
                      </dl>
                      <div class="rating-wrap">

                        <ul class="rating-stars">
                          <li style="width:80%" class="stars-active">
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </li>
                          <li>
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </li>
                        </ul>
                        <div class="label-rating">132 reviews</div>
                        <div class="label-rating">154 orders </div>
                      </div>
                      <!-- rating-wrap.// -->
                      <hr>
                      <div class="row">
                        <div class="col-sm-5">
                          <dl class="dlist-inline">
                            <dt>Quantity: </dt>
                            <dd>
                              <select class="form-control form-control-sm" style="width:70px;">
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                              </select>
                            </dd>
                          </dl>
                          <!-- item-property .// -->
                        </div>
                        <!-- col.// -->
                        <div class="col-sm-7">
                          <dl class="dlist-inline">
                            <dt>Size: </dt>
                            <dd>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                <span class="form-check-label">SM</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                <span class="form-check-label">MD</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
                                <span class="form-check-label">XXL</span>
                              </label>
                            </dd>
                          </dl>
                          <!-- item-property .// -->
                        </div>
                        <!-- col.// -->
                      </div>
                      <!-- row.// -->
                      <hr>
                      <a href="#" class="btn  btn-warning"> <i class="fa fa-envelope"></i> Contact Supplier </a>
                      <a href="#" class="btn  btn-outline-warning"> Start Order </a>
                      <!-- short-info-wrap .// -->
                    </article>
                    <!-- card-body.// -->
                  </aside>
                  <!-- col.// -->
                </div>
                <!-- row.// -->
              </main>
              <!-- card.// -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-request bg padding-y-sm">
    <div class="container">
      <header class="section-heading heading-line">
        <h4 class="title-section bg text-uppercase">Productos recomendados</h4>
      </header>

      <div class="row">
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>

              <div class="price-wrap">
                <span class="price-new">$1280</span>
                <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/4.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/5.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/6.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
      </div>

      <div class="row">
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/3.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>

              <div class="price-wrap">
                <span class="price-new">$1280</span>
                <del class="price-old">$1980</del>
              </div>
              <!-- price-wrap.// -->

            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/4.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/5.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
        <div class="col-md-3">
          <figure class="card card-product">
            <div class="img-wrap"> <img src="images/items/6.jpg"></div>
            <figcaption class="info-wrap">
              <h6 class="title "><a href="#">nombre producto</a></h6>
              <div class="price-wrap">
                <span class="price-new">$280</span>
              </div>
              <!-- price-wrap.// -->
            </figcaption>
          </figure>
          <!-- card // -->
        </div>
        <!-- col // -->
      </div>
      <!-- row.// -->
    </div>
    <!-- container // -->
  </section>

  <div class="container-fluid bg-white">
    <div class="row justify-content-center">
      <h4 class="card-title">Desarrollado por 8B1</h4>
    </div>
  </div>

  <footer class="container-fluid text-center" style="padding-top: 1rem;">
    <p>Copyright (c) 2018 Diseñado por 8B1.</p>
  </footer>

</body>

</html>
