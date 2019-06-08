        <?php $this->load->view('header'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>login.js"></script>
        <section class="container-school">
            <br/>
            <div class="form">
                <h3>Formulario de Inicio de Sesión</h3>
                <div class="form-group">
                    <label>Nombre de usuario</label>
                    <input id="user" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input id="password" type="password" class="form-control" />
                </div>
                <button class="btn btn-success">Iniciar Sesión</button>
    </div>
            <br/><br/><br/> 
        </section>
        <?php $this->load->view('footer'); ?>