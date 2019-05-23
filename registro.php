<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>Registro de Usuarios</h2>
    <form action="validar_registro.php" id="registro" class="registro" method="post">
      <div id="datos_usuario" class="registro caja clearfix">
        <div class="campo">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
        </div>
        <div class="campo">
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
        </div>
        <div class="campo">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Tu Email">
        </div>
        <div id="error"></div>
      </div>

      <div id="paquetes" class="paquetes">
        <h3>Elige el número de boletos</h3>
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por día (viernes)</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dia">Boletos deseados:</label>
                <input type="number" min=0 id="pase_dia" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Todos los días</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_completo">Boletos deseados:</label>
                <input type="number" min=0 id="pase_completo" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 día (viernes y sábado)</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dosdias">Boletos deseados:</label>
                <input type="number" min=0 id="pase_dosdias" size="3" name="boletos[]" placeholder="0">
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div id="eventos" class="eventos clearfix">
        <h3>Elige tus talleres</h3>
        <div class="caja">
          <div id="viernes" class="contenido-dia clearfix">
            <h4>Viernes</h4>
            <div>
              <p>Talleres:</p>
              <label for=""><input type="checkbox" name="registro[]" id="taller_01"><time>10:00</time> Responsive Web Design</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_02"><time>12:00</time> Flexbox</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_03"><time>14:00</time> HTML5 y CSS3</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_04"><time>17:00</time> Drupal</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_05"><time>19:00</time> WordPress</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label for=""><input type="checkbox" name="registro[]" id="conf_01"><time>10:00</time> Como ser Freelancer</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_03"><time>19:00</time> Seguridad en la Web</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label for=""><input type="checkbox" name="registro[]" id="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
            </div>
          </div>
          <div id="sabado" class="contenido-dia clearfix">
            <h4>Sábado</h4>
            <div>
              <p>Talleres:</p>
              <label for=""><input type="checkbox" name="registro[]" id="taller_06"><time>10:00</time> AngularJS</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_07"><time>12:00</time> PHP y MySQL</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_08"><time>14:00</time> JavaScript Avanzado</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_09"><time>17:00</time> SEO en Google</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label for=""><input type="checkbox" name="registro[]" id="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label for=""><input type="checkbox" name="registro[]" id="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
              <label for=""><input type="checkbox" name="registro[]" id="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
            </div>
          </div>
          <div id="domingo" class="contenido-dia clearfix">
            <h4>Domingo</h4>
            <div>
              <p>Talleres:</p>
              <label for=""><input type="checkbox" name="registro[]" id="taller_12"><time>10:00</time> Laravel</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_13"><time>12:00</time> Crea tu propia API</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_14"><time>14:00</time> JavaScript y jQuery</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_15"><time>17:00</time> Creando Plantillas par WordPress</label>
              <label for=""><input type="checkbox" name="registro[]" id="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label for=""><input type="checkbox" name="registro[]" id="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
              <label for=""><input type="checkbox" name="registro[]" id="conf_09"><time>19:00</time> Frameworks y librerías Open Source</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label for=""><input type="checkbox" name="registro[]" id="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
              <label for=""><input type="checkbox" name="registro[]" id="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
            </div>
          </div>
        </div>
      </div>

      <div id="resumen" class="resumen">
        <h3>Pago y Extras</h3>
        <div class="caja clearfix"> 
          <div class="extras">
            <div class="orden">
              <label for="camisa_evento">Camisa del Evento <small>(promoción 7% dto.)</small></label>
              <input type="number" id="camisa_evento" name="pedido_camisa" min="0" size="3" placeholder="0">
            </div>
            <div class="orden">
              <label for="etiquetas">Paquete de 10 Etiquetas $2 <small>(HTML5, CSS3, JavaScript, Chrome, Google)</small></label>
              <input type="number" id="etiquetas" name="pedido_etiquetas" min="0" size="3" placeholder="0">
            </div>
            <div class="orden">
              <label for="regalo">Seleccione un regalo</label><br>
              <select name="regalo" id="regalo" required="">
                <option value="">- Seleccione un regalo -</option>
                <option value="2">Etiquetas</option>
                <option value="1">Pulsera</option>
                <option value="3">Plumas</option>
              </select>
            </div>
            <input type="button" id="calcular" class="button" value="Calcular">
          </div>
          <div class="total">
            <p>Resumen:</p>
            <div id="lista-productos"></div>
            <p>Total:</p>
            <div id="suma-total"></div>
              <input type="submit" id="btnRegistro" name="sumit" class="button" value="Pagar">
          </div>
        </div>
      </div>

    </form>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>