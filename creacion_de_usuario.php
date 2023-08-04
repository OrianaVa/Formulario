<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Creación de usuario</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="plugins/images/Logosv.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
    <!--This page JavaScript -->
    <!--chartis chart-->
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
                                <span class="hide-menu">Creacion de Usuario</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Modificacionusuario.php"
                                aria-expanded="false">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                                <span class="hide-menu">Modificacion de usuario</span>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Creación de Usuario</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
            </div>
            <div id="mensaje">

            </div>
            <!-- /.col-lg-12 -->
            <!-- Formulario -->

            <ul class="navbar-nav ms-4 d-flex align-items-center"></ul>
            <div class="container-fluid">
                <form class="row g-4" action="" method="POST" id="crearusuario">
                    <div class="col-4">
                        <input type="text" name="nombre" class="form-control" id="nombre" value="" placeholder="Nombre"
                            required>
                    </div>
                    <div class="col-4">
                        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido"
                            required>
                    </div>
                    <div class="col-4">
                        <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Cédula"
                            required>
                    </div>

                    <div class="col-4">
                        <label class="date" date="fecha_nac">Fecha de Ingreso</label>
                        <input name="fecha_nac" id="fecha_nac" class="form-control" type="date">
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label class="nroempleado">N° empleado</label>
                            <input id="nroempleado" type="number" name="nroempleado" class="form-control"
                                placeholder="N° empleado">
                        </div>
                    </div>
                    <div class="col-4">
                        <label name="grupo_acceso" class="grupo_acceso">Grupo de Acceso</label>
                        <select class="form-select" name="grupo_acceso" id="grupo_acceso">
                            <option value="0">Seleccione</option>
                            <option value="1">GRUPO A-PRESIDENCIA Y BCP</option>
                            <option value="2">GRUPO B-EJECUTIVOS</option>
                            <option value="3">GRUPO D-PERSONAL</option>
                            <option value="4">GRUPO S1-SISTEMA SEGVEN</option>
                            <option value="5">GRUPO S2-SISTEMA CASAI</option>
                            <option value="6">NINGUNO-NINGUNO</option>
                        </select>
                    </div>
                    <!--El cargo depende de la Unidad Organizativa -->
                    <div class="col-4">
                        <label name="grupo_acceso" class="grupo_acceso">Unidad organizativa</label>
                        <select class="form-select" name="unidad_organizativa" id="unidad_organizativa">
                            <option value="0">Seleccione</option>
                            <option value="1">Cosultoria Juridica</option>
                            <option value="2">Direccion comercial</option>
                            <option value="3">Dirección de Finanzas Corporativas</option>
                        </select>
                        <select class="form-select">
                            <option selected>Seleccione si no tiene departamento asociado</option>
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
                    <div name="" class="col-4">
                        <label name="ubicacion" class="ubicacion">Ubicacion</label>
                        <select name="ubicacion" class="form-select" id="ubicacion">
                            <option value="0">Seleccione</option>
                            <option value="1">Ubicacion</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="condicion_laboral" class="condicion_laboral">Condicion Laboral</label>
                        <select class="form-select" name="condicion_laboral" id="condicion_laboral">
                            <option value="0">Seleccione</option>
                            <option value="1">Fijo</option>
                            <option value="2">Outsourcing</option>
                            <option value="3">Pasante</option>
                            <option value="3">Temporal</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label class="date" date="ingreso">Fecha de Ingreso</label>
                        <input name="fecha_ingreso" id="fecha_ingreso" class="form-control" type="date">
                    </div>
                    <div class="col-4">
                        <label class="date" date="Termino">Fecha de Termino</label>
                        <input name="fecha_termino" id="fecha_termino" class="form-control" type="date">
                    </div>
                    <div class="col-4">
                        <label name="medio_captacion" class="medio_captacion">Medio Captacion</label>
                        <select class="form-select" name="cd_medio_captacion" id="cd_medio_captacion">
                            <option value="0">Seleccione</option>
                            <option value="1">Internet</option>
                            <option value="2">Recomendación Empleado</option>
                            <option value="3">Pasante</option>
                            <option value="3">Temporal</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="cuenta_correo" class="cuenta_correo">Cuenta de Correo</label>
                        <select name="cuenta_correo" class="form-select" id="cuenta_correo">
                            <option value="0">Seleccione</option>
                            <option value="1">Ambos</option>
                            <option value="2">Interno</option>
                            <option value="3">Externo</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="internet" class="internet">Internet</label>
                        <select name="internet" class="form-select" id="internet">
                            <option value="0">Seleccione</option>
                            <option value="1">SI</option>
                            <option value="2">NO</option>
                        </select>
                    </div>


                    <label class="acceso_telefonico">Acceso Teléfonico
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="acceso_telefonico" id="acceso_telefonico" type="radio"
                                value="1">SI
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="acceso_telefonico" id="acceso_telefonico"
                                    type="radio" value="2">NO
                            </div>
                        </div>
                        <label class="entrada">Entrada</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name='entrada' id="entrada" value="1">Si
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name='entrada' id="entrada" value="2">No
                            </div>
                        </div>

                        <label class="salida">Salida</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="salida" id="salida" value="1">Si
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="salida" id="salida" value="2">No
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sal_local" name="sal_local"
                            value="1">
                            <label class="form-check-label" for="inlineCheckbox1">Local</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sal_nacional" name="sal_nacional"
                            value="1">
                            <label class="form-check-label" for="inlineCheckbox2">Nacional</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="sal_internacional"
                                id="sal_internacional"value="1">
                            <label class="form-check-label" for="inlineCheckbox3">Internacional</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="celular" id="celular" value="1">
                            <label class="form-check-label" for="inlineCheckbox3">Celular</labeL>
                        </div>
                    </label>
                    <!-- Depende de la opcion Requiero Usuario en Rector-->
                    <div class="form-check form-check-inline">
                        <input name="requiere_usuario_rector" class="form-check-input" type="checkbox"
                            id="requiere_usuario_rector" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Requiero Usuario en Rector</label>
                    </div>
                    <div class="col-4">
                        <label name="nivel_autorizacion" class="nivel_autorizacion">Nivel de Autorización</label>
                        <select name="nivel_autorizacion" class="form-select" id="nivel_autorizacion">
                            <option value="0">Seleccione</option>
                            <option value="1">Elaborador 1</option>
                            <option value="2">Elaborador 2</option>
                            <option value="3">Elaborador 3</option>
                            <option value="4">Elaborador 4</option>
                            <option value="5">Gerente Técnico</option>
                            <option value="6">Jefe de departamento</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="categoria" class="categoria">Categoría</label>
                        <select name="categoria" class="form-select" id="categoria">
                            <option value="0">Seleccione</option>
                            <option value="1">Supervisor</option>
                            <option value="2">Analista</option>
                            <option value="3">Gerente Técnico</option>
                            <option value="4">Sistema y Tecnología</option>
                            <option value="5">Presidencia</option>
                            <option value="6">Producción Sucursales</option>
                        </select>
                    </div>
                    <!--end-->

                    <label for="text">Datos Adicionales para el Perfil en Intranet</label>
                    <div class="col-4">
                        <label name="agenda_comercial" class="agenda_comercial">Agenda Comercial</label>
                        <select name="intranet_agenda_comercial" class="form-select" id="intranet_agenda_comercial">
                            <option value="0">Seleccione</option>
                            <option value="1">NO</option>
                            <option value="2">SI</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="intranet_dataware" class="intranet_dataware">Data WareHouse</label>
                        <select name="intranet_dataware" class="form-select" id="intranet_dataware">
                            <option value="0">Seleccione</option>
                            <option value="1">NO</option>
                            <option value="2">SI</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label name="intranet_hd" class="intranet_hd">HelpDesk</label>
                        <select name="intranet_hd" class="form-select" id="intranet_hd">
                            <option selected>HelpDesk</option>
                            <option value="1">NO</option>
                            <option value="2">SI</option>
                        </select>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="intranet_admin" id="intranet_admin" class="form-check-input" type="checkbox"
                            value="1">
                        <label class="form-check-label" for="inlineCheckbox1">Administrador
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Observaciones:</span>
                        <textarea name="intranet_observaciones" id="intranet_observaciones" class="form-control" aria-label="With textarea"></textarea>
                    </div>

            </div>
            <div class="d-flex justify-content-center" id="boton">
                <button class="btn btn-outline-primary" type="submit" id="btn-registrar"
                    name="btn-registrar">Enviar</button>
                <a class="btn btn-outline-primary" button type="button">Volver</a>


            </div>
            </form>

        </div>
    </div>




    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn-registrar").click(function () {
                event.preventDefault();
                var datos = {
                    nombre: document.getElementById("nombre").value,
                    apellido: document.getElementById("apellido").value,
                    cedula: document.getElementById("cedula").value,
                    fecha_nac: document.getElementById("fecha_nac").value,
                    nroempleado: document.getElementById("nroempleado").value,
                    grupo_acceso: document.getElementById("grupo_acceso").value,
                    unidad_organizativa: document.getElementById("unidad_organizativa").value,
                    cargo: document.getElementById("cargo").value,
                    ubicacion: document.getElementById("ubicacion").value,
                    condicion_laboral: document.getElementById("condicion_laboral").value,
                    fecha_ingreso: document.getElementById("fecha_ingreso").value,
                    fecha_termino: document.getElementById("fecha_termino").value,
                    cd_medio_captacion: document.getElementById("cd_medio_captacion").value,
                    acceso_telefonico: document.getElementById('acceso_telefonico').value,
                    entrada: document.getElementById("entrada").value,
                    salida: document.getElementById("salida").value,
                    sal_local: document.getElementById("sal_local").value,
                    sal_nacional: document.getElementById('sal_nacional').value,
                    sal_internacional: document.getElementById('sal_internacional').value,
                    celular: document.getElementById('celular').value,
                    cuenta_correo: document.getElementById("cuenta_correo").value,
                    internet: document.getElementById("internet").value,
                    requiere_usuario_rector: document.getElementById("requiere_usuario_rector").value,
                    nivel_autorizacion: document.getElementById("nivel_autorizacion").value,
                    categoria: document.getElementById("categoria").value,
                    intranet_agenda_comercial: document.getElementById("intranet_agenda_comercial").value,
                    intranet_dataware: document.getElementById("intranet_dataware").value,
                    intranet_hd: document.getElementById("intranet_hd").value,
                    intranet_admin: document.getElementById("intranet_admin").value,
                    intranet_observaciones: document.getElementById('intranet_observaciones').value
                };

                if (datos.nombre === "" || datos.apellido === "" || datos.cedula === "" || datos.nroempleado === ""||
                datos.fecha_nac === "") {
                    Swal.fire({
                        title: 'Por favor, complete todos los campos obligatorios',
                        icon: 'error',
                    });
                } else {
                    var nombre = document.getElementById("nombre").value;
                    Swal.fire({
                        title: '¿Desea registrar al usuario ' + nombre + '?',
                        showDenyButton: true,
                        showCancelButton: false,
                        confirmButtonText: 'Registrar',
                        denyButtonText: `Cancelar`,
                        ondeny: function () {
                            Swal.fire('Cancelado', '', 'cancel');
                            event.preventDefault();
                            return false;
                        },
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                type: 'POST',
                                url: 'Templates/crear_usuario.php',
                                dataType: 'html',
                                data: datos,
                                success: function (data) {
                                    Swal.fire('Registro guardado!', '', 'success');
                                }
                            });
                        }
                    });
                }
            });
        });


        /* $.ajax({
               type: 'POST',
               url: 'Templates/crear_usuario.php',
               dataType: 'html',
               data: datos,
               success: function (data) {
                   window.alert('¡Usuario registrado con éxito!');
               },
           });
       var resultado = window.confirm(`¿Desea registrar al usuario "${nombre}"?`);
       console.log(resultado)
       if (resultado === true) {
         
       } else {
           event.preventDefault();
           // The user cancelled the registration
       }
    });
    });*/

    </script>

</body>

</html>