select alumnos.nombre as ESTUDIANTE,
	profesores.nombre as PROFESOR,
    asignaturas.nombre as MATERIA,
    asignaturas.horario as HORARIO
 from alumnos
left join alumnos_asignaturas on alumnos_asignaturas.id_alumno = alumnos.id_alumno
inner join asignaturas on asignaturas.id_asignatura = alumnos_asignaturas.id_asignatura
left join profesores on profesores.id_asignatura = alumnos_asignaturas.id_asignatura
where asignaturas.horario = nocturno; 







