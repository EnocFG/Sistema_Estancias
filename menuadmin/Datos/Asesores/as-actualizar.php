<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Estancias y Estadias - Administrador</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet">
    <link href="../botones.css">
</head>

<body>
    <div class="container-xxl position-relative bg-dark d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-dark navbar-dark">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../../img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border-light border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Administrador</h6>
                        <span>Admin1</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <!--Botones barra lateral-->
                    <a href="../../dashboard-admin.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Alumnos</a>
                        <div class="dropdown-menu bg-light border-0">
                            <a href="../Alumnos/al-consultar.php" class="dropdown-item">Consultar</a>
                            <a href="../Alumnos/al-insertar.php" class="dropdown-item">Insertar</a>
                            <a href="../Alumnos/al-actualizar.php" class="dropdown-item">Editar</a>
                            <a href="../Alumnos/al-eliminar.php" class="dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-check me-2"></i>Asesores</a>
                        <div class="dropdown-menu bg-light border-0">
                            <a href="../Asesores/as-consultar.php" class="dropdown-item">Consultar</a>
                            <a href="../Asesores/as-insertar.php" class="dropdown-item">Insertar</a>
                            <a href="../Asesores/as-actualizar.php" class="dropdown-item">Editar</a>
                            <a href="../Asesores/as-eliminar.php" class="dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-briefcase me-2"></i>Empresas</a>
                        <div class="dropdown-menu bg-light border-0">
                            <a href="../Empresas/em-consultar.php" class="dropdown-item">Consultar</a>
                            <a href="../Empresas/em-insertar.php" class="dropdown-item">Insertar</a>
                            <a href="../Empresas/em-actualizar.php" class="dropdown-item">Editar</a>
                            <a href="../Empresas/em-eliminar.php" class="dropdown-item">Eliminar</a>
                        </div>
                    </div>

                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Barra Superior -->
        <div class="content">
            <!-- Inicio-->
            <nav class="navbar navbar-expand bg-dark navbar-dark sticky-top px-4 py-0">

                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../../img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Administrador</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <!--
                                <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            -->
                            <a href="../../../login.html" class="dropdown-item">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Final -->


            <!-- Contenido principal -->
<h1>Modicando Datos de Asesor Academico</h1>
    <form action="./validations/validar_actualizar.php" method="post">
        <label for="">ID asesor</label>
        <input type="text" name="Id_asesor" id="Id_asesor" onblur="buscar_datos();" required><br>
        <label for="">Nombre</label>
        <input type="text" name="Nombre_asesor" id="Nombre_asesor" required><br>
        <label for="">Apellido paterno</label>
        <input type="text" name="Ap_paterno_asesor" id="Ap_paterno_asesor" required ><br>
        <label for="">Apellido materno</label>
        <input type="text" name="Ap_materno_asesor" id="Ap_materno_asesor" required><br>
        <input type="submit" value="actualizar">
        <input type="submit" id="enviar" name="Enviar" value="Cancelar" onclick="limpiar();">
        <input type="button" name="Menú" onclick="location.href='./as-consultar.php'" value="Menú">
    </form>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $('.cargando').hige();
    });
    function buscar_datos(){
        Id_asesor = $("#Id_asesor").val();
    var parametros =
    {
        "buscar": "1",
        "Id_asesor": Id_asesor
    };
    $.ajax(
        {
            data: parametros,
            dataType: 'json',
            url: './functions/buscar_datos.php',
            type: 'post',
            beforeSend: function()
            {
                $('.formulario').hide();
                $('.cargando').show();
            },
            error: function()
            {
                alert("Error");
            },
            complete: function()
            {
                $('.formulario').show();
                $('.cargando').hide();
            },
            success: function(valores)
            {
                $("#Nombre_asesor").val(valores.Nombre_asesor);
                $("#Ap_paterno_asesor").val(valores.Ap_paterno_asesor);
                $("#Ap_materno_asesor").val(valores.Ap_materno_asesor);
            }

        })
    }
    function limpiar()
    {
                $("#Nombre_asesor").val("");
                $("#Ap_paterno_asesor").val("");
                $("#Ap_materno_asesor").val("");
    }
</script>

            <!-- Fin del Contenido Principal -->


            <!-- Pie de Página -->

        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/chart/chart.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>

</html>
