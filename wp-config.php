<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'dbremen');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'tefa');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'NY?3Bs VM{kZ.3>Np_{wt}=u}9IMZf{/wRR-x7$^q(;T[aPMW?~Xz#%g_r%d-!I9');
define('SECURE_AUTH_KEY', 'IYJSSwjdHtVsnr&^8{U7)uv6uLq$zXlq%o#.V+7]=td8|}b`8J1:{)G!EU[D__zg');
define('LOGGED_IN_KEY', 'Y$lsMDIqfRVxo8% A7*?Na%=Ng91[QNFqub(0x% ~j.ZL{bp!;A-%1],~Vqqv0&w');
define('NONCE_KEY', 'zYm)TDS| !jz#w}xa}@=tbl3aJB`__h9Ir$o1Ig_}(Ssg4BNO%eRlVy~Z@24QHZf');
define('AUTH_SALT', '#[ZwV51{+.O4Eqcvc`yT<yeVXhiITHhs1D)e$#2y@_/7J3Nx=?:Q^OLa#/uxH*Hr');
define('SECURE_AUTH_SALT', '~4Y?Mh]CeSl2$-vS*@;:;7o9>@S_Wel`n^4y}%2.|m-#d=z@Z~)?&TMBSh[xSGL:');
define('LOGGED_IN_SALT', '.c)}4}w)#[KhAe 07.W=<FPIa$1+y`V7:`FyD- zXp_RJ5}m2S+3MJor]IX?-b1T');
define('NONCE_SALT', 'dbI/p4#hABCLpk&[@Af&U)<Y@c RY1/{Tr.@h}7^p87wm^s]qc;Oy7jUYFVc#D7K');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**Sin pedir datos ftp**/
/*** FTP login ***/
define("FTP_HOST", "host-ftp");
define("FTP_USER", "nombre-usuario-ftp");
define("FTP_PASS", "password-ftp");
/*** Definir FS_METHOD en WordPress para actualizar de manera automatica sin FTP ***/
define("FS_METHOD","direct");

