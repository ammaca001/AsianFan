<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'asiavinafanssss' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AX+#?JYP8P`T$7Mq =dDP]E>J0q=xA$b$_z-KnW!+6ENM(zxjs/M66(>|S3VTR5(' );
define( 'SECURE_AUTH_KEY',  'z:=D~Z%UYzaKliwMZ;-=D{t9cbD?j_`@@]*&Gf(rKnQ`usssGaUj$67tRQ:J(x_N' );
define( 'LOGGED_IN_KEY',    '.y%%~,HRh%BZ%@%|D=MdOM}TCMO,G%mAN2O~~92$npG]/L*^]vGJayw$j7c}MC>@' );
define( 'NONCE_KEY',        'OFKQHNd+H]&M(H6hSq*8v[-E~{es*i1cY?+[-I7w^6]5-Ue/.J3PNiD_a<;-$m5o' );
define( 'AUTH_SALT',        'b@@|..Gq}:zYL[]1VsrzV~peyT`uF3K~hYyEAQM q4%Y)Z,H~FkNh=&vW<`LfIFe' );
define( 'SECURE_AUTH_SALT', 'D |bv.UVZPHh--{ H/rR^fE}pw^)QT1qHS>0@H ;)QA]q]16.KaWtv FXtQT4hwS' );
define( 'LOGGED_IN_SALT',   'w=*m_o_E8Jhj9y)B7YH%yYCt%-2r-P7Yod??U)ceW^IE;bO8GQ/tb`N;]!`OT(-1' );
define( 'NONCE_SALT',       'H2k.-T=@>/oV;,-edv_#>=_!r!a>%!zaYoQHqkT-=,]X ^4JcI& 5|)8c(3X-}p<' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
