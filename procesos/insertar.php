<?php

require_once "../app/Conexion.php";
require_once "../metodos.php";;
    $sueldo = $_POST['Sueldo'];
    $bono= ($sueldo *.15);
    $edad = $_POST['Edad'];
    $sexo = $_POST['Sexo'];
    // echo $bono;
    if($sexo == 'Femenino'){
        $calcular = $bono+($bono*0.3);
    }
    // echo $calcular;
    if ($edad >=45 ) {
         $bono = $calcular+($bono*0.2);    
        }
    // echo $bono;
    $nacionalidad=$_POST['Nacionalidad'];
    if ($nacionalidad=='Extranjero') {
        $bono = $bono-($bono*.5);
        // echo "nac".$bono;
    }
    
    $php = @$_POST['curso'];
    $asp = @$_POST['cursoA'];
    $vb = @$_POST['cursov'];
    $java = @$_POST['cursoj'];
    $oracle = @$_POST['cursoo'];
    $BD = @$_POST['cursob'];
    
    // echo $bono
    
    if ($php == 'php') {
        $bono = ($bono+60);
        $php=1;
    }else{
        $php=0;
    }
    if ($asp == 'asp') {
        $bono = ($bono+105);
        $asp=1;
    }else{
        $asp=0;
    }
    if ($vb == 'vb') {
        $bono = ($bono+120);
        $vb=1;
    }else{
        $vb=0;
    }
    if ($java == 'jav') {
        $bono = ($bono+180);
        $java=1;
    }else{
        $java=0;
    }
    if ($oracle == 'ora') {
        $bono = ($bono+165);
        $oracle=1;
    }else{
        $oracle=0;
    }
    if ($BD == 'bd') {
        $bono = ($bono+45);
        $BD=1;
    }else{
        $BD=0;
    }
    $antiguedad =@$_POST['flexRadioDefault'];
    
    if ($antiguedad == '1 a 5 años') {
        $bono=$bono+($bono*0.5);
    }else if($antiguedad == '6 a 10 años'){
        $bono=$bono+($bono*0.10);
    }else if($antiguedad == '10 años mas'){
        $bono=$bono+($bono*0.15);
    }
    echo $bono;
    $datos=array(
        $sueldo,
        $edad,
        $sexo,
        $nacionalidad,
        $antiguedad,
        $php,
        $asp,
        $vb,
        $java,
        $oracle,
        $BD,
        $bono
    );
    $obj = new metodos();
    if ($obj->insertarDatos($datos)==1) {
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }
?>