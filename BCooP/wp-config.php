<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nokiyo_wp9' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'nokiyo_wp9' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'cv1e8b4bo6' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8020.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_{g+.YwKZ?4FyuGt59]]@<GI;9n@[]TL/ecBhWTc|G.vnUrfm00M^e:]x[{b;Ut~' );
define( 'SECURE_AUTH_KEY',  '/20G01:rphL0)cL+P]0=sP:t[=5lq3QnO} :11|b8UzD0*&E`sftkFugQ?O*GW<R' );
define( 'LOGGED_IN_KEY',    '9-v%X{qA>_tB!7~63x!qszaJc.IZ)r[Oc2OtrbX.uq6(@h7o_tC,^rSwwov~3M[K' );
define( 'NONCE_KEY',        'I;R3p-LoxvN{kr<Fht`(]k 58hvZ*x{s25LV0Tdp.hc(ly,U*_|Yvw@5VOxpS+F1' );
define( 'AUTH_SALT',        'gxy!nT0+}|uT0oQ1sAN%]4DB ]<q;cD)oZV:trQb|272!+oHu5mb+Qj/E/@@ToIn' );
define( 'SECURE_AUTH_SALT', '4xDB`,G62zJ<JK)7$a0SqPLra[axfF;co}YA& 3%Z5[ukU<%|)h(y?5jRSASW%<i' );
define( 'LOGGED_IN_SALT',   'T+8M!-V_Kv=<!Bu=W7,ikP|W)2t#4HT*]&R8VFy,kQSc~Hl~7D;(<OE~|,yo>;M(' );
define( 'NONCE_SALT',       'Nw?Iq=y/thD3IzfQxk5H?3*_Qvlwh4Y+u5A _uL0UGlyhzMKbddVo`;^cL}s@:,&' );
define( 'WP_CACHE_KEY_SALT','DT#XFKj;PyGDTi@0TzjA2.Nw`QmbK)%?JJ[6@Ur?|Oht,gbnGr4OzQ4p{@pFB!gj' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
