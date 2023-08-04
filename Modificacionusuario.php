<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificación de usuario</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="plugins/images/Logosv.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/sweetalert2.all.js"></script>
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-justify-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="row justify-content-center" href="SVintranet.html">
                        <img src="plugins/images/Logosv.png" alt="Logosv.png" width="90px" height="80px" />
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                            href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-4 d-flex align-items-center">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="SVIntranet.php"
                                aria-expanded="false">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="creacion_de_usuario.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Creación de Usuario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Modificacionusuario.php"
                                aria-expanded="false">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                                <span class="hide-menu">Modificación de usuario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Desincorporación_Usuario.php" aria-expanded="false">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                                <span class="hide-menu">Desincorporación de usuario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Templates/logout.php"
                                aria-expanded="false">
                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                <span class="hide-menu">Salir</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Modificacion de Usuario</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-4 d-flex align-items-center"></ul>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h1 class="box-title">Solicitud de modificacion de Usuario</h1>
                        </div>
                    </div>
                </div>
                <form class="row g-6 justify-content-center">
                    <div class="col-md-4 center align-items-center">
                        <label text="Text">Por favor indique la cédula del usuario que desea modificar</label>
                        <input type="text" class="form-control" id="cedula" value="" placeholder="Cédula">
                        <div class="d-flex justify-content-center" id="btn-modificar">
                <button class="btn btn-outline-primary" type="submit" value="modify"  name="btn-modificar" id="btn-modificar">Enviar</button>
            </div>
                    </div>
                </form>
                <br>
                <h3>
                    <p class="text-center fw-bold">Datos de Usuario</p>
                </h3>
                <form class="row g-4">
                    <div class="col-4">
                        <label name="ubicacion" class="ubicacion">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="" placeholder="Nombre">
                    </div>
                    <div class="col-4">
                        <label name="ubicacion" class="ubicacion">Apellido</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                    </div>
                    <div class="col-4">
                        <label name="grupo_acceso" class="grupo_acceso">Unidad organizativa</label>
                        <select class="form-select" name="unidad_organizativa" id="unidad_organizativa">
                            <option value="0">Seleccione</option>
                            <option value="1">Cosultoria Juridica</option>
                            <option value="2">Direccion comercial</option>
                            <option value="3">Dirección de Finanzas Corporativas</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="grupo_acceso" class="grupo_acceso">Grupo de Acceso</label>
                        <select class="form-select" name="grupo_acceso" id="grupo_acceso">
                            <option value="0">Seleccione</option>
                            <option value="1">GRUPO A-PRECIDENCIA Y BCP</option>
                            <option value="2">GRUPO B-EJECUTIVOS</option>
                            <option value="3">GRUPO D-PERSONAL</option>
                            <option value="4">GRUPO S1-SISTEMA SEGVEN</option>
                            <option value="5">GRUPO S2-SISTEMA CASAI</option>
                            <option value="6">NINGUNO-NINGUNO</option>
                        </select>
                    </div>

                    <div name="" class="col-4">
                        <label name="ubicacion" class="ubicacion">Ubicacion</label>
                        <select name="ubicacion" class="form-select" id="ubicacion">
                            <option value="0">Seleccione</option>
                            <option selected>Ubicacion</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="cargo" class="cargo">Cargo</label>
                        <select class="form-select" name="cargo" id="cargo">
                            <option value="0">Seleccione</option>
                            <option value="1">Gerente de Riesgo y cumplimiento</option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>
                    <!--<label for="textoinline">Generar Mov. Interno <input type="checkbox" id="texto" />
                        <div class="col-4">
                    </label>
                    <select class="form-select">
                        <option selected>Seleccione</option>
                        <option value="1">Cordinador de contabilidad</option>
                        <option value="2">Promoción</option>
                        <option value="3">Transferencia</option>
                    </select>
            </div>

            <label for="texto">Reactivar Usuario <input type="checkbox" id="texto" /> </label>-->

            <div class="d-flex justify-content-center" id="boton">
                <button class="btn btn-outline-primary" type="submit" value="modify">Enviar</button>
                <a class="btn btn-outline-primary" button type="button">Volver</a>
            </div>
        </div>
        </form>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/sweetalert2.all.js"></script>


    <script type="text/javascript">
      $(document).ready(function () {
    $("#btn-modificar").click(function () {

        event.preventDefault();
        var cedula = document.getElementById("cedula").value;

        $.ajax({
            type: 'GET',
            url: 'verificarci.php',
            data: {
                cedula: cedula
            },
            success: function (data) {
                if (data === "1") {
                    // The ID is registered in the database, so we can proceed with the modification
                    Swal.fire('se procede a la modificación');

                    // Get the data from the database
                    $.ajax({
                        type: 'GET',
                        url: 'obtener_datos_modificar.php',
                        data: {
                            cedula: cedula
                        },
                        success: function (data) {
                            // The data is returned from the database
                            var datos = JSON.parse(data);

                            document.getElementById("nombre").value = datos.nombre;
                            document.getElementById("apellido").value = datos.apellido;
                            document.getElementById("unidad_organizativa").value = datos.unidad_organizativa;
                            document.getElementById("grupo_acceso").value = datos.grupo_acceso;
                            document.getElementById("ubicacion").value = datos.ubicacion;
                            document.getElementById("cargo").value = datos.cargo;

                        }
                    });
                } else {
                    alert('no se puede proceder con la modificación');
                }
            }
        });
    });
});
    </script>

</body>

</html>