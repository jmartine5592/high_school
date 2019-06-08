<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="<?php echo base_url(); ?>style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <img id="logo" src="<?php echo base_url(); ?>img/logo.jpeg" alt="logo" />
        </header>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo base_url(); ?>">Inicio</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/core/school_info">Institucional</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/core/locations">Sedes</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/core/contact">Contacto</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/core/signin">Registrarse</a>
                </li>
                <?php
	    			if($this->session->userdata('user') != null){
                        $user = $this->session->userdata('user');
                        echo '<li> <a href="#" disabled="disabled">Usuario: ' . $user["user"] . '</a> </li>';
                        echo '<li> <a href="/high_school/index.php/core/do_logout">Cerrar Sesión</a> </li>';
                    }else{
                        echo '<li> <a href="' . base_url() . 'index.php/core/login">Iniciar Sesión</a> </li>';
                    }
                ?>
            </ul>
        </nav>