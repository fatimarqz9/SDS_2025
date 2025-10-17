<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <nav class="nav">
        <div class="logo">SDS<span>25</span></div>
        <ul>
            <li><a href="../public">Home</a></li>
            <li><a href="dia1">Día 1</a></li>
            <li><a href="dia2">Día 2</a></li>
            <li><a href="dia3">Día 3</a></li>
            <li><a href="dia4">Día 4</a></li>
            <li><a href="dia5">Día 5</a></li>
            <li><a href="perfil">Perfil</a></li>
            <li><a href="registrarVisita">Registrar visita</a></li>
        </ul>
    </nav>

    <section class="dia_presentation">
        <div class="dia_intro">
            <h1>Día 2: Talleres</h1>
            <p>A pesar de la cancelación de las actividades presenciales, la Semana de Sistemas no se detuvo y en su segundo día seguimos aprendiendo de manera virtual sobre distintos temas impartidos por profesionales entusiasmados por compartir sus conocimientos.</p>

            <p><strong>Taller 1: "Toma de Decisiones Estrategicas Basadas en Datos"</strong><br>

            </p>
            <p><strong>Taller 2: "Construyendo un CRUD en minutos con Laravel y Filament"</strong><br></p>

            <p><strong>Taller 3: IA MULTIMODAL: creando el futuro visual e inteligente con n8n De texto a imagen que conectan y transforman</strong><br></p>
        </div>
        <div class="dia_img">
            <img src="../public/img/IA_DIA2.png" alt="">
        </div>
    </section>

    <section class="contenido">
        <aside class="sidebar">
            <ul>
                <li>
                    <a href="#taller1">Taller 1</a>
                </li>
                <li>
                    <a href="#taller2">Taller 2</a>
                </li>
                <li>
                    <a href="#taller3">Taller 3</a>
                </li>
            </ul>
        </aside>

        <section class="section_actividad">

            <section class="actividad" id="taller1">
                <div class="titulo">
                    <h1>Taller 1: "Toma de Decisiones Estrategicas Basadas en Datos"</h1>
                    <h2>Tallerista: MSc. Enrique Torres</h2>
                </div>
                <hr>
                <div class="contenido_actividad">
                    <div class="subtema_actividad">
                        <h3>¿Qué es un Dato y como se construye la información?</h3>
                        <p>
                            Un dato es el bloque básico de construcción de la información y el conocimiento.
                            Es como un ladrillo individual que, por sí solo, no construye nada importante, pero cuando se organiza con otros ladrillos, forma una estructura valiosa.
                        </p>
                        <p>El tallerista utilizó la metáfora de bloques Legos para explicarnos como se construye la información.</p>
                        <p>
                        <ul>
                            <li><strong>1 bloque: </strong>Dato individual.</li>
                            <li><strong>10 bloques desordenados: </strong>Datos sin estructura.</li>
                            <li><strong>100 bloques ordenados: </strong>información organizada.</li>
                            <li><strong>Castillo con bloques: </strong>Contenido estructurado.</li>
                        </ul>
                        </p>
                        <p>Se nos dio a conocer que los datos no son solo para empresas grandes; cualquier persona puede usar datos para mejorar su vida diaria y tomar mejores decisiones.</p>
                        <p>Algunos ejemplos son: </p>
                        <ul>
                            <li><strong>Pasos Diarios:</strong> Las personas pueden estos datos para decidir metas de actividad física.</li>
                            <li><strong>Consumo eléctrico:</strong> Dependiendo de estos datos las personas pueden ajustar el uso de electrodomesticos para ahorrar.</li>
                            <li><strong>Gastos Personales:</strong> Dicha información puede ser utlizada para detectar fugas y optimizar el presupuesto mensual.</li>
                        </ul>
                    </div>
                    <div class="subtema_actividad">
                        <h3>Ejercicio Practico con Tablas Dinamicas en Excel</h3>
                        <p>
                            Las tablas dinámicas son una herramienta poderosa de Excel para analizar grandes volúmenes de datos de manera interactiva. </p>
                        <p>
                            En el ejercicio práctico se trabajó con 10,000 datos, y mediante el uso de tablas dinámicas, el tallerista nos mostró cómo manejar grandes volúmenes de información para generar estadísticas, realizar comparaciones y otros análisis.
                            Todo esto con el propósito de facilitar la toma de decisiones estratégicas incluso cuando la cantidad de datos es muy extensa.
                        </p>
                        <p>
                            Además, este ejercicio permitió comprender la relevancia del análisis de datos en la toma de decisiones dentro de empresas y organizaciones.
                            El uso de tablas dinámicas no solo facilita el procesamiento de grandes volúmenes de información, sino que también ayuda a identificar patrones, tendencias y relaciones entre variables. Gracias a esta práctica, se fortalecieron habilidades en la organización,
                            filtrado y visualización de datos, lo que resulta fundamental para un enfoque analítico en entornos profesionales o de investigación.
                        </p>
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Generando un DAX — Power BI</h3>
                        <p>
                            Se nos habló un poco tambien sobre DAX (Data Analysis Expressions) en Power BI, cuyo propósito es generar indicadores clave que permitan analizar el rendimiento del negocio desde diferentes perspectivas —como categoría, línea, día o sucursal—,
                            facilitando la interpretación de los datos y apoyando la toma de decisiones estratégicas basadas en información confiable y visualmente clara. </p>
                    </div>
                    <div class="subtema_actividad">
                        <h3>Camino y Perspectivas para Futuros Ingenieros de Datos y Profesionales TI</h3>
                        <p>
                            En el taller se abordó una visión integral sobre el camino profesional en el ámbito de los datos y la tecnología, destacando las etapas de formación,
                            las competencias más demandadas y las tendencias actuales del mercado laboral
                        </p>
                        <h3>El camino a recorrer para un Ingeniero de Datos.</h3>
                        <p>
                            El camino para convertirse en un ingeniero de datos implica adquirir una sólida base técnica y luego avanzar hacia áreas de especialización. En la etapa de fundamentos,
                            es esencial dominar lenguajes como Python y SQL, manejar Git para el control de versiones y desenvolverse en entornos Linux, además de comprender los principios de la nube
                            (AWS, Azure o GCP) y la orquestación de flujos de trabajo con herramientas como Airflow.
                        </p>
                        <p>
                            Posteriormente, en la fase de especialización, el enfoque se centra en el diseño y mantenimiento de data warehouses, la implementación de procesos ETL/ELT,
                            y el modelado de datos siguiendo metodologías como Kimball. También se profundiza en tecnologías de streaming (como Kafka) y en arquitecturas modernas de datos
                            basadas en data lakes y warehouses (Delta Lake, BigQuery, entre otros).
                        </p>

                        <h3>Datos Importantes para Futuros Graduados TI</h3>
                        <p>
                            Durante el taller, se analizaron datos de portales de empleo que muestran las tendencias tecnológicas más demandadas, los rangos salariales por rol y nivel de experiencia, y las habilidades emergentes que están marcando el futuro, como la inteligencia artificial generativa y la seguridad en la nube.
                            <br>
                            Estos indicadores sirven como referencia para orientar el aprendizaje y las decisiones de especialización de los futuros profesionales de TI.
                        </p>
                        <p>
                            Se destacó la importancia de fortalecer las siguientes áreas:

                        <ul>


                            <li>Lenguajes principales: Python, Java y JavaScript.</li>

                            <li>Cloud y DevOps: uso de contenedores con Docker y Kubernetes.</li>

                            <li>Data, ML e IA: analítica avanzada, inteligencia de negocios y machine learning.</li>


                        </ul>

                        </p>
                        <p> Estas competencias representan la base de los perfiles técnicos más buscados actualmente en el mercado.</p>

                        <h3>¿Cómo puedo empezar a cambiar mi rumbo?</h3>
                        <ul>
                            <li>Diseñar un plan de 30-60-90 días con metas claras de aprendizaje.</li>
                            <li>Realizar un proyecto práctico por mes usando datasets públicos.</li>
                            <li>Buscar mentores, pares y comunidades para compartir experiencias y crecer en conjunto.</li>
                        </ul>

                        <p>El taller permitió comprender que el éxito en el campo tecnológico no depende solo del conocimiento técnico, sino de la constancia, la curiosidad y la planificación.
                            Empezar hoy, con pasos pequeños pero firmes, es la clave para construir una carrera sólida en el mundo de los datos y la ingeniería tecnológica.</p>
                    </div>

                    <section class="galeria">

                        <div class="galeria_img">
                            <img src="../public/img/taller1.png">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/taller1_2.png">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/Taller1_3.png">
                        </div>
                        <div class="galeria_img">
                            <video controls>
                                <source src="../public/img/Taller1_v.mp4" type="video/mp4">
                                Tu navegador no soporta el elemento <code>video</code>.
                            </video>
                        </div>
                    </section>

                </div>


                <hr>
                <section class="actividad" id="taller2">
                    <div class="titulo">
                        <h1>Taller 2: "Construyendo un CRUD en minutos con Laravel y Filament"</h1>
                        <h2>Tallerista: ING. Gabriel Castillo</h2>
                    </div>
                    <hr>
                    <div class="contenido_actividad">
                        <div class="subtema_actividad">
                            <h3>Filament y sus caracteristicas principales</h3>
                            <p>
                                <strong>¿Qué es Filament?</strong>
                            </p>
                            <p>Es un panel de administración para Laravel que te permite crear dashboards, formularios y sistemas CRUD súper rápido sin tener que escribir todo desde cero.</p>
                            <p><strong>¿Por qué es útil?</strong></p>
                            <p>Normalmente construir un panel administrativo toma mucho tiempo y código. Filament lo simplifica: es fácil de usar y muy personalizable, así que en cuestión de minutos se puede tener funcionando un sistema completo.</p>
                            <p><strong>Caracteristicas principales</strong></p>
                            <p>
                            <ul>
                                <li><strong>Interfaz moderna:</strong> Usa Tailwind CSS para verse bien y moderno</li>
                                <li><strong>CRUDs automáticos: </strong> Genera automáticamente toda la lógica para crear, editar y eliminar datos</li>
                                <li><strong>Panel listo para usar: </strong>No se tiene que partir de cero</li>
                                <li><strong>Muy personalizable:</strong> Se puede adaptar a lo que se necesite con plugins y configuraciones</li>
                                <li><strong>Soporte para formularios, tablas, relaciones:</strong> Maneja datos complejos sin problema</li>
                                <li><strong>Roles y permisos: </strong>Controla quién puede hacer qué</li>
                            </ul>
                            </p>



                            <h3>Practica con Filament + Laravel.</h3>
                            <p><strong>Login: </strong>Pantalla de autenticación simple y limpia para acceder al panel.</p>
                            <img src="../public/img/taller2_login.jpeg" alt="" class="imagen_T">

                            <p><strong>Dashboard: </strong>Panel principal con bienvenida, opción de cerrar sesión y links a documentación y GitHub.</p>
                            <img src="../public/img/taller2_dashboard.jpeg" alt="" class="imagen_T">

                            <p><strong>Gestión de Roles: </strong>Tabla que lista los roles con columnas de nombre, guard name, permisos y fecha de actualización. 
                            Botones para editar o eliminar.</p>
                            <img src="../public/img/taller2_roles.jpeg" alt="" class="imagen_T">

                            <p><strong>Crear Usuario: </strong>Formulario para agregar nuevos usuarios con campos de nombre, email, rol, email verificado y contraseña. 
                            Filament genera todo automáticamente.</p>
                            <img src="../public/img/taller2_crearUsuario.jpeg" alt="" class="imagen_T">

                            <p><strong>Lista de Usuarios: </strong>Tabla con usuarios registrados mostrando nombre y email, con opciones para ver o editar.</p>
                            <img src="../public/img/taller2_usuarios.jpeg" alt="" class="imagen_T">

                            <p><strong>Gestión de Tallas: </strong>Creación de tallas con campos para talla, producto, color y cantidad. Muestra cómo Filament maneja relaciones (conecta con productos).</p>
                            <img src="../public/img/taller2_crearTallas1.jpeg" alt="" class="imagen_T">
                            <img src="../public/img/taller2_crearTallas2.jpeg" alt="" class="imagen_T">

                            <p><strong>Productos: </strong>Sistema CRUD completo para productos incluyendo nombre, descripción, precio, imagen, y relación con tallas.</p>
                            <section class="galeria">

                        <div class="galeria_img">
                            <img src="../public/img/taller2_crearProducto.jpeg">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/taller2_crearProducto1.jpeg">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/Taller2_crearProducto2.jpeg">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/Taller2_crearProducto3.jpeg">
                        </div>
                        <div class="galeria_img">
                            <img src="../public/img/Taller2_productos.jpeg">
                        </div>
                        
                    </section>

                     <p><strong>Estructura de Archivos: </strong> VS Code mostrando la estructura del proyecto Laravel con Filament instalado.</p>
                            <img src="../public/img/taller2_estructura.jpeg" alt="" class="imagen_T">
                        </div>
                    </div>

                    <section class="actividad" id="taller3">
                        <div class="titulo">
                            <h1>Taller 3: "IA MULTIMODAL: creando el futuro visual e intleigente con n8n De texto a imagen que conectan y transforman."</h1>
                            <h2>Tallerista: MSc. José Salmerón</h2>
                        </div>
                        <hr>
                        <div class="contenido_actividad">
                            <div class="subtema_actividad">
                                <h3>¿Qué es la IA Multimodal?</h3>
                                <p>El término “multimodal” hace referencia a la capacidad de una inteligencia
                                    artificial para procesar y comprender información proveniente de múltiples fuentes o modos de entrada al mismo tiempo.</p>

                                <p>En lugar de limitarse a un solo tipo de dato, como el texto o las imágenes, una IA multimodal integra cuatro tipos principales de información:</p>

                                <ul>
                                    <li>Texto: lenguaje natural, instrucciones, descripciones.</li>
                                    <li>Imagen: reconocimiento visual, análisis de objetos o escenas.</li>
                                    <li>Audio: voz, música o sonidos ambientales.</li>
                                    <li>Vídeo: combinación de imagen y sonido en movimiento.
                                    </li>
                                </ul>

                                <p>Gracias a esta integración, los modelos multimodales pueden comprender contextos complejos, realizar tareas más naturales y generar resultados más ricos y precisos.
                                </p>
                            </div>
                            <div class="subtema_actividad">
                                <h3>Capacidades Multimodales</h3>
                                <p>
                                    La nueva generación de modelos de inteligencia artificial está marcada por la integración de múltiples tipos de datos —texto, imagen, audio y vídeo—, lo que les permite comprender contextos complejos y generar respuestas más naturales, creativas y precisas.
                                    Entre los modelos más destacados en este avance se encuentran GPT-5, Gemini 1.5 y Claude 3, desarrollados respectivamente por OpenAI, Google DeepMind y Anthropic.
                                <ul>
                                    <li><strong>GPT-5:</strong> Un modelo de lenguaje altamente potente, diseñado para ofrecer comprensión avanzada del contexto y generación de texto sofisticada.
                                        Se espera que combine razonamiento complejo, capacidades multimodales y un mejor manejo de instrucciones largas y detalladas.</li>
                                    <li><strong>Gemini 1.5:</strong> Desarrollado por Google DeepMind, Gemini 1.5 se posiciona como un modelo pionero en el procesamiento conjunto de texto e imagen, con un enfoque especial en la coherencia entre ambas modalidades.
                                        Su objetivo es ofrecer resultados más creativos, consistentes y útiles en tareas visuales y lingüísticas.</li>
                                    <li><strong>Claude 3:</strong> Creado por Anthropic, Claude 3 se presenta como un modelo versátil y orientado a interacciones ricas y dinámicas, centrado en la seguridad,
                                        el contexto conversacional y la comprensión de instrucciones complejas.</li>
                                </ul>
                                </p>
                                <p>Estos modelos representan la vanguardia de la IA multimodal, donde el objetivo ya no es solo procesar información, sino entenderla, relacionarla y crear a partir de ella.
                                    Cada avance en esta área acerca más la inteligencia artificial a una comprensión más humana y contextual del mundo que la rodea.</p>
                            </div>

                            <div class="subtema_actividad">
                                <h3>Aplicaciones Reales</h3>
                                <p>
                                    La inteligencia artificial multimodal no solo es un avance tecnológico; también tiene aplicaciones concretas que transforman industrias enteras.
                                    Entre las principales se destacan diseño gráfico, educación y salud, donde la combinación de texto, imagen,
                                    audio y vídeo potencia la creatividad, el aprendizaje y la atención médica.
                                <ul>
                                    <li><strong>Diseño Gráfico:</strong> La IA permite la generación automatizada de contenido visual, optimizando proyectos creativos y publicitarios de manera rápida y eficiente.</li>
                                    <li><strong>Educación:</strong> La IA multimodal facilita un aprendizaje más accesible y personalizado, ofreciendo contenido visual interactivo y dinámico adaptado a las necesidades de cada estudiante.</li>
                                    <li><strong>Salud:</strong> En el ámbito médico, la IA multimodal permite analizar imágenes médicas con mayor precisión, apoyando diagnósticos y tratamientos más efectivos.</li>
                                </ul>
                                </p>
                                <p>Estos modelos representan la vanguardia de la IA multimodal, donde el objetivo ya no es solo procesar información, sino entenderla, relacionarla y crear a partir de ella.
                                    Cada avance en esta área acerca más la inteligencia artificial a una comprensión más humana y contextual del mundo que la rodea.</p>
                            </div>

                            <div class="subtema_actividad">
                                <h3>Claves Tecnicas de la IA Multimodal</h3>
                                <p>
                                    A diferencia de los sistemas tradicionales, que procesan cada tipo de información por separado, la IA multimodal fusiona múltiples modalidades en un único flujo de procesamiento,
                                    lo que mejora la comprensión, la coherencia y la precisión de los resultados.
                                <ul>
                                    <li><strong>Entrada (Input):</strong> El modelo recibe múltiples tipos de datos simultáneamente, lo que permite que la información textual, visual y auditiva se interprete en conjunto.</li>
                                    <li><strong>Procesamiento Unificado:</strong> En lugar de utilizar modelos separados para cada modalidad, la IA multimodal utiliza un único modelo integrado, donde todas las entradas se procesan de forma conjunta a nivel de la red neuronal.</li>
                                    <li><strong>Salida (Output):</strong> El resultado es contenido coherente y preciso, donde las distintas modalidades se complementan y mantienen consistencia entre sí.</li>
                                </ul>
                                </p>
                                <p>La clave técnica de la IA multimodal está en la integración de las entradas, el procesamiento unificado y la generación de salidas coherentes,
                                    lo que la hace más potente y flexible que los modelos tradicionales centrados en una sola modalidad.</p>
                            </div>

                            <div class="subtema_actividad">
                                <h3>Ingenieria de Promps</h3>
                                <p>
                                    La ingeniería de prompts consiste en diseñar cuidadosamente las instrucciones que se le dan a un modelo de IA, de manera que las respuestas o contenidos generados sean precisos, coherentes y adaptados a nuestras necesidades.
                                    Esto es especialmente importante en IA multimodal, donde la interacción puede involucrar texto, imagen, audio y vídeo simultáneamente.
                                <ul>
                                    <li><strong>Entrada (Input):</strong> El modelo recibe múltiples tipos de datos simultáneamente, lo que permite que la información textual, visual y auditiva se interprete en conjunto.</li>
                                    <li><strong>Procesamiento Unificado:</strong> En lugar de utilizar modelos separados para cada modalidad, la IA multimodal utiliza un único modelo integrado, donde todas las entradas se procesan de forma conjunta a nivel de la red neuronal.</li>
                                    <li><strong>Salida (Output):</strong> El resultado es contenido coherente y preciso, donde las distintas modalidades se complementan y mantienen consistencia entre sí.</li>
                                </ul>
                                </p>
                                <p>La clave técnica de la IA multimodal está en la integración de las entradas, el procesamiento unificado y la generación de salidas coherentes,
                                    lo que la hace más potente y flexible que los modelos tradicionales centrados en una sola modalidad.</p>
                            </div>

                            <div class="subtema_actividad">
                                <h3>n8n - Automatización sin código</h3>
                                <p>
                                    Durante el taller se mostró cómo integrar n8n con Telegram para crear bots automatizados capaces de responder mensajes de forma inteligente, utilizando IA como GPT. Esto permite diseñar flujos de trabajo que
                                    reciben, procesan y responden mensajes sin intervención manual, optimizando la comunicación en canales digitales.
                                </p>
                                <p>BotFather es la herramienta oficial de Telegram para crear y gestionar bots. En el workflow de n8n se utilizó
                                    para generar el bot que recibiría los mensajes y enviaría las respuestas automatizadas.</p>
                                <p>Entrada – Telegram Trigger
                                <ul>
                                    <li> Concepto: El bot recibe mensajes enviados en Telegram.</li>
                                    <li>Evento: Cada vez que un usuario escribe un mensaje, se dispara el flujo de trabajo.</li>
                                </ul>
                                </p>
                                <p>
                                    Procesamiento – AI Assistant
                                <ul>
                                    <li>Concepto: Los mensajes se procesan mediante inteligencia artificial.</li>
                                    <li>Acción: El asistente de IA genera una respuesta contextualizada, utilizando modelos como GPT.</li>
                                    <li>Resultado: Mensajes coherentes, precisos y adaptados al contexto del usuario.</li>
                                </ul>
                                </p>
                                <p>
                                    Salida – Respuesta Automática
                                <ul>
                                    <li>Concepto: La respuesta generada por la IA se envía al usuario automáticamente.</li>
                                    <li> Medio: Mensaje devuelto a través de Telegram, completando el ciclo de comunicación.</li>
                                </ul>
                                </p>
                            </div>


                            <section class="galeria">

                                <div class="galeria_img">
                                    <img src="../public/img/Taller3_2.png">
                                </div>
                                <div class="galeria_img">
                                    <img src="../public/img/Taller31.png">
                                </div>
                                <div class="galeria_img">
                                    <img src="../public/img/Taller3_3.png">
                                </div>
                                <div class="galeria_img">
                                    <img src="../public/img/Taller3_4.png">
                                </div>
                            </section>


                        </div>



                    </section>
</body>

</html>