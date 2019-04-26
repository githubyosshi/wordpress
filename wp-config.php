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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'dotinstall_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '42Umxf2');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
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

define('AUTH_KEY',         ' FzIHDNGPrH~UeHppSJkoLOg6&Dt~r`@cJ,N@(,Hkk-=tSJ|_A%[_o|B^cZ%qT(|');
define('SECURE_AUTH_KEY',  '|.06mmH-&$M4Sy0{h>tGf|/V {@%Wk}:6-reo1WY6Bp !_fl^yGp d9fOjB 5X~C');
define('LOGGED_IN_KEY',    '>+:NXyDfCOQ##EwrJTD(Zy{9S<H:4|RhN0)rh>sKyn&bjD,>hEt3l&p>do-}O`tg');
define('NONCE_KEY',        'I+|plwxsdR+zz4>;Gfd;+]l{q8>to9p5M,Na!|&]#-+l](fAKajV$cBs9L-2o7/-');
define('AUTH_SALT',        ';4]n-nGQp%DCk8_U +b{LdQ6E?p%iFK]41f=MEmyoz{@zo RZw`|Vxeb]ukY kZz');
define('SECURE_AUTH_SALT', '.]wczUM.li@$wpQ38-sdZ?0)qkpU<_yTt?8*Y(_/9~~JrFni!hFA0zHV1y@7^GTw');
define('LOGGED_IN_SALT',   'mW=L9chkP}Zil?hbq$Us[7C^(k:V;Nu,*{iA| GfKtUChWfKae4vxF-g@B7On;z/');
define('NONCE_SALT',       'V^HeH8%MvCn}Z+Xfih``$]X59&H/1P%]BsY1<ecOuPhSD-]{NZRRZxDv^4Toyg s');

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
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');