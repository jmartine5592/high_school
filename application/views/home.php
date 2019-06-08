    <?php $this->load->view('header'); ?>
        <section class="slide">
            <img src="img/img1.jpeg" alt="slide" />
        </section>
        <section class="container">
            <table>
                <tr>
                    <td>
                        <img src="img/ico1.png" alt="ico 1" />
                        <h3>Proximos Eventos</h3>
                        <p>
                            En esta sección apareceran los eventos proximos en el calendario de la institución educativa.
                        </p>
                    </td>
                    <td>
                        <img src="img/ico4.png" alt="ico 4" />
                        <h3>Información Institucional</h3>
                        <p>
                            En este vinculo puede encontrar la información correspondiente a la institución como la Misión, Visión, PEI, entre otros.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="img/ico2.png" alt="ico 2" />
                        <h3>Servicios</h3>
                        <p>
                            Para visualizar los servicios prestados por la institución, puede hacer clic aquí.
                        </p>
                    </td>
                    <td>
                        <img src="img/ico3.png" alt="ico 3" />
                        <h3>Contacto</h3>
                        <p>En esta opción puede encontrar la información de contacto de la institución educativa.</p>
                    </td>
                </tr>
            </table>
            <div style="text-align: center; width: 100%;">
                <h1>
                    Cantidad de visitas
                    <br>
                    <?php echo $quantity_views ?>
                </h1>
            </div>
        </section>
        <?php $this->load->view('footer'); ?>