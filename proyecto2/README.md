========================================================================
             SISTEMA DE GESTIÓN DE CITAS - README.txt
========================================================================

------------------------------------------------------------------------
INFORMACIÓN DE ENTREGA
------------------------------------------------------------------------
Alumno:       Miguel Angel Jurado Becerra
Materia:      Desarrollo de Aplicaciones Web
Docente:      Jesus Salas
Semestre:     6° Semestre
Proyecto:     Sistema de Gestión de Citas

------------------------------------------------------------------------
DESCRIPCIÓN DEL PROYECTO
------------------------------------------------------------------------
Este proyecto consiste en un sistema web desarrollado en PHP enfocado en la
gestión integral de citas. La plataforma web permite realizar de manera 
segura el registro de usuarios, inicio de sesión, creación de citas, 
visualización de agendas programadas, edición de información y eliminación 
de registros de la base de datos (CRUD completo).

El objetivo principal es aplicar de forma práctica conceptos avanzados de 
programación web, implementando una arquitectura cliente-servidor nativa, 
un manejo robusto de sesiones de usuario y una conexión segura y eficiente 
con una base de datos relacional MySQL.

------------------------------------------------------------------------
TECNOLOGÍAS UTILIZADAS
------------------------------------------------------------------------
* Backend:           PHP (Estructurado, orientado a la web)
* Frontend:          HTML5, CSS3 (Diseño responsivo y estructurado)
* Base de Datos:     MySQL
* Interfaz BD:       PDO (PHP Data Objects) para mayor seguridad contra SQLi
* Entorno Local:     XAMPP (Servidor local Apache + MySQL)
* Control de Versiones: GitHub

------------------------------------------------------------------------
COMPETENCIAS DESARROLLADAS
------------------------------------------------------------------------
1. Desarrollo de Aplicaciones Web Dinámicas:
   Capacidad para generar interfaces interactivas que responden en tiempo 
   real a las peticiones del usuario final a través del procesamiento en 
   el servidor.

2. Manejo de Bases de Datos Relacionales:
   Diseño, modelado y manipulación de datos relacionales orientados a 
   casos de uso comerciales o de servicios.

------------------------------------------------------------------------
FUNCIONALIDADES PRINCIPALES
------------------------------------------------------------------------
[+] Registro de Usuarios: Sistema de altas para nuevos accesos a la app.
[+] Inicio de Sesión Seguro: Autenticación basada en manejo de sesiones.
[+] Cierre de Sesión: Destrucción de tokens de sesión activos para seguridad.
[+] CRUD de Citas: Crear (Create), Leer (Read), Actualizar (Update) y 
    Eliminar (Delete) agendas de citas de manera dinámica.

------------------------------------------------------------------------
BITÁCORA DE APRENDIZAJE
------------------------------------------------------------------------
¿Qué aprendí?
- Conexión e interacción limpia entre PHP y MySQL mediante PDO.
- Control estricto de sesiones de servidor para la restricción de vistas.
- Modularización avanzada y ordenamiento del proyecto mediante una 
  estructura formal de directorios (Controladores, Vistas y Configuración).

¿Qué fue difícil?
- Configuración inicial del entorno y estabilización de la conexión a la BD.
- Diagnóstico y resolución de conflictos de red/puertos en el panel XAMPP.

¿Qué mejoraría en futuras versiones?
- Implementación de capas de validación del lado del cliente y servidor 
  más estrictas (Regex, sanitización profunda).

------------------------------------------------------------------------
INSTRUCCIONES DE INSTALACIÓN Y EJECUCIÓN
------------------------------------------------------------------------
Siga estrictamente estos pasos para desplegar el sistema en su entorno local:

1. Clonar o mover el proyecto:
   Coloque la carpeta raíz de este proyecto dentro del directorio de despliegue
   de su servidor local XAMPP: C:\xampp\htdocs\

2. Levantar los servicios locales:
   Abra el panel de control de XAMPP e inicie los módulos:
   - Apache (Servidor Web)
   - MySQL (Servidor de Base de Datos)

3. Configurar la Base de Datos:
   - Abra su navegador web e ingrese a http://localhost/phpmyadmin/
   - Cree una nueva base de datos con el nombre correspondiente.
   - Importe el archivo .sql adjunto en el proyecto para levantar las tablas.

4. Configurar Credenciales:
   Abra el archivo localizado en la ruta: config/database.php (o el archivo 
   de configuración equivalente del proyecto) y verifique que las credenciales 
   de acceso (Host, Usuario, Contraseña y BD) coincidan con su servidor local.

5. Ejecutar la Aplicación:
   Abra una pestaña en su navegador e ingrese la dirección web local:
   http://localhost/[nombre_de_la_carpeta_del_proyecto]/

========================================================================
                      Tec Lerdo - Mayo de 2026
========================================================================