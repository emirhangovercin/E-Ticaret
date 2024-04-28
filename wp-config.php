<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'eticaret' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'webtasarim' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '12345' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bqb2{-4@WM8tNle-1*se>2*02k2b4d)o^$,Jq7uPlX%27$}O_y:P-,})3[GhVPbu' );
define( 'SECURE_AUTH_KEY',  'MFK^jR[v!_Vuu6wbG@@[tEjt>jk3V9h4b:gRjbcAr:5@f*-?XW|4&]F{@!9;u)4S' );
define( 'LOGGED_IN_KEY',    'KEH]+{5!RLzANU[kanbRN0KIx(ARz|uk~p(7-m7u&~d(2jh4&oYD,z<P2Npis,/P' );
define( 'NONCE_KEY',        '1{86Q<+Ukap0*;Ibl*90N@~R(:98<,m9oz}H2U2Z>DQktLN/f[(L/r8t?Ua<_ f=' );
define( 'AUTH_SALT',        '%:Pxg_|xhFA&>H>IaT48+Fk@t,K.uS/hL7qi%X dFgqad D~bZ5X[}FLZ.3Zt)OE' );
define( 'SECURE_AUTH_SALT', 'iv066.tm>#{T8s30(l}/r$oM;IBFpI.mRxq7 :x_$bc`pXPjLHoEhap{38dmG(zw' );
define( 'LOGGED_IN_SALT',   'Brd5I^xAoM!AI%Xj@`r8.t`M%ax]*u-&.ZN1:aEpZ3m}GX+P$vsXO]lF ]Tu[Oi7' );
define( 'NONCE_SALT',       'mia,9NcV3@wE1IDJ5^ah^n<Pqj{X^|6$2w<i~.A9~yK7V[I>zUDG|#4@8ll?K.C2' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';