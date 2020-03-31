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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'clube_front' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '>;t~9M)Qx$vq7r1{@wGxnhiu(~Y3E3^^.)$>s]o>:pyf>9thf|8*(/pL=rlhRJD~' );
define( 'SECURE_AUTH_KEY',  'yWEXZ|kBNlF1nM$oALlpxpB`byU*sMCKYG L^oI7v%9wj<<)%nl9@QfXO #O.rrD' );
define( 'LOGGED_IN_KEY',    ']<=)oD[.2l_=U+aYmA1g+_i6PVG](6iDUWP&apSV}!_(oZf;(ab:pqS:Nlb1s1K,' );
define( 'NONCE_KEY',        'F]roQAvg[RQ0d-tuH.qxKS.}pm:x-|WQ~Vlb11*Up0I8;U(1n@oAZbW@z^_{G[(V' );
define( 'AUTH_SALT',        'EObsW{Rd,fGzy@NHdbmvfdBBrw8hblGBm7b1lh85v$!ickUK2sj.,C%OH^RU#xb/' );
define( 'SECURE_AUTH_SALT', '@t6h{Z_FyN1Q_<-Y*d3c*Gg>6k7~TL(5]E5lpK5f?h2{r{r<~? m8>t!h.?B;Aad' );
define( 'LOGGED_IN_SALT',   ':*-vyo<Slu_!QiYW^0$@ LB=3$tBh1}^=T:cNLq1ZouR[7=f7[8!{QUbr;1 ]GOt' );
define( 'NONCE_SALT',       '$.#=x1t#Oodx7Sk;-/Kl>u0w5mrsv5]:}mQeI*U!?bAz#HXqsW?{F./+DPAFd4%y' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cf_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

define('WP_MEMORY_LIMIT', '256M');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');