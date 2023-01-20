<?php
/*
    require_once("data_base.php");
    function isnullDatosMensaje($nombre,$email,$mensaje){
		if(strlen(trim($nombre)) < 1 || strlen(trim($email)) < 1 || strlen(trim($mensaje)) < 1 )
		{
			return true;
		} else {
			return false;
		}
    }
    $aux=0;
    $errors="";*/
    /*
    if(!empty($_GET)){

        $nombre = addslashes($_REQUEST["nombre"]);
        $email = addslashes($_REQUEST["email"]);
        $telefono = addslashes($_REQUEST["celular"]);
        $pais = addslashes($_REQUEST["pais"]);
        $mensaje = addslashes($_REQUEST["mensaje"]);
        if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
            $errors="Esta dirección de correo no es válida.";
            $aux=2;
        }else{
            if(isnullDatosMensaje($nombre,$email,$mensaje)){
                $errors=" Campos requeridos vacios.";
                $aux=2;
            }
            else{
                    $query = "insert into mensajes(nombre, email,telefono, pais, mensaje)
                    values ('$nombre', '$email','$telefono','$pais','$mensaje')";
                    $rs = mysqli_query($enlace,$query) or die("Error al enviar");
                    if($rs){
                        $aux=1;
                    }
                    else{
                        $errors=" Su Mensaje se envio correctamente.";
                        $aux=2;
                    }
            }
        }
    };*/
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--sweetalert2-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
	<!--Fin sweetalert2-->
    <title>My Personal Portfolio</title>
</head>

<body>
    <div>
        <img class="scrollTop" onclick="scrollToTop()" src="img/bxs-chevron-up-circle.svg" alt="">
    </div>
    <!-- HEADER -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div><img src="img/logo.png" height="30" width="30" alt="logo"></div>
            <div>
                <a href="#" class="nav__logo">Mauricio<span>Nina</span></a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Sobre Mí</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Habilidades</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Proyectos</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contácteme</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <!-- MAIN -->

    <main class="l-main">
        <!-- HOME-SECTION -->

        <section class="home bd-grid " id="home">
            <div class="home__data">
                <h1 class="home__title">Soy <br> <span class="home__title-color"></span></h1>
                <p class="home__text">Para mi, todo en esta vida es posible si te lo propones.
                </p>
            </div>
            <div class="home__wrapper">
                <div class="home__social">
                    <a href="https://msng.link/o/?Nina=tg" target="__blank" class="home__social-icon"><i class='bx bxl-telegram'></i></i></a>
                    <a href="https://api.whatsapp.com/send?phone=59179442467&text=Hola+necesito+informacion.&app_absent=0" target="__blank" class="home__social-icon"><i class='bx bxl-whatsapp'></i></i></a>
                    <a href="https://www.facebook.com/mauricio.nina.73/" target="__blank" class="home__social-icon"><i class='bx bxl-facebook-square' ></i></a>
                    <a href="https://github.com/Mauriinf" target="__blank" class="home__social-icon"><i class='bx bxl-github'></i></a>
                </div>
                <div class="home__img">
                    <img src="img/jumbo.svg" alt="My photo">
                </div>
            </div>
        </section>
        <!-- ABOUT-SECTION -->
        <section class="about section" id="about">
            <h2 class="section-title">Sobre Mí</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="img/foto.jpeg" alt="My image">
                </div>

                <div>
                    <h1 class="about__subtitle">¡HOLA!</h1>
                    <h2 class="about__subtitle">Soy Ingeniero Informático en Bolivia.</h2>
                    <p class="about-text">
                        Soy una persona dedicada en lo que hago, con una gran motivación por alcanzar mis metas, capaz de adaptarme a cualquier circunstancia. Mi mayor característica es mi curiosidad por aprender cosas nuevas esto me ha vuelto autodidacta.
                        <br>Me fascinan los concursos de programación competitiva y la informática. Me encanta investigar sobre algoritmos y tecnologías nuevas como lenguajes de programación en tendencia. Mis habilidades técnicas: <i><strong> C, C++, JAVA, C#, HTML5,
                        CSS3, SASS, BOOTSTRAP 5, JS, VUE, REACT, SQL.</strong></i>
                        <br> Me gustaría encontrar un equipo sincero con quienes intercambiar conocimientos y mejorar cada vez mas y mas, tambien me gusta enseñar a los demás ya sea a compañeros de trabajo o amigos de esa manera uno repasa indirectamente.
                    </p>

                </div>
            </div>
        </section>
        <!-- SKILLS-SECTION -->
        <section class="skills section" id="skills">
            <h2 class="section-title">Habilidades</h2>

            <div class="skills__container bd-grid">
                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>

                        <div>
                            <span class="skills__percentage">78%</span>
                        </div>

                        <div class="skills__bar skills__html"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>

                        <div>
                            <span class="skills__percentage">76%</span>
                        </div>

                        <div class="skills__bar skills__css"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">Javascript</span>
                        </div>

                        <div>
                            <span class="skills__percentage">70%</span>
                        </div>

                        <div class="skills__bar skills__js"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-vuejs skills__icon'></i>
                            <span class="skills__name">Vue</span>
                        </div>

                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>

                        <div class="skills__bar skills__react"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bx-git-branch skills__icon'></i>
                            <span class="skills__name">Git</span>
                        </div>

                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>

                        <div class="skills__bar skills__react"></div>
                    </div>

                </div>

                <div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-bootstrap skills__icon'></i>
                            <span class="skills__name">Bootstrap 4</span>
                        </div>

                        <div>
                            <span class="skills__percentage">82%</span>
                        </div>

                        <div class="skills__bar skills__bootstrap"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-atom skills__icon'></i>
                            <span class="skills__name">REACT </span>
                        </div>

                        <div>
                            <span class="skills__percentage">90%</span>
                        </div>

                        <div class="skills__bar skills__sass"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-logo-react skills__icon'></i>
                            <span class="skills__name">C-Sharp</span>
                        </div>

                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>

                        <div class="skills__bar skills__git"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-c-plus-plus skills__icon'></i>
                            <span class="skills__name">C++</span>
                        </div>

                        <div>
                            <span class="skills__percentage">80%</span>
                        </div>

                        <div class="skills__bar skills__github"></div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bx-coin-stack skills__icon'></i>
                            <span class="skills__name">SQL</span>
                        </div>

                        <div>
                            <span class="skills__percentage">82%</span>
                        </div>

                        <div class="skills__bar skills__github"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WORK-SECTION -->
        <section class="work section" id="work">
            <h2 class="section-title">Proyectos</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="img/dino-sis.png" alt="">
                    <h4>Juez Virtual Dino</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="https://github.com/Mauriinf/Dino-oj" target="__blank" class="work__btn">Github</a>
                            <a href="http://jv.uatf.edu.bo/" target="__blank" class="work__btn">Website</a>
                        </div>
                    </div>
                </div>
                <div class="work__img">
                    <img src="img/portal-san-juan-sis.png" alt="">
                    <h4>Portal Escuela de Basquet</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="https://github.com/Mauriinf/San-Juan-Portal-Scool" target="__blank" class="work__btn">Github</a>
                        </div>
                    </div>
                </div>
                <div class="work__img">
                    <img src="img/odiseo-sis.png" alt="">
                    <h4>Sistema de Directores U.A.T.F.</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="http://odiseo.uatf.edu.bo/login" target="__blank" class="work__btn">Website</a>
                        </div>
                    </div>
                </div>
                <div class="work__img">
                    <img src="img/Sis-Monterrey.png" alt="">
                    <h4>Sistema de Ventas e Inventario de Almacen Monterrey</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="https://github.com/Mauriinf/SisVentasAlmacenMonterrey" target="__blank" class="work__btn">Github</a>
                        </div>
                    </div>
                </div>
                <div class="work__img">
                    <img src="img/dicytuatf.png" alt="">
                    <h4>Dicyt Universidad Autónoma Tomás Frías</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="https://github.com/Mauriinf/DepartamentoDicytU.A.T.F" target="__blank" class="work__btn">Github</a>
                        </div>
                    </div>
                </div>
                <div class="work__img">
                    <img src="img/dj-sis.png" alt="">
                    <h4>Portal web DJ</h4>
                    <div class="work__button-wrapper">
                        <div class="work__btn-group">
                            <a href="https://github.com/Mauriinf/portal-web-dj" target="__blank" class="work__btn">Github</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Contacto-->
        <section class="container-for" id="contact">
            <div class="formulario">
                <h1 class="logo">Contacte<span>Me</span></h1>
                <hr>

                <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Contácteme</h3>
                        <form action="index.php" method="GET" >
                            <div class="group">
                                <div>
                                    <p>
                                        <label>Nombre Completo</label>
                                        <input type="text" name="nombre">
                                    </p>
                                    <p>
                                        <label>Correo Electrónico</label>
                                        <input type="email" name="email" id="email">
                                    </p>
                                </div>
                                <div>
                                    <p>
                                        <label>Número Teléfono</label>
                                        <input type="tel" name="celular">
                                    </p>
                                    <p>
                                        <label>País</label>
                                        <input type="text" name="pais">
                                    </p>
                                </div>
                            </div>
                            <p class="block">
                                <label>Mensaje</label>
                                <textarea name="mensaje" rows="3"></textarea>
                            </p>
                            <p class="block">
                                <button type="submit" id="submitBoton"> Enviar</button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- CONTACT-SECTION -->
        <section class="contact section">
            <h2 class="section-title">Contacto</h2>

            <div class="contact__container bd-grid">
                <div class="contact__boxes">
                    <div class="box">
                        <span class="text-secondary">Email:</span> mauricio_nina@hotmail.com
                    </div>
                    <div class="box">
                        <span class="text-secondary">Telefono:</span> +59179442467
                    </div>
                    <div class="box">
                        <span class="text-secondary">Dirección:</span> Bolivia, ciudad de Potosí
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer__social">
            <a href="https://www.facebook.com/mauricio.nina.73/" target="__blank" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="https://msng.link/o/?Nina=tg" target="__blank" class="footer__icon"><i class='bx bxl-telegram' ></i></a>
            <a href="https://api.whatsapp.com/send?phone=59179442467&text=Buenas%20tardes%20en%20que%20puedo%20ayudarte." target="__blank" class="footer__icon"><i class='bx bxl-whatsapp' ></i></a>
        </div>

        <p class="footer__title"> Copyright © 2021 <br> Todos los derechos reservados <br> Diseñado por <a href="#">MauricioNinaCanaviri</a></p>
    </footer>

    <!-- SCROLL-REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<script>
$(document).ready(function () {
    function alerta(data,titulo,tipo){
		 swal({
		   title: titulo,
		   html: data,
		   type: tipo,
		 });
	}
	<?php if($aux==1) {?>
			var titulo="¡Gracias!";
			var tipo="success";
			var data="Gracias por contactarme.";
			alerta(data,titulo,tipo);
	<?php } else{
				if($aux==2){?>
				var titulo="¡ERROR!";
				var tipo="error";
				var data='<?php echo $errors; ?>';
				alerta(data,titulo,tipo);
		<?php }} ?>
});

</script>
