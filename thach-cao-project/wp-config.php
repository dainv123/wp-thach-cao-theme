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
define( 'DB_NAME', 'thach-cao' );

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
define( 'AUTH_KEY',         '{Lug^4i;cc*_Z=qo_E{[W(ts~=-ug}m&l} $p7+%0^ArNz&Cc~fT,-B0U<:/#66F' );
define( 'SECURE_AUTH_KEY',  'F8aO0`;T*]oW8GrNbxX/$F7|CR)yawi?$cz`iTqQ5)B`Mhcg+yK*>m_NWl f`hrc' );
define( 'LOGGED_IN_KEY',    'm%4{* C^#Ki(:JBhL,l8r/ =#~|=uYtRd?rkjrKMGJeuc]yRZCIj3MvxmDk#&r[Q' );
define( 'NONCE_KEY',        '2Eh :xg=Dg<fsH*7blRhD,FqVV#7#3]hBfKdrOE#TYA PpG4FTAW>U{HOD/{4/GU' );
define( 'AUTH_SALT',        '<>fUUQmO!O8#OUgz~ZL_UjBQt t#H(pD4(O7&;S#eA/^5N9L{w?fbt1_*~c@KZT3' );
define( 'SECURE_AUTH_SALT', 'n2aJ4@fIRt%R_X%~~+.w4^q.jxZ|~.`f`f<Y%MKbR!&};y_p>/KUp9YAvXsh;U,H' );
define( 'LOGGED_IN_SALT',   '^$d:rldQCb|.z^P%.<sICX4M##KHg |p2K!~3pGYGD@qJ]$&gfC`qyC~)^&U9xeh' );
define( 'NONCE_SALT',       '].85W(E6i_HH[7uJms+qBl2T3-H.mXt`p2 .+K}Sr,B/ijcC-m4&N4?E26!E(2R%' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
