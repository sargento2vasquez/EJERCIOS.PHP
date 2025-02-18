
<?php
#Array escalares con parentesis
$Estudiantes=array("jose", "maria","Jhunnsu","Gaby");
#tambien se puede con corchetes
$Estudiantes=["jose", "maria","Jhunnsu","Gaby"];

/*Array y modificamos el valor 
echo $Estudiantes[3]="Gabriela";
echo $Estudiantes[2];*/

#Array asociativos

$turor=[
    "Nombre"=>"Robert",
    "Apellido"=>"Vasquez",
    "edad"=>23
];
#modificar su valor

$tutor["edad"]=22;
echo $tutor["edad"];