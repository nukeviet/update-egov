<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2015 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 07 Mar 2015 03:43:56 GMT
 */

if (!defined('NV_IS_UPDATE')) {
    die('Stop!!!');
}

$nv_update_config = [];

// Kieu nang cap 1: Update; 2: Upgrade
$nv_update_config['type'] = 1;

// ID goi cap nhat
$nv_update_config['packageID'] = 'NVEUD1200';

// Cap nhat cho module nao, de trong neu la cap nhat NukeViet, ten thu muc module neu la cap nhat module
$nv_update_config['formodule'] = '';

// Thong tin phien ban, tac gia, ho tro
$nv_update_config['release_date'] = 1589014800;
$nv_update_config['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$nv_update_config['support_website'] = 'https://github.com/nukeviet/update-egov/tree/to-1.2.00';
$nv_update_config['to_version'] = '1.2.00';
$nv_update_config['allow_old_version'] = [
    '1.1.01',
    '1.1.02',
    '1.2.00'
];

// 0:Nang cap bang tay, 1:Nang cap tu dong, 2:Nang cap nua tu dong
$nv_update_config['update_auto_type'] = 1;

$nv_update_config['lang'] = [];
$nv_update_config['lang']['vi'] = [];
$nv_update_config['lang']['en'] = [];

// Tiếng Việt
$nv_update_config['lang']['vi']['nv_up_delfile1102'] = 'Xóa các file thừa v1.1.02';
$nv_update_config['lang']['vi']['nv_up_googleplus4305'] = 'Gỡ bỏ Google Plus';
$nv_update_config['lang']['vi']['nv_up_modusers4305'] = 'Cập nhật module users lên 4.3.05';
$nv_update_config['lang']['vi']['nv_up_sys4305'] = 'Cập nhật core lên 4.3.05';
$nv_update_config['lang']['vi']['nv_up_modusers4306'] = 'Cập nhật module users lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_modnews4306'] = 'Cập nhật module news lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_sys4306'] = 'Cập nhật core lên 4.3.06';
$nv_update_config['lang']['vi']['nv_up_modusers4307'] = 'Cập nhật module users lên 4.3.07';
$nv_update_config['lang']['vi']['nv_up_sys4307'] = 'Cập nhật core lên 4.3.07';
$nv_update_config['lang']['vi']['nv_up_sys4308'] = 'Cập nhật core lên 4.3.08';
$nv_update_config['lang']['vi']['nv_up_sys4309'] = 'Cập nhật core lên 4.3.09';
$nv_update_config['lang']['en']['nv_up_sys4400'] = 'Cập nhật core lên 4.4.00';
$nv_update_config['lang']['vi']['nv_up_modlaws1200'] = 'Cập nhật module laws ở bản 1.2.00';
$nv_update_config['lang']['vi']['nv_up_modvideoclips1200'] = 'Cập nhật module videoclips ở bản 1.2.00';
$nv_update_config['lang']['vi']['nv_up_finish'] = 'Cập nhật CSDL lên phiên bản 1.2.00';

// English
$nv_update_config['lang']['en']['nv_up_delfile1102'] = 'Delete unused files v1.1.02';
$nv_update_config['lang']['en']['nv_up_googleplus4305'] = 'Remove Google Plus';
$nv_update_config['lang']['en']['nv_up_modusers4305'] = 'Update module users to 4.3.05';
$nv_update_config['lang']['en']['nv_up_sys4305'] = 'Update core to 4.3.05';
$nv_update_config['lang']['en']['nv_up_modusers4306'] = 'Update module users to 4.3.06';
$nv_update_config['lang']['en']['nv_up_modnews4306'] = 'Update module news to 4.3.06';
$nv_update_config['lang']['en']['nv_up_sys4306'] = 'Update core to 4.3.06';
$nv_update_config['lang']['en']['nv_up_modusers4307'] = 'Update module users to 4.3.07';
$nv_update_config['lang']['en']['nv_up_sys4307'] = 'Update core to 4.3.07';
$nv_update_config['lang']['en']['nv_up_sys4308'] = 'Update core to 4.3.08';
$nv_update_config['lang']['en']['nv_up_sys4309'] = 'Update core to 4.3.09';
$nv_update_config['lang']['en']['nv_up_sys4400'] = 'Update core to 4.4.00';
$nv_update_config['lang']['vi']['nv_up_modlaws1200'] = 'Update module laws in 1.2.00';
$nv_update_config['lang']['vi']['nv_up_modvideoclips1200'] = 'Update module videoclips in 1.2.00';
$nv_update_config['lang']['en']['nv_up_finish'] = 'Update new version 1.2.00';

$nv_update_config['tasklist'] = [];
$nv_update_config['tasklist'][] = [
    'r' => '1.1.02',
    'rq' => 2,
    'l' => 'nv_up_delfile1102',
    'f' => 'nv_up_delfile1102'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_googleplus4305',
    'f' => 'nv_up_googleplus4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modusers4305',
    'f' => 'nv_up_modusers4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4305',
    'f' => 'nv_up_sys4305'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modusers4306',
    'f' => 'nv_up_modusers4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modnews4306',
    'f' => 'nv_up_modnews4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4306',
    'f' => 'nv_up_sys4306'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modusers4307',
    'f' => 'nv_up_modusers4307'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4307',
    'f' => 'nv_up_sys4307'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4308',
    'f' => 'nv_up_sys4308'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4309',
    'f' => 'nv_up_sys4309'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_sys4400',
    'f' => 'nv_up_sys4400'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modlaws1200',
    'f' => 'nv_up_modlaws1200'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_modvideoclips1200',
    'f' => 'nv_up_modvideoclips1200'
];
$nv_update_config['tasklist'][] = [
    'r' => '1.2.00',
    'rq' => 2,
    'l' => 'nv_up_finish',
    'f' => 'nv_up_finish'
];

/**
 * @return number[]|string[]
 */
function nv_up_delfile1102()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/compatibility.js');
    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/l10n.js');

    nv_deletefile(NV_ROOTDIR . '/modules/contact/admin/content.php');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/modules/contact/content.tpl');
    nv_deletefile(NV_ROOTDIR . '/themes/mobile_default/mobile_default.png');

    // Code thừa bản 4.3.05
    nv_deletefile(NV_ROOTDIR . '/vendor/gregwar/captcha', true);
    nv_deletefile(NV_ROOTDIR . '/vendor/symfony/finder', true);

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_googleplus4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Xóa bảng google plus
    try {
        $db->query("DROP TABLE " . $db_config['prefix'] . "_googleplus");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Xóa trường gid bảng modules
        try {
            $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_modules DROP gid");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }

        // Lấy tất cả các module news và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Xóa trường gid
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_detail DROP gid");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }

        // Lấy tất cả các module page và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='page'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Xóa trường gid
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . " DROP gid");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình
            try {
                $db->query("INSERT IGNORE INTO " . $db_config['prefix'] . "_" . $mod_data . "_config (config, content, edit_time) VALUES ('active_editinfo_censor', '0', " . NV_CURRENTTIME . ")");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            // Thêm bảng dữ liệu
            try {
                $db->query("CREATE TABLE IF NOT EXISTS " . $db_config['prefix'] . "_" . $mod_data . "_edit (
                    userid mediumint(8) unsigned NOT NULL,
                    lastedit int(11) unsigned NOT NULL DEFAULT '0',
                    info_basic text NOT NULL,
                    info_custom text NOT NULL,
                    PRIMARY KEY (userid)
                ) ENGINE=MyISAM;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4305()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Tùy chỉnh kiểu lặp lại của cronjobs
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_cronjobs ADD inter_val_type TINYINT(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0: Lặp lại sau thời điểm bắt đầu thực tế, 1:lặp lại sau thời điểm bắt đầu trong CSDL' AFTER inter_val");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường dữ liệu đối tượng kích hoạt tài khoản
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . " ADD active_obj varchar(50) NOT NULL DEFAULT 'SYSTEM' COMMENT 'SYSTEM, EMAIL, OAUTH:xxxx, quản trị kích hoạt thì lưu userid' AFTER email_verification_time;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'identify_cat_change', '0');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4306()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Gỡ bỏ Google MAP API
    try {
        $db->query("DELETE FROM " . NV_CONFIG_GLOBALTABLE . " WHERE lang='sys' AND module='site' AND config_name='googleMapsAPI';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Chuyển timestamp sang UNIX timestamp
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value = '" . NV_CURRENTTIME . "' WHERE lang = 'sys' AND module = 'global' AND config_name = 'timestamp'");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // CORS Settings
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'cors_restrict_domains', '1');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'cors_valid_domains', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modusers4307()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file = 'users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Sửa lỗi module users trên MySQL 8
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . "_field CHANGE system is_system TINYINT(1) UNSIGNED NOT NULL DEFAULT '0';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            // Ghi nhận thời gian tham gia nhóm thành viên
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . "_groups_users
                ADD time_requested INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời gian yêu cầu tham gia' AFTER data,
                ADD time_approved INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời gian duyệt yêu cầu tham gia' AFTER time_requested;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4307()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Bật tắt tiện ích kiểm tra, thống kê đường dẫn đến site
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'referer_blocker', '1');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Sửa banners
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_banners_click CHANGE click_ip click_ip VARCHAR(46) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_banners_click ADD id INT(11) unsigned NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id);");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4308()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Chức năng cấu hình các giao diện người dùng ngoài site
    foreach ($global_config['allow_sitelangs'] as $lang) {
        try {
            $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', 'global', 'user_allowed_theme', '');");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }
    }

    // Ghi lại thời điểm sửa thông tin tài khoản lần cuối
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường dữ liệu đối tượng kích hoạt tài khoản
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . " ADD last_update INT(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thời điểm cập nhật thông tin lần cuối' AFTER last_openid;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }

    // Cập nhật phần quản lý metatags
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'private_site', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4309()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Cập nhật chức năng thông báo
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_notification CHANGE send_to send_to VARCHAR(250) NOT NULL DEFAULT '' COMMENT 'danh sách id người nhận, phân cách bởi dấu phảy';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_notification ADD INDEX send_to (send_to);");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_notification ADD admin_view_allowed TINYINT(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Cấp quản trị được xem: 0,1,2' AFTER id, ADD INDEX admin_view_allowed (admin_view_allowed);");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_notification ADD logic_mode TINYINT(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0: Cấp trên xem được cấp dưới, 1: chỉ cấp hoặc người được chỉ định' AFTER admin_view_allowed, ADD INDEX logic_mode (logic_mode);");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("UPDATE " . $db_config['prefix'] . "_notification SET send_to='' WHERE send_to=0;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Xác thực bằng google, facebook khi login admin
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'admin_2step_opt', 'code');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'admin_2step_default', 'code');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . "
        ADD pre_check_num varchar(40) NOT NULL DEFAULT '' AFTER susp_reason,
        ADD pre_last_login int(11) unsigned NOT NULL DEFAULT '0' AFTER pre_check_num,
        ADD pre_last_ip varchar(45) DEFAULT '' AFTER pre_last_login,
        ADD pre_last_agent varchar(255) DEFAULT '' AFTER pre_last_ip;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . " CHANGE admin_id admin_id INT(11) UNSIGNED NOT NULL;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("CREATE TABLE " . NV_AUTHORS_GLOBALTABLE . "_oauth (
          id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
          admin_id int(11) unsigned NOT NULL COMMENT 'ID của quản trị',
          oauth_server varchar(50) NOT NULL COMMENT 'Eg: facebook, google...',
          oauth_uid varchar(50) NOT NULL COMMENT 'ID duy nhất ứng với server',
          oauth_email varchar(50) NOT NULL COMMENT 'Email',
          addtime int(11) unsigned NOT NULL DEFAULT '0',
          PRIMARY KEY (id),
          UNIQUE KEY admin_id (admin_id, oauth_server, oauth_uid),
          KEY oauth_email (oauth_email)
        ) ENGINE=MyISAM COMMENT 'Bảng lưu xác thực 2 bước từ oauth của admin';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thay đổi múi giờ
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value='Asia/Ho_Chi_Minh' WHERE config_value='Asia/Saigon' AND lang='sys' AND module='site' AND config_name='statistics_timezone';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_sys4400()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );

    // Mở giới hạn trường dữ liệu cho IPv6
    foreach ($global_config['allow_sitelangs'] as $lang) {
        try {
            $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_comment CHANGE post_ip post_ip VARCHAR(39) NOT NULL DEFAULT '';");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }

        // Cập nhật các module contact
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='contact'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_send CHANGE sender_ip sender_ip VARCHAR(39) NOT NULL DEFAULT '';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_ips CHANGE ip ip VARCHAR(39) NOT NULL DEFAULT '';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_ips CHANGE mask mask TINYINT(4) UNSIGNED NOT NULL DEFAULT '0';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . "_config CHANGE keyname keyname VARCHAR(39) NOT NULL DEFAULT '';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . "_config CHANGE mask mask TINYINT(4) UNSIGNED NOT NULL DEFAULT '0';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Upload file vượt quá cấu hình của PHP
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'nv_overflow_size', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Cấu hình gửi mail
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'sender_name', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'sender_email', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'reply_name', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'reply_email', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'force_sender', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'force_reply', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'notify_email_error', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    /*
     * Cập nhật banner
     */
    $sql = "SELECT id, uploadtype FROM " . NV_BANNERS_GLOBALTABLE . "_plans";
    $result = $db->query($sql);
    while ($row = $result->fetch()) {
        $row['uploadtype'] = array_filter(array_unique(array_map('trim', explode(',', $row['uploadtype']))));
        $row['uploadtype'] = array_diff($row['uploadtype'], ['flash']);
        $row['uploadtype'] = empty($row['uploadtype']) ? '' : implode(',', $row['uploadtype']);

        $sql = "UPDATE " . NV_BANNERS_GLOBALTABLE . "_plans SET uploadtype=" . $db->quote($row['uploadtype']) . " WHERE id=" . $row['id'];
        $db->query($sql);
    }

    /*
     * Cập nhật config ini file -- Bỏ
     */
    /*
     $array_files = nv_scandir(NV_ROOTDIR . '/' . NV_DATADIR, '/^config\_ini\.(.*)\.php$/');
     foreach ($array_files as $file) {
     nv_deletefile(NV_ROOTDIR . '/' . NV_DATADIR . '/' . $file);
     }
     */

    // Thêm một số cấu hình tài khoản
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'max_user_admin', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'max_user_number', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'users_special', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modlaws1200()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='laws'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình
            try {
                $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_config (config_name, config_value) VALUES ('title_show_type', '0');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modvideoclips1200()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = array(
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    );
    // Duyệt tất cả các ngôn ngữ
    foreach ($global_config['allow_sitelangs'] as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query("SELECT title, module_data FROM " . $db_config['prefix'] . "_" . $lang . "_modules WHERE module_file='videoclips'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình kiểu hiển thị
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'viewtype', 'viewlist');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            // Thêm cấu hình nút like
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'liketool', 1);");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_finish()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Xóa file thừa
    nv_deletefile(NV_ROOTDIR . '/admin/seotools/googleplus.php');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/modules/seotools/googleplus.tpl');
    nv_deletefile(NV_ROOTDIR . '/themes/default/js/block.global.company_info.js');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/images/vertical_menu_bg.jpg');
    nv_deletefile(NV_ROOTDIR . '/assets/js/select2/select2-bootstrap.min.css');

    // Cập nhật phiên bản Egov
    $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value='" . $nv_update_config['to_version'] . "' WHERE lang='sys' AND module='global' AND config_name='version'");

    $db->query("UPDATE " . $db_config['prefix'] . "_setup_extensions SET version='" . $nv_update_config['to_version'] . " " . $nv_update_config['release_date'] . "' WHERE
    type='theme' AND basename IN ('egov', 'mobile_egov')");

    // Phiên bản tương ứng của các module
    $nukeviet_cms_version = '4.4.00';
    $nukeviet_cms_release = 1588150800;

    $db->query("UPDATE " . $db_config['prefix'] . "_setup_extensions SET version='" . $nukeviet_cms_version . " " . $nukeviet_cms_release . "' WHERE
    type='module' AND basename IN ('banners', 'comment','contact','feeds','freecontent','menu','news','page','seek','statistics','users','voting', 'two-step-verification')");

    $db->query("UPDATE " . $db_config['prefix'] . "_setup_extensions SET version='" . $nukeviet_cms_version . " " . $nukeviet_cms_release . "' WHERE
    type='theme' AND basename IN ('default', 'mobile_default')");

    // Phiên bản của các module liên quan
    // FIXME

    nv_save_file_config_global();

    $array_config_rewrite = [
        'rewrite_enable' => $global_config['rewrite_enable'],
        'rewrite_optional' => $global_config['rewrite_optional'],
        'rewrite_endurl' => $global_config['rewrite_endurl'],
        'rewrite_exturl' => $global_config['rewrite_exturl'],
        'rewrite_op_mod' => $global_config['rewrite_op_mod']
    ];
    nv_rewrite_change($array_config_rewrite);

    return $return;
}
