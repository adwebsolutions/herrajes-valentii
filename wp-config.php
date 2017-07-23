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
define('DB_NAME', 'herrajes');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'ED|:G%fGOcH?!cL4XzZX@LH@_~$:m4SJ_^.]%bkaVdZX)O.c>=z_./?)p!l<Kl>K');
define('SECURE_AUTH_KEY', '<{7a/W-)<w_9%ZKELL-mPhXuRjS$.zH Yv(lvLqR*UiT_C$+4H*J`t/>RIwiJ$iL');
define('LOGGED_IN_KEY', 'ma{:r<C7d?Q^WG$l*W]]nX8;d~kvcv^H)/A]78zK.;R$mGFkhF;?eQ#|StlZy]?l');
define('NONCE_KEY', '`|~>i t])_Vk@M4xA4OU*^o/oX=:mtw(|3rNjZjE+hE6C5&-H3gPa)gjD6Q:VPP3');
define('AUTH_SALT', 'C.UZ*@i&83cjkgG/JX /dr-wHFHItn4/TMTFh^!3x-><Fnj%,Tte`B7C!)sW&]AH');
define('SECURE_AUTH_SALT', 'Ir .Ri)?}RRO*pe7)hdBu*zdocao1KXiPVEw@r*l*m`f9; sSLL|@FnBJYp-wMkD');
define('LOGGED_IN_SALT', '=brjsvwpC(Z8.ZQznBpf!P+csrp+mbfyn|>#@Xs;?^jAD-&$?_i^rnx3R4q LOi_');
define('NONCE_SALT', ']I3;YgZ4v5}MI/1bl+Voe[R[t^Z&vKl4JmB/w9g:J_&q!4&@HbaJ1+gf9^OG3;,y');

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

