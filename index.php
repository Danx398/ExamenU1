<!doctype html>
<html lang="en">

<head>
    <title>Examen U1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./libs/css/bootstrapV5.min.css">

</head>

<body>
    <h1 class="mt-4 text-center">Examen unidad 1 - Suits de Desarrollo Web</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./procesos/insertar.php" method="post" class="form-control">
                    <label for="">Datos del empleado</label>

                    <div class="input-group col-6">
                        <span class="input-group-text" id="basic-addon1">sueldo</span>
                        <input type="number" class="form-control" name="Sueldo" placeholder="Ej. 15000" required="">
                        <span class="input-group-text" id="basic-addon1">Edad</span>
                        <input type="number" class="form-control" name="Edad" placeholder="Ej. 18" required="">

                    </div>
                    <div class="input-group col-6 mt-3">
                        <span class="input-group-text" id="basic-addon1">Sexo</span>
                        <select class="form-select" id="inputGroupSelect01" name="Sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <span class="input-group-text" id="basic-addon1">Nacionalidad</span>
                        <select class="form-select" id="inputGroupSelect01" name="Nacionalidad">
                            <option value="Nacional">Nacional</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" name="curso"
                                                    value="php">
                                                <label class="form-check-label">PHP</label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="cursoA"
                                                    value="asp">
                                                <label class="form-check-label">ASP.Net</label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="cursov"
                                                    value="vb">
                                                <label class="form-check-label">VB.Net</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cursoj"
                                                    value="jav">
                                                <label class="form-check-label">Java</label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="cursoo"
                                                    value="ora">
                                                <label class="form-check-label">Oracle</label>
                                                <br>
                                                <input class="form-check-input" type="checkbox" name="cursob"
                                                    value="bd">
                                                <label class="form-check-label">Introduccion a BD</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <label for="" class="">Antigüedad</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" value="1 a 5 años">
                                    <label class="form-check-label" for="flexRadioDefault1">1 a 5 años</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" value="6 a 10 años">
                                    <label class="form-check-label" for="flexRadioDefault2">6 a 10 años</label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3" value="10 años mas">
                                    <label class="form-check-label" for="flexRadioDefault3">Mas de 10 años</label>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-2">Calcular y Guardar</button>


                </form>

                <h4 class="mt-2">Listado de Información</h4>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Sueldo</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Nacionalidad</th>
                            <th>Antigüedad</th>
                            <th>Php</th>
                            <th>Asp</th>
                            <th>Bv</th>
                            <th>Java</th>
                            <th>Oracle</th>
                            <th>Bd</th>
                            <th>Bono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "./app/Conexion.php";
                            require_once "./metodos.php";
                            $obj = new metodos();
                            $sql = "SELECT * from t_datos";
                            $datos=$obj->mostrarDatos($sql);
                            foreach($datos as $key):
                        ?>
                        <tr>
                            <th><?= $key['Sueldo'] ?></th>
                            <th><?= $key['Edad'] ?></th>
                            <th><?= $key['Sexo'] ?></th>
                            <th><?= $key['Nacionalidad'] ?></th>
                            <th><?= $key['Antiguedad'] ?></th>
                            <th><?= $key['Php'] ?></th>
                            <th><?= $key['Asp'] ?></th>
                            <th><?= $key['Bv'] ?></th>
                            <th><?= $key['Java'] ?></th>
                            <th><?= $key['Oracle'] ?></th>
                            <th><?= $key['Bd'] ?></th>
                            <th><?= $key['Bono'] ?></th>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./libs/js/jquery-3.6.0.min.js"></script>
    <script src="./libs/js/bootstrapV5.bundle.min.js"></script>
    <script src="./libs/js/bootstrapV5.min.js"></script>
</body>

</html>