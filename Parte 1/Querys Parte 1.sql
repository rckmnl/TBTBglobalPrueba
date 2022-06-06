select alumnos.nombre as ESTUDIANTE,
	profesores.nombre as PROFESOR,
    asignaturas.nombre as MATERIA,
    asignaturas.horario as HORARIO
 from alumnos
left join alumnos_asignaturas on alumnos_asignaturas.id_alumno = alumnos.id_alumno
inner join asignaturas on asignaturas.id_asignatura = alumnos_asignaturas.id_asignatura
left join profesores on profesores.id_asignatura = alumnos_asignaturas.id_asignatura;

select profesores.nombre as profesor, asignaturas.nombre as materia, profesores.edad, asignaturas.horario as Hora_clases 
from asignaturas
left join profesores on asignaturas.id_asignatura = profesores.id_asignatura
where profesores.id_asignatura = 3;


select asignaturas.nombre as Materia, profesores.nombre as Profesor, horario  from asignaturas
inner join profesores on asignaturas.id_asignatura = profesores.id_asignatura
where profesores.edad between 20 and 40;

select alumnos.nombre as ESTUDIANTE,
	profesores.nombre as PROFESOR,
    asignaturas.nombre as MATERIA,
    asignaturas.horario as HORARIO
 from alumnos
left join alumnos_asignaturas on alumnos_asignaturas.id_alumno = alumnos.id_alumno
left join asignaturas on asignaturas.id_asignatura = alumnos_asignaturas.id_asignatura
left join profesores on profesores.id_asignatura = alumnos_asignaturas.id_asignatura; 

select nombre as estudiante, email as correo
from alumnos
where alumnos.edad between 15 and 18
union 
select nombre as estudiante, email as correo
from alumnos
where alumnos.edad = 28;

select profesores.nombre as PROFESORES,
	asignaturas.nombre as MARTERIA
 from alumnos_profesores
left join profesores on alumnos_profesores.id_profesor = profesores.id_profesor 
inner join asignaturas on profesores.id_asignatura = asignaturas.id_asignatura
union
select profesores.nombre as PROFESORES,
	asignaturas.nombre as MARTERIA from alumnos_profesores
right join profesores on alumnos_profesores.id_profesor = profesores.id_profesor 
inner join asignaturas on profesores.id_asignatura = asignaturas.id_asignatura;

select nombre, apellido, email,
 case when edad < 18
              then 'No es mayor de edad'
              when edad >= 18
              then 'Es mayor de edad'
              else 'Valor'
          end as mayores
 from alumnos;


