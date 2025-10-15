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
            <h1>Día 1: Inaguración, Ponencias y Hackaton</h1>
            <p>La Semana de Sistemas inició con una ceremonia de inaguración llena de alegría, que marcó el inicio de esta experiencia de aprendizaje tecnológico.
                Los participantes pudieron sumergirse de inmediato en temas de gran impacto y relevancia global a través de las primeras ponencias del evento. </p>

            <p><strong>Ponencia 1: "ABC del Bitcoin"</strong><br>
                Se nos dio a conocer acerca de los fundamentos de la economía, el dinero y la evolución hacia lo digital.
            </p>
            <p><strong>Ponencia 2: "Inteligencia Artificial Generativa: de la idea a la acción"</strong><br>
                Se reflexionó sobre cómo las tecnologías no son una amenaza por sí mismas, sino que su adopción pasiva y desinformada puede ser riesgosa.</p>
            <p><strong>Hackaton</strong><br>
                Actividad en la que los estudiantes presentaron una problemática junto con su respectiva solución, aplicando los conocimientos adquiridos a lo largo de sus años universitarios.</p>
        </div>
        <div class="dia_img">
            <img src="../public/img/DIA1_P.png" alt="">
        </div>
    </section>

    <section class="contenido">
        <aside class="sidebar">
            <ul>
                <li>
                    <a href="#ABC_Bitcoin">ABC Del Bitcoin</a>
                </li>
                <li>
                    <a href="#IA_Generativa">Inteligencia Artificial Generativa - de la idea a la acción</a>
                </li>
                <li>
                    <a href="#Hackaton">Hackaton</a>
                </li>
                <li>
                    <a href="#gal_inaguracion">Galeria Inaguración</a>
                </li>
            </ul>
        </aside>

        <section class="section_actividad">

            <section class="actividad" id="ABC_Bitcoin">
                <div class="titulo">
                    <h1>Ponencia 1: "ABC del Bitcoin"</h1>
                    <h2>Ponente: MSc. Luis Contreras</h2>
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
                    <div class="subtema_actividad">
                        <h3>Consecuencias del dinero fiducario</h3>
                        <p>
                            Se nos comentó que cuando hay inflación, las empresas podian reaccionar de varias formas:
                            pueden aumentar los precios directamente, ocultar el aumento subiendo precios gradualmente,
                            hacer deterioro reduciendo la calidad de los ingredientes o productos,
                            hacer reducción de cantidad (te dan menos por el mismo precio),
                            o simplemente hacer inflación de precios trasladando todos los costos al cliente.
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>¿Qué es bitcoin?</h3>
                        <p>
                            El ponente definió el Bitcoin como una forma de dinero digital descentralizado que
                            permite transacciones directas entre personas sin necesidad de intermediarios como bancos o gobiernos.
                        </p>
                        <p>
                            Explicaron que Bitcoin es varias cosas a la vez: es una unidad monetaria, es una red de nodos conectados con reglas en común,
                            y es una cadena de bloques que funciona como un registro vinculado de todas las transacciones verificadas.
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Comparación del Sistema Fiat vs Bitcoin</h3>
                        <div class="comparacion">
                            <div class="fiat">
                                <h4>Sistema Fiat</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <strong>Centralizado: </strong>Se mencionó que el dinero fiat está controlado por entidades centrales como los bancos centrales.
                                    </li>
                                    <li>
                                        <strong>Cerrado: </strong>Explicaron que es un sistema cerrado porque no cualquiera puede participar en su creación o control
                                    </li>
                                    <li>
                                        <strong>Controlado por el gobierno: </strong>El dinero está sujeto a las decisiones políticas y económicas del gobierno de turno.
                                    </li>
                                    <li>
                                        <strong>Suministro Ilimitado: </strong>Los gobiernos pueden imprimir más dinero según sus necesidades, lo que puede llevar a la inflación.
                                    </li>
                                </ul>
                            </div>
                            <div class="bitcoin">
                                <h4>Bitcoin</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <strong>Descentralizado: </strong>Explicaron que Bitcoin no tiene un jefe, no hay una empresa o gobierno que lo controle.
                                        La red funciona gracias a miles de computadoras (nodos) alrededor del mundo que verifican las transacciones.
                                    </li>
                                    <li>
                                        <strong>Abierto: </strong>Dijeron que cualquier persona en el mundo puede participar. Puedes descargar el software, ver el código (es de código abierto),
                                        verificar transacciones, enviar o recibir bitcoins.
                                    </li>
                                    <li>
                                        <strong>De igual a igual: </strong>
                                        Esto significa que puedes enviar bitcoins directamente a otra persona sin intermediarios.
                                    </li>
                                    <li>
                                        <strong>Finito: </strong>Esto significa que Bitcoin no puede inflarse artificialmente como el dinero fiat. Es como el oro digital -
                                        hay una cantidad limitada.
                                    </li>
                                    <li>
                                        <strong>Infalsificable: </strong>Explicaron que gracias a la tecnología de blockchain y la criptografía, es matemáticamente imposible falsificar bitcoins.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Tipos de Wallets</h3>
                        <p>
                        <ol>
                            <li>
                                <strong>Con custodia: </strong>Son wallets donde una empresa o servicio externo guarda tus bitcoins por ti.
                                Tú confías en que ellos mantendrán tus fondos seguros, pero no tienes control total sobre tus llaves privadas.
                            </li>
                            <li>
                                <strong>Sin custodia: </strong>Son wallets donde tú tienes control total sobre tus bitcoins y llaves privadas.
                            </li>
                            <li>
                                <strong>Calientes: </strong>Son wallets conectadas a internet, lo que las hace más convenientes para transacciones rápidas pero también más vulnerables a ataques.
                            </li>
                            <li>
                                <strong>Frías: </strong> Son wallets que no están conectadas a internet, lo que las hace más seguras contra hackers pero menos convenientes para transacciones rápidas.
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>
                
                <h2>Galería Ponencia 1</h2>

                <section class="galeria">
                    
                    <div class="galeria_img">
                        <img src="../public/img/ponencia1.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/ponencia1_2.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/ponencia1_3.jpeg">
                    </div>
                    <div class="galeria_img">
                        <video controls>
                            <source src="../public/img/ponencia1_v.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento <code>video</code>.
                        </video>
                    </div>
                </section>
            </section>
            <hr>

            <section class="actividad" id="IA_Generativa">
                <div class="titulo">
                    <h1>Ponencia 2: "Inteligencia Artificial Generativa - de la idea a la acción"</h1>
                    <h2>Ponente: MSc. Rodrigo Pineda</h2>
                </div>
                <hr>
                <div class="contenido_actividad">
                    <div class="subtema_actividad">
                        <p>
                            La ponencia inició con una cita muy potente de Neil Postman: <i>"Las tecnologías no son una amenaza en sí mismas, la verdadera amenaza es aceptarlas de manera pasiva y desinformada."</i></p>
                        <p> Con esto plantearon la pregunta clave: <br><strong> ¿Es necesaria una capacitación para usar inteligencia artificial? </strong> <br>La respuesta implícita es que sí, porque no podemos aceptarla pasivamente sin entender cómo funciona.
                        </p>
                    </div>
                    <div class="subtema_actividad">
                        <h3>Transformación</h3>
                        <p>
                            Explicaron que estamos viviendo una transformación caracterizada por tres elementos:
                        <ul>
                            <li><strong>Incertidumbre:</strong> No sabemos exactamente hacia dónde vamos</li>
                            <li><strong>Velocidad:</strong> Los cambios ocurren muy rápido</li>
                            <li><strong>Transversalidad:</strong> La IA afecta a TODAS las profesiones y áreas, no solo a la tecnología</li>
                        </ul>
                        </p>
                    </div>
                    <div class="subtema_actividad">
                        <h3>Transformación</h3>
                        <p>
                            Explicaron que estamos viviendo una transformación caracterizada por tres elementos:
                        <ul>
                            <li><strong>Incertidumbre:</strong> No sabemos exactamente hacia dónde vamos</li>
                            <li><strong>Velocidad:</strong> Los cambios ocurren muy rápido</li>
                            <li><strong>Transversalidad:</strong> La IA afecta a TODAS las profesiones y áreas, no solo a la tecnología</li>
                        </ul>
                        </p>
                    </div>
                    <div class="subtema_actividad">
                        <h3>¿Qué es la Inteligencia Artificial?</h3>
                        <p>
                            Se nos empezó definiendo la inteligencia como:
                        <ul>
                            <li>La capacidad de entender o comprender</li>
                            <li>La capacidad de resolver problemas</li>
                        </ul>
                        </p>
                        <p>
                            Luego, el ponente definió la inteligencia artificial como:<br>
                            <q>La ciencia e ingeniería de hacer máquinas inteligentes, especialmente programas de cómputo inteligentes</q>
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Clasificación de la IA según su capacidad</h3>
                        <p>
                            Mencionaron dos tipos principales de IA según su capacidad:
                        <ul>
                            <li><strong>IA débil o estrecha:</strong> Diseñada para realizar tareas específicas, como asistentes virtuales o sistemas de recomendación.</li>
                            <li><strong>IA fuerte o genral:</strong> Una IA que podría hacer cualquier tarea intelectual que un humano puede hacer</li>
                        </ul>
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Machine Learning y sus tipos de aprendizaje</h3>
                        <p>
                            Se nos explicó que el Machine Learning es una rama de la IA que permite a las máquinas aprender de los datos sin ser explícitamente programadas.
                            Existen cuatro tipos principales de aprendizaje en Machine Learning:
                        <ul>
                            <li><strong>Aprendizaje supervisado:</strong> Le das ejemplos con respuestas correctas y aprende de ellos</li>
                            <li><strong>Aprendizaje no supervisado:</strong> Le das datos sin etiquetar y busca patrones por sí mismo</li>
                            <li><strong>Aprendizaje semi-supervisado:</strong> Combina ambos métodos, usando algunos datos etiquetados y otros sin etiquetar</li>
                            <li><strong>Aprendizaje por refuerzo:</strong> Aprende mediante ensayo y error, recibiendo recompensas o castigos</li>
                        </ul>
                        </p>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Diferencias entre ML, DL y FM</h3>
                        <ul>
                            <li><strong>Machine Learning (Simple -> Simple):</strong> Problemas simples que se resuelven de forma simple.</li>
                            <li><strong>Deep Learning (Complejo -> Simple):</strong> Problemas complejos que se resuelven de forma simple para el usuario final.</li>
                            <li><strong>Foundation Model (Complejo -> Complejo):</strong> Tanto el problema como la solución son complejos.</li>
                        </ul>
                    </div>

                    <div class="subtema_actividad">
                        <h3>Redes Antagónicas (GAN) </h3>
                        <p>Mencionaron que fueron inventadas en 2010 por unos canadienses.
                            Son redes que "compiten" entre sí: una genera contenido falso y otra intenta detectarlo,
                            mejorando ambas en el proceso.</p>

                        <p>¿Para qué sirve?</p>
                        <ul>
                            <li>Generar imágenes, videos, música, texto, etc.</li>
                            <li>Sintesis de Datos.</li>
                            <li>Mejorar la calidad de imágenes y videos.</li>
                            <li>Aplicaciones en medicina, arte, diseño, etc.</li>
                        </ul>
                    </div>

                    <div class="subtema_actividad">
                        <h3>LLM (Large Lenguage Models</h3>
                        <p>Son los modelos de lenguaje grandes, como el que están usando ahora (ChatGPT, Claude, etc.).
                            Están entrenados con enormes cantidades de texto para entender y generar lenguaje humano.</p>
                    </div>


                    <h2>Galería Ponencia 2</h2>

                <section class="galeria">
                    
                    <div class="galeria_img">
                        <img src="../public/img/ponencia2.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/ponencia2_2.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/ponencia2_3.jpeg">
                    </div>
                    <div class="galeria_img">
                        <video controls>
                            <source src="../public/img/ponencia2_v.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento <code>video</code>.
                        </video>
                    </div>
                </section>

            </section>
            <hr>

            <section class="actividad" id="Hackaton">
                <div class="titulo">
                    <h1>Hackaton</h1>
                </div>
                <hr>
                <div class="contenido_actividad">
                    <div class="subtema_actividad">
                        <h3>¿Qué es una Hackaton?</h3>
                        <p>
                            Una hackaton es un evento donde personas con diferentes habilidades (programadores, diseñadores, etc.)
                            se reúnen para colaborar intensamente en proyectos tecnológicos durante un período corto de tiempo.
                            El objetivo es desarrollar soluciones innovadoras a problemas específicos, aprender nuevas tecnologías y fomentar el trabajo en equipo.
                        </p>
                    </div>
                    <div class="subtema_actividad">
                        <h3>Desarrollo de la Hackaton de la Semana de Sistemas 2025</h3>
                        <p>
                            La hackaton de la Semana de Sistemas 2025 dio inicio alrededor de las 2:00 pm donde se definieron los grupos de trabajo y se asignó el contexto en el cual tenian que desarrollar su problematica y respectiva solución.
                            Algunos de los grupos de trabajo ya llevaban su problematica y su solución resuelta, por lo que durante el tiempo de preparación se dedicaron a perfeccionar detalles.

                            <br>
                            Participaron 5 equipos en total
                            <br>
                        <ul>
                            <li>Luis y su pandilla que presentaron una problematica sobre la gestion de citas en una veterinaria.</li>
                            <li>Los Mcnificos, que presentaron solamente la problematica sobre un sistema de gestion de reservas y asistencia.</li>
                            <li>Web Team, que presento una aplicación de Bingo, los presentes en la hackaton participamos en una partida para ver si la aplicación funcionaba correctamente </li>
                            <li>Negreria Boys, que solamente era Luis Galeas, presentó un sistema de citas en consola para una veterinaria.</li>
                            <li>Y por ultimo los Franquitos, que presentaron un sistema de gestión de notas tambien en consola.</li>
                        </ul>
                        </p>
                        <p>
                            A la hora de la premiación, en quinto lugar quedaron los Mcnificos, en cuarto lugar los Franquitos, en tercer lugar Luis Galeas, en segundo lugar Luis y su pandilla y los ganadores fueron los Web Team.

                        </p>
                        <p>Y de esa manera concluyó el primer día de la Semana de Sistemas 2025.</p>
                    </div>
                </div>

  <h2>Galería Hackaton</h2>

                <section class="galeria">
                    
                    <div class="galeria_img">
                        <img src="../public/img/hackaton.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/hackaton1.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/hackaton2.jpeg">
                    </div>
                    <div class="galeria_img">
                        <video controls>
                            <source src="../public/img/hackatonv.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento <code>video</code>.
                        </video>
                    </div>
                     <div class="galeria_img">
                        <video controls>
                            <source src="../public/img/hackatonv1.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento <code>video</code>.
                        </video>
                    </div>
                </section>
        </section>
        <section id="gal_inaguracion">

          <h2>Galería Inaguración</h2>

                <section class="galeria">
                    
                    <div class="galeria_img">
                        <img src="../public/img/inaguracion.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/inaguracion1.jpeg">
                    </div>
                    <div class="galeria_img">
                        <img src="../public/img/inaguracion2.jpeg">
                    </div>
                    <div class="galeria_img">
                        <video controls>
                            <source src="../public/img/inaguracionv.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento <code>video</code>.
                        </video>
                    </div>
                </section>
                </section>
    </section>

</body>

</html>