<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Práctica CRUD

En esta práctica se hace un control de login. Dependiendo del rol del usuario se mostrará una vista o la otra. 

- Hay 3 rols: Admin/professor/estudiant. 

### Admin
- Por defecto aparecen todos los usuario de la BBDD que sean professores.
- El admin puede modificar los datos de los usuarios y también puede eliminar los usuarios(CRUD). 
- Si no hay usuarios en la BBDD, se muestra un mensaje. 

### Professor
- Puede hacer lo mismo que el admin, pero con usuarios alumnos. 

### Alumno

- Puede añadir un documento y mostrar el enlace por la pantalla. 