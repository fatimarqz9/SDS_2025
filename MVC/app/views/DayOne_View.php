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

    <section class="dia1_presentation">
        <div class="dia1_intro">
            <h1>Día 1: Inaguración y Ponencias</h1>
            <p>La Semana de Sistemas inició con una ceremonia de inaguración llena de alegría, que marcó el inicio de esta experiencia de aprendizaje tecnológico.
                Los participantes pudieron sumergirse de inmediato en temas de gran impacto y relevancia global a través de las primeras ponencias del evento. </p>

            <p><strong>Ponencia 1: "ABC del Bitcoin"</strong><br>
                Se nos dio a conocer acerca de los fundamentos de la economía, el dinero y la evolución hacia lo digital.
            </p>
            <p><strong>Ponencia 2: "Inteligencia Artificial Generativa: de la idea a la acción"</strong><br>
                Se reflexionó sobre cómo las tecnologías no son una amenaza por sí mismas, sino que su adopción pasiva y desinformada puede ser riesgosa.</p>
        </div>
        <div class="dia1_img"></div>
    </section>

    <section class="contenido">
        <aside class="sidebar">
            <ul>
                <li>
                    <a href="#ABC_Bitcoin">ABC Del Bitcoin</a>
                </li>
                <li>
                    <a href="#IA_Generativa">Inteligencia Artificial Generativa</a>
                </li>
            </ul>
        </aside>

        <section class="section_ponencias">
            <section class="ponencia" id="ABC_Bitcoin">
                <div class="titulo">
                    <h1>Ponencia 1: "ABC del Bitcoin"</h1>
                    <h2>Ponente: MSc. Luis Contreras</h2>
                </div>
                <hr>
                <div class="contenido_ponencia">
                    <div class="subtema_ponencia">
                        <h3>Evolución del dinero</h3>
                        <p>
                            La ponencia comenzó hablando sobre cómo ha evolucionado la economía, desde el trueque hasta el dinero digital,
                            y cómo el Bitcoin ha surgido como una nueva forma de manejar y transferir dinero sin necesidad de bancos ni la intervención del gobierno.
                        </p>
                    </div>
                    <div class="subtema_ponencia">
                        <h3>Funciones del dinero</h3>
                        <p></p>
                    </div>
                </div>
            </section>

            <section class="ponencia" id="IA_Generativa">
                <div class="titulo">
                    <h1>Ponencia 2: "Inteligencia Artificial Generativa - de la idea a la acción"</h1>
                    <h2>Ponente: MSc. Luis Contreras</h2>
                </div>
                <hr>
                <div class="contenido_ponencia">
                    <div class="subtema_ponencia">
                        <h3>Evolución del dinero</h3>
                        <p>
                            La ponencia comenzó hablando sobre cómo ha evolucionado la economía, desde el trueque hasta el dinero digital,
                            y cómo el Bitcoin ha surgido como una nueva forma de manejar y transferir dinero sin necesidad de bancos ni la intervención del gobierno.
                        </p>
                    </div>
                    <div class="subtema_ponencia">
                        <h3>Funciones del dinero</h3>
                        <p></p>
                    </div>
                </div>
            </section>
        </section>
    </section>

</body>

</html>