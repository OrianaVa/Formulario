<?php
include_once("conexion.php");
$conexion = conectar();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST)) {
    $nombre = $_POST["nombre"] == '' ? null : $_POST["nombre"];
    $apellido = $_POST["apellido"] == '' ? null : $_POST["apellido"];
    $cedula = $_POST["cedula"] == '' ? null : $_POST["cedula"];
    $fecha_nac = $_POST["fecha_nac"];
    $nroempleado = $_POST["nroempleado"];
    $grupo_acceso = $_POST["grupo_acceso"];
    $unidad_organizativa = $_POST["unidad_organizativa"];
    $cargo = $_POST["cargo"] == '' ? null : $_POST["cargo"];
    $ubicacion = $_POST["ubicacion"];
    $condicion_laboral = $_POST["condicion_laboral"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $fecha_termino = $_POST["fecha_termino"];
    $cd_medio_captacion = $_POST["cd_medio_captacion"];
    $internet = $_POST["internet"];

    if (isset($_POST["acceso_telefonico"]))
      $acceso_telefonico = $_POST["acceso_telefonico"];
    else
      $acceso_telefonico = 0;
    if (isset($_POST["entrada"]))
      $entrada = $_POST["entrada"];
    else
      $entrada = 0;

    if (isset($_POST["salida"]))
      $salida = $_POST["salida"];
    else
      $salida = 0;

    if (isset($_POST["sal_local"]))
      $sal_local = $_POST["sal_local"];
    else
      $sal_local = 0;

    if (isset($_POST["sal_nacional"]))
      $sal_nacional = $_POST["sal_nacional"];
    else
      $sal_nacional = 0;

    if (isset($_POST["sal_internacional"]))
      $sal_internacional = $_POST["sal_internacional"];
    else
      $sal_internacional = 0;

    if (isset($_POST["celular"]))
      $celular = $_POST["celular"];
    else
      $celular = 0;
    $cuenta_correo = $_POST["cuenta_correo"];
    if (isset($_POST["requiere_usuario_rector"]))
      $requiere_usuario_rector = $_POST["requiere_usuario_rector"];
    else
      $requiere_usuario_rector = 0;
    $nivel_autorizacion = $_POST["nivel_autorizacion"];
    $categoria = $_POST["categoria"];
    $intranet_agenda_comercial = $_POST["intranet_agenda_comercial"];
    $intranet_dataware = $_POST["intranet_dataware"];
    $intranet_hd = $_POST["intranet_hd"];
    if (isset($_POST["intranet_admin"]))
      $intranet_admin = $_POST["intranet_admin"];
    else
      $intranet_admin = 0;
    if (isset($_POST["intranet_observaciones"]))
      $intranet_observaciones = $_POST["intranet_observaciones"];
    else
      $intranet_observaciones = 0;


   $sql = "INSERT INTO SOL_USUARIOS(
      sous_nombre,
      sous_apellido,
      sous_cedula,
      sous_fecha_nac,
      sous_nro_empleado,
      sous_grupo_acceso,
      sous_unidad_organizativa,
      sous_cargo,
      sous_ubicacion,
      sous_condicion_laboral,
      sous_fecha_ingreso,
      sous_fecha_termino,
      sous_cd_medio_captacion,
      sous_acceso_telefonico,
      sous_entrada,
      sous_salida,
      sous_sal_local,
      sous_sal_nacional,
      sous_sal_internacional,
      sous_celular,
      sous_cuenta_correo,
      sous_internet,
      sous_requiere_usuario_rector,
      sous_nivel_autorizacion,
      sous_categoria,
      sous_intranet_agenda_comercial,
      sous_intranet_dataware,
      sous_intranet_hd,
      sous_intranet_admin,
      `sous_intranet_observaciones`
    )
    VALUES(
      '$nombre',
      '$apellido',
      '$cedula',
      '$fecha_nac',
      '$nroempleado',
      '$grupo_acceso',
      '$unidad_organizativa',
      '$cargo',
      '$ubicacion',
      '$condicion_laboral',
      '$fecha_ingreso',
      '$fecha_termino',
      '$cd_medio_captacion',
      '$acceso_telefonico',
      '$entrada',
      '$salida',
      '$sal_local',
      '$sal_nacional',
      '$sal_internacional',
      '$celular',
      '$cuenta_correo',
      '$internet',
      '$requiere_usuario_rector',
      '$nivel_autorizacion',
      '$categoria',
      '$intranet_agenda_comercial',
      '$intranet_dataware',
      '$intranet_hd',
      '$intranet_admin',
      '$intranet_observaciones'
    )";

    $resultado = mysqli_query($conexion, $sql);
  }

  if ($resultado) {
    echo "El usuario ha sido regitrado con éxito";
    header("location: ../creacion_de_usuario.php");
  } else {
    echo "El usuario no ha sido registrado";
  }

}

?>