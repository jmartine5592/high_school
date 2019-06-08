        <?php $this->load->view('header'); ?>
        <section class="container-school">
            <img style="width: 80%; border-radius: 2em; margin-bottom: 2em;" src="<?php echo base_url() ?>img/img2.jpeg" alt="imagen relacionada" />
            
            <br/>
            <form class="form">
                <h3>Formulario de Contacto</h3>
                <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Preguntas o temas a tratar:</label>
                    <textarea class="form-control"></textarea>
                </div>
                <button class="btn btn-success">Enviar</button>
            </form>
            <br/><br/><br/> 
        </section>
        <?php $this->load->view('footer'); ?>