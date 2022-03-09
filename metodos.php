<?php
   class metodos{
            public function insertarDatos($datos){
                $c=new Conexion();
                $conexion = $c->conectar();
                $sql="INSERT into t_datos(Sueldo,Edad,Sexo,Nacionalidad,Antiguedad,Php,Asp,Bv,Java,Oracle,Bd,Bono) values 
                ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]')";
                return $result=mysqli_query($conexion,$sql);
            }
            public function mostrarDatos($sql){
                $c=new Conexion();
                $conexion = $c->conectar();
                $result=mysqli_query($conexion,$sql);
                return mysqli_fetch_all($result,MYSQLI_ASSOC);
            }
    }
?>