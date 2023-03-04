<?php

$pdo = new PDO('mysql:host=localhost;dbname=escuelaceti','root','');

$comando = $pdo->prepare("insert into inscripcion(id_incripcion,Matricula,Asignatura,Grupo,Profesor,Turno,Semestre,Estatus)values(:id_incripcion, :Matricula, :Asignatura, :Grupo, :Profesor, :Turno, :Semestre, :Estatus)");

$id_incripcion = trim($_POST['id_incripcion']);
$Matricula = trim($_POST['Matricula']);
$Asignatura = trim($_POST['Asignatura']);
$Grupo = trim($_POST['Grupo']);
$Profesor = trim($_POST['Profesor']);
$Turno  = trim($_POST['Turno']);
$Semestre = trim($_POST['Semestre']);
$Estatus  = trim($_POST['Estatus']);


$comando -> bindParam(':id_incripcion', $id_incripcion);
$comando -> bindParam(':Matricula', $Matricula);
$comando -> bindParam(':Asignatura', $Asignatura);
$comando -> bindParam(':Grupo', $Grupo);
$comando -> bindParam(':Profesor', $Profesor);
$comando -> bindParam(':Turno', $Turno);
$comando -> bindParam(':Semestre', $Semestre);
$comando -> bindParam(':Estatus', $Estatus);

$comando->execute();

?>