<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sistema Académico WEB</title>
</head>
<body>
    <h1>Bienvenido al Sistema Académico WEB</h1>
    <p>Este es el sistema académico web para gestionar la información académica.</p>
    <div class="contenedor">
        <section>
            <!--     registrar estudiantes. --> 
            <h2>Registrar Estudiante</h2>
            <form action="guardar_estudiante.php" method="post">

                <input type="text" name="nombre" placeholder="Nombre del Estudiante" required>
                <input type="text" name="apellido" placeholder="Apellidos del Estudiante" required>
                <!-- <input type="text" name="tipo_id" placeholder="Tipo de Identificación" required> -->
                <select type="text" name="tipo_id" required>
                    <option value="">Seleccione el Tipo de Identificación</option>
                    <option value="cc">CC</option>
                    <option value="nit">Nit</option>
                    <option value="registro_civil">Registro Civil</option>
                    <option value="targeta_indentidad">Tarjeta de Identidad</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
                <input type="text" name="numero_id" placeholder="Número de Identificación" required>
                <input type="text" name="programa_academico" placeholder="Programa Académico" required>
                <input type="number" name="semestre" placeholder="Semestre" required>
                <input type="number" name="edad" placeholder="Edad" required>
                <input type="date" name="fecha_nacimiento">
                <select type="text" name="tipo_sangre" placeholder="Tipo de Sangre" required>
                    <option value="">Seleccione el Tipo de Sangre</option>
                    <option value="A+">A+</option>      
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>      
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            
                <button type="submit">Guardar Estudiante</button>
            </form>
        </section>
        <section>
            
            <!--     registrar profesores. --> 
            <h2>Registrar Profesor</h2>
            <form action="guardar_profesor.php" method="post">

                <input type="text" name="nombre" placeholder="Nombre del Profesor" required>
                <input type="text" name="apellido" placeholder="Apellidos del Profesor" required>
                <select type="text" name="tipo_id" required>
                    <option value="">Seleccione el Tipo de Identificación</option>
                    <option value="cc">CC</option>
                    <option value="nit">Nit</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
                <input type="text" name="numero_id" placeholder="Número de Identificación" required>
                <input type="text" name="programa_academico" placeholder="Programa Académico" required>
                <input type="number" name="semestre" placeholder="Semestre" required>
                <input type="number" name="edad" placeholder="Edad" required>
                <input type="date" name="fecha_nacimiento" required>
                <select name="tipo_sangre" placeholder="Tipo de Sangre" required>
                    <option value="">Seleccione el Tipo de Sangre</option>
                    <option value="A+">A+</option>      
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>      
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <button type="submit">Guardar Profesor</button>
            </form>
        </section>
        <section>

            <!--     registrar nomina. --> 
            <h2>Registrar Nómina</h2>
            <form action="guardar_nomina.php" method="post">
                <input type="number" step="0.01" name="salario_mensual" placeholder="Salario Mensual" required>
                <!--     Aquí se deve seleccionar si es de  Planta, Contrato u Otro. . --> 
                <select name="tipo_vinculacion" required>
                    <option value="">Seleccione Tipo de Vinculación</option>
                    <option value="Planta">Planta</option>
                    <option value="Contrato">Contrato</option>
                    <option value="Otro">Otro</option>
                </select>
                <button type="submit">Guardar Nómina</button>
            </form>
        </section>
        <section>
            <h2>Consultas</h2>
            <a href="consultar_estudiantes.php">
                <button type="button">Consultar Estudiantes</button>
            </a><br><br>

            <a href="consultar_profesores.php">
                <button type="button">Consultar Profesores</button>
            </a><br><br>

            <a href="consultar_nomina.php">
                <button type="button">Consultar Nómina</button>
            </a><br><br>
        </section>
    </div>

</body>
</html>