<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testeotm' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z9aW;}_XC7;QgvwynqYaZ5O?mEEa_`Ic1TO5Df4uKOU]ct^e&0w(,Yf}`|<~(VKf' );
define( 'SECURE_AUTH_KEY',  'SFpT,:b)>BgRsXVWGsYL*C 2z2`BGRMggCk`K6cv`Bgf}+5+>5Lq1y(/-oi5bT8p' );
define( 'LOGGED_IN_KEY',    'Q;k;|O/1ur$T]TFV*P!x7SG)Y[hpT0d>#Rt+]#wV+=xSae&%G?#aD!0oQ8b?@}uz' );
define( 'NONCE_KEY',        '?.3=(R2d7#7m=6cTb[*t}GWw`g_3L FE?tc`h-Y/q]0d3nsmUp-EZM$eep`khjv~' );
define( 'AUTH_SALT',        '|%DNc1M,ShG:{n*=UT]|TvFbifc<F^F^g|L-A/n?XXfHi>$vEvYlfb}gOi>QRDTn' );
define( 'SECURE_AUTH_SALT', '1(CkAYv!H]hI7>nH#r/95}<<-`~}5&F2mq5[6X*;.@&GcYAjDB`{Gf;a@1GMkJ5>' );
define( 'LOGGED_IN_SALT',   'n !4z!XfN2ciskVmQ%%F5,KLd1$FnUflx$mDR%}sU9aiy(j{c;A?<OjwA5V}}XQ.' );
define( 'NONCE_SALT',       ' hldtAy>edp/3M{~Z wj$qjC;1UaQEn1C?zPwvq96~yAl1PuuT3RV?U( hF ^|g]' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
