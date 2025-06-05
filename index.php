<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Energía Solar - PHP</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: Generación de energía fotovoltaica</h2>
        <p>Descripción:</p>
        <p>Se dispone de una placa fotovoltaica de 80x40 cm, cuyo rendimiento es del 20%. Determinar la cantidad de energía eléctrica (KWH) que generará, para acumular en una batería, si la placa ha estado funcionando durante 12 horas, siendo el coeficiente de radiación de 0,9 cal/min.cm2. Se admite que no hay pérdidas ni en el transporte, ni en la carga de la batería.</p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/practica9.jfif">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        <p>Q = K × t × S × r (en Kcal)</p>
        <p>1 Kcal = 0.00116222 KWh</p>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        <ul>
          <li>Dimensiones placa: 80 cm × 40 cm</li>
          <li>Rendimiento (r): 20% = 0.2</li>
          <li>Tiempo funcionamiento (t): 12 horas = 720 minutos</li>
          <li>Coeficiente de radiación (K): 0.9 cal/min.cm²</li>
        </ul>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>
          1. Calcular área de la placa: S = 80 cm × 40 cm = 3200 cm²<br>
          2. Calcular energía en calorías: Q = 0.9 × 720 × 3200 × 0.2<br>
          3. Convertir calorías a KWh: 1 Kcal = 0.00116222 KWh<br>
        </p>
        <form method="post">
          <button type="submit" name="calcular">Presiona para calcular</button>
        </form>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <?php
        if(isset($_POST['calcular'])) {
            // Datos del problema
            $anchoPlaca = 80; // cm
            $altoPlaca = 40; // cm
            $rendimiento = 0.2; // 20%
            $tiempoHoras = 12;
            $coeficienteRadiacion = 0.9; // cal/min.cm²
            
            // Conversión de unidades
            $tiempoMinutos = $tiempoHoras * 60;
            $areaPlaca = $anchoPlaca * $altoPlaca; // cm²
            
            // Cálculo de energía en calorías
            $energiaCal = $coeficienteRadiacion * $tiempoMinutos * $areaPlaca * $rendimiento;
            
            // Conversión a KWh (1 Kcal = 0.00116222 KWh)
            $energiaKcal = $energiaCal / 1000;
            $energiaKWh = $energiaKcal * 0.00116222;
            
            // Mostrar resultado
            echo "<p>La placa fotovoltaica generará: ".number_format($energiaKWh, 4)." KWh</p>
                <p>Detalle del cálculo:</p>
                <ul>
                    <li>Área de la placa: $areaPlaca cm²</li>
                    <li>Energía generada: ".number_format($energiaCal, 2)." cal</li>
                    <li>Equivalente a: ".number_format($energiaKcal, 2)." Kcal</li>
                    <li>Conversión a: ".number_format($energiaKWh, 4)." KWh</li>
                </ul>";
        }
        ?>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2025
    </footer>
  </section>
</body>
</html>
