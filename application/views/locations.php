        <?php $this->load->view('header'); ?>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvW8O7iyrwxGTzYUQ-Qh7TKVipE3Ypjbs&callback=initMap"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <section class="container-school">
            <img style="width: 80%; border-radius: 2em; margin-bottom: 2em;" src="<?php echo base_url() ?>img/img1.jpeg" alt="imagen relacionada" />
            
            <p>
                <strong>HIGH TECNOLOGY SCHOOL</strong> es una propuesta educativa innovadora que desarrolla y presta
                servicios de alta calidad a los niños y niñas, con una formación integral y por dimensiones,
                orientada a la participación y motivación a la tecnología e inglés, como segunda lengua; la
                propuesta pedagógica se desarrolla a través del sentido humano, valores, y pedagogía, para
                satisfacer las necesidades de la sociedad; formando así personas felices, afirmando su identidad,
                seguros de sí mismos, creativos, independientes, que desarrollen sus capacidades y habilidades
                emocionales.
                Que disfruten y estén preparados para un excelente desempeño en su vida escolar, familiar y
                social. Una institución de educación en Caminadores, Párvulos, Pre jardín, Jardín y Transición,
                calendario A, mixto con las puertas abiertas a todos los niños y niñas. Nuestros docentes son
                idóneos, licenciados en preescolar, con innovadoras estrategias didácticas que hacen de su
                práctica pedagógica una aventura para los niños basada en el juego y el trabajo.
            </p>

            <h2>Sedes:</h2>
            <h3>SEDE PRINCIPAL</h3>
            <p style="text-align: center;">Carrera 8 #15 55 - Lincoln</p>
            <div style="width: 300px; height: 300px; margin: 0 auto;" id="map1">

            </div>
            <h3>SEDE B</h3>
            <p style="text-align: center;">Carrera 32 # 12 231 - Ciudad Verde</p>
            <div style="width: 300px; height: 300px; margin: 0 auto;" id="map2">
                
            </div>

        </section>
        <?php $this->load->view('footer'); ?>