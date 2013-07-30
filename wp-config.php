<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'crowd-soken');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~mRccPRts>qL |$[QE$0%F}R3U$lfyPI.02)t+Ezc+IaYoDa/+lgnx3B-h97j:A3');
define('SECURE_AUTH_KEY',  'HC?wN yO#cq3HYTYK)Ixgdh+awg[fy8riJVOnzVP5b-<%oy7v|RxK0c8y&+uBK6)');
define('LOGGED_IN_KEY',    '$GZpJ^e_zP/|1y%~-xOZNp5,[E`GARe{a +0XQA0twO/FpO^QM=q-Ty ;+S#}R9P');
define('NONCE_KEY',        '>3]-|r@qc]cRLfaZ|_mT8bC$4DVDj[@Q@WGK,R(KzCig^q~OEhLS/yT<W4[z~P -');
define('AUTH_SALT',        'y$bP,$1>T~?Xv,GIt1S%3IH&;5S6}L.|EjFQ>|@#S6 j.rF- B1X8hPZeK9e?(&A');
define('SECURE_AUTH_SALT', '-#W?+HjTE!Z8$h+>7%U[`The]f&MSUI0+dnGH<myNl+_Vp,>nsTERJs]tMsT+K10');
define('LOGGED_IN_SALT',   'v1W]gcNW0JzJcs#L<nR^r}UfB=S^ZgO@:a3t]KL D@+XIUonc_yc>Ex0*hk4SjLt');
define('NONCE_SALT',       '-U[gx]q79A&@6w=G^u1kay<h~ 8v`nU7BsbcWO. j.o;MlJ%Ka[5l!&tQ+{LFGEG');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'cs_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
