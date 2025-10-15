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
            <li><a href="registrar">Registrar visita</a></li>
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
                            <h3>Evolución del dinero</h3>
                            <p>
                                La ponencia comenzó hablando sobre cómo ha evolucionado la economía, desde el trueque hasta el dinero digital,
                                y cómo el Bitcoin ha surgido como una nueva forma de manejar y transferir dinero sin necesidad de bancos ni la intervención del gobierno.
                            </p>
                        </div>
                        <div class="subtema_actividad">
                            <h3>Funciones del dinero</h3>
                            <p>
                                El ponente nos explicó sobre las tres funciones básicas del dinero:
                            <ul>
                                <li><strong>Medio de intercambio:</strong> el dinero facilita las transacciones al actuar como un intermediario aceptado por todos.</li>
                                <li><strong>Depósito de valor:</strong> el dinero permite almacenar riqueza para su uso futuro, manteniendo su valor a lo largo del tiempo.</li>
                                <li><strong>Unidad de cuenta:</strong> el dinero proporciona una medida común para valorar bienes y servicios, facilitando la comparación de precios.</li>
                            </ul>
                            </p>
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
                                <p>
                                    La ponencia comenzó hablando sobre cómo ha evolucionado la economía, desde el trueque hasta el dinero digital,
                                    y cómo el Bitcoin ha surgido como una nueva forma de manejar y transferir dinero sin necesidad de bancos ni la intervención del gobierno.
                                </p>
                            </div>
                            <div class="subtema_actividad">
                                <h3>Funciones del dinero</h3>
                                <p>
                                    El ponente nos explicó sobre las tres funciones básicas del dinero:
                                <ul>
                                    <li><strong>Medio de intercambio:</strong> el dinero facilita las transacciones al actuar como un intermediario aceptado por todos.</li>
                                    <li><strong>Depósito de valor:</strong> el dinero permite almacenar riqueza para su uso futuro, manteniendo su valor a lo largo del tiempo.</li>
                                    <li><strong>Unidad de cuenta:</strong> el dinero proporciona una medida común para valorar bienes y servicios, facilitando la comparación de precios.</li>
                                </ul>
                                </p>
                            </div>
                        </div>



                    </section>
</body>

</html>