		<?php $this->load->view('header'); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>signin.js"></script>
        <section class="container-school">
			<br/>
			<h3 style="width: 100%; text-align: center;">Formulario de inscripción</h3>
			<br/>
            <div class="form">
				<div class="form-group">
					<label >Usuario</label>
					<input id="user" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label >Contraseña</label>
					<input id="password" type="password" class="form-control">
				</div>
				<button class="btn btn-success">Registrar</button>
			</div>
            <br/><br/><br/> 
        </section>
        <?php $this->load->view('footer'); ?>