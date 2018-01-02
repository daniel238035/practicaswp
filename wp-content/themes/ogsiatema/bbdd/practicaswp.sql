-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2018 a las 21:54:07
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicaswp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un comentarista de WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2017-12-31 01:07:45', '2017-12-31 01:07:45', 'Hola, esto es un comentario.\nPara empezar a moderar, editar y borrar comentarios, por favor, visite la pantalla de comentarios en el escritorio.\nLos avatares de los comentaristas provienen de <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/practicaswpgit', 'yes'),
(2, 'home', 'http://localhost/practicaswpgit', 'yes'),
(3, 'blogname', 'Oficina General de Cooperación Técnica y Relaciones Internacionales', 'yes'),
(4, 'blogdescription', 'Otro sitio de WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'danielunprg@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'j F, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:89:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:34:\"advanced-custom-fields-pro/acf.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'ogsiatema', 'yes'),
(41, 'stylesheet', 'ogsiatema', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '38590', 'yes'),
(92, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(93, 'fresh_site', '0', 'yes'),
(94, 'WPLANG', 'es_PE', 'yes'),
(95, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(96, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(101, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'cron', 'a:5:{i:1514941666;a:2:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1514941667;a:1:{s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1514942426;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1515001288;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(111, 'theme_mods_twentyseventeen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1514692746;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(125, '_site_transient_timeout_browser_da4804949398f905dcef757ac82cf2c1', '1515288027', 'no'),
(126, '_site_transient_browser_da4804949398f905dcef757ac82cf2c1', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"63.0.3239.84\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(132, 'can_compress_scripts', '1', 'no'),
(146, 'current_theme', 'Plantilla para Oficina General de Cooperación Técnica y Relaciones Internacionales', 'yes'),
(147, 'theme_mods_ogsiatema', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:2:{s:14:\"menu_principal\";i:2;s:10:\"menu_movil\";i:3;}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(148, 'theme_switched', '', 'yes'),
(169, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(175, 'recently_activated', 'a:0:{}', 'yes'),
(176, 'acf_version', '5.5.7', 'yes'),
(184, 'category_children', 'a:0:{}', 'yes'),
(207, '_transient_timeout_acf_get_remote_plugin_info', '1515008982', 'no'),
(208, '_transient_acf_get_remote_plugin_info', '0', 'no'),
(209, '_site_transient_timeout_theme_roots', '1514924384', 'no'),
(210, '_site_transient_theme_roots', 'a:4:{s:9:\"ogsiatema\";s:7:\"/themes\";s:13:\"twentyfifteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no'),
(212, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:6:\"locale\";s:5:\"es_PE\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-4.9.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-4.9.1-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.1\";s:7:\"version\";s:5:\"4.9.1\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1514922588;s:15:\"version_checked\";s:5:\"4.9.1\";s:12:\"translations\";a:0:{}}', 'no'),
(213, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1514922593;s:7:\"checked\";a:4:{s:9:\"ogsiatema\";s:3:\"1.0\";s:13:\"twentyfifteen\";s:3:\"1.9\";s:15:\"twentyseventeen\";s:3:\"1.4\";s:13:\"twentysixteen\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:2:{i:0;a:7:{s:4:\"type\";s:5:\"theme\";s:4:\"slug\";s:13:\"twentyfifteen\";s:8:\"language\";s:5:\"es_PE\";s:7:\"version\";s:3:\"1.9\";s:7:\"updated\";s:19:\"2015-08-19 12:06:12\";s:7:\"package\";s:77:\"https://downloads.wordpress.org/translation/theme/twentyfifteen/1.9/es_PE.zip\";s:10:\"autoupdate\";b:1;}i:1;a:7:{s:4:\"type\";s:5:\"theme\";s:4:\"slug\";s:13:\"twentysixteen\";s:8:\"language\";s:5:\"es_PE\";s:7:\"version\";s:3:\"1.4\";s:7:\"updated\";s:19:\"2017-01-29 00:58:00\";s:7:\"package\";s:77:\"https://downloads.wordpress.org/translation/theme/twentysixteen/1.4/es_PE.zip\";s:10:\"autoupdate\";b:1;}}}', 'no'),
(214, '_site_transient_update_plugins', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1514922591;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":11:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.0.2\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.0.2.zip\";s:5:\"icons\";a:3:{s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:7:\"default\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";}s:7:\"banners\";a:2:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";s:7:\"default\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"4.9.1\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:6:\"plugin\";s:4:\"slug\";s:7:\"akismet\";s:8:\"language\";s:5:\"es_PE\";s:7:\"version\";s:3:\"3.2\";s:7:\"updated\";s:19:\"2016-09-09 10:48:54\";s:7:\"package\";s:72:\"https://downloads.wordpress.org/translation/plugin/akismet/3.2/es_PE.zip\";s:10:\"autoupdate\";b:1;}}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:3:{s:2:\"1x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907\";s:2:\"2x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";s:7:\"default\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";}s:7:\"banners\";a:2:{s:2:\"1x\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";s:7:\"default\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 4, '_menu_item_type', 'custom'),
(3, 4, '_menu_item_menu_item_parent', '0'),
(4, 4, '_menu_item_object_id', '4'),
(5, 4, '_menu_item_object', 'custom'),
(6, 4, '_menu_item_target', ''),
(7, 4, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(8, 4, '_menu_item_xfn', ''),
(9, 4, '_menu_item_url', 'http://localhost/practicaswpgit/'),
(10, 4, '_menu_item_orphaned', '1514731812'),
(11, 5, '_menu_item_type', 'post_type'),
(12, 5, '_menu_item_menu_item_parent', '0'),
(13, 5, '_menu_item_object_id', '2'),
(14, 5, '_menu_item_object', 'page'),
(15, 5, '_menu_item_target', ''),
(16, 5, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(17, 5, '_menu_item_xfn', ''),
(18, 5, '_menu_item_url', ''),
(19, 5, '_menu_item_orphaned', '1514731814'),
(20, 6, '_menu_item_type', 'custom'),
(21, 6, '_menu_item_menu_item_parent', '0'),
(22, 6, '_menu_item_object_id', '6'),
(23, 6, '_menu_item_object', 'custom'),
(24, 6, '_menu_item_target', ''),
(25, 6, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(26, 6, '_menu_item_xfn', ''),
(27, 6, '_menu_item_url', 'http://localhost/practicaswpgit/#nosotros'),
(29, 7, '_wp_trash_meta_status', 'publish'),
(30, 7, '_wp_trash_meta_time', '1514731970'),
(39, 8, '_wp_trash_meta_status', 'publish'),
(40, 8, '_wp_trash_meta_time', '1514731986'),
(41, 10, '_menu_item_type', 'custom'),
(42, 10, '_menu_item_menu_item_parent', '0'),
(43, 10, '_menu_item_object_id', '10'),
(44, 10, '_menu_item_object', 'custom'),
(45, 10, '_menu_item_target', ''),
(46, 10, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(47, 10, '_menu_item_xfn', ''),
(48, 10, '_menu_item_url', 'http://localhost/practicaswpgit/'),
(58, 11, '_wp_trash_meta_status', 'publish'),
(59, 11, '_wp_trash_meta_time', '1514736378'),
(60, 13, '_edit_last', '1'),
(61, 13, '_edit_lock', '1514761003:1'),
(62, 13, '_wp_page_template', 'listamovilidad-page.php'),
(63, 15, '_edit_last', '1'),
(64, 15, '_edit_lock', '1514742268:1'),
(65, 15, '_wp_page_template', 'listainterdocentes-page.php'),
(66, 17, '_menu_item_type', 'post_type'),
(67, 17, '_menu_item_menu_item_parent', '0'),
(68, 17, '_menu_item_object_id', '13'),
(69, 17, '_menu_item_object', 'page'),
(70, 17, '_menu_item_target', ''),
(71, 17, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(72, 17, '_menu_item_xfn', ''),
(73, 17, '_menu_item_url', ''),
(75, 18, '_menu_item_type', 'post_type'),
(76, 18, '_menu_item_menu_item_parent', '0'),
(77, 18, '_menu_item_object_id', '15'),
(78, 18, '_menu_item_object', 'page'),
(79, 18, '_menu_item_target', ''),
(80, 18, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(81, 18, '_menu_item_xfn', ''),
(82, 18, '_menu_item_url', ''),
(84, 19, '_edit_last', '1'),
(85, 19, '_edit_lock', '1514742550:1'),
(86, 19, '_wp_page_template', 'listaotrasconv-page.php'),
(87, 21, '_edit_last', '1'),
(88, 21, '_edit_lock', '1514742971:1'),
(89, 21, '_wp_page_template', 'listanoticias-page.php'),
(90, 23, '_edit_last', '1'),
(91, 23, '_edit_lock', '1514743653:1'),
(92, 23, '_wp_page_template', 'listaeventos-page.php'),
(93, 25, '_menu_item_type', 'custom'),
(94, 25, '_menu_item_menu_item_parent', '0'),
(95, 25, '_menu_item_object_id', '25'),
(96, 25, '_menu_item_object', 'custom'),
(97, 25, '_menu_item_target', ''),
(98, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(99, 25, '_menu_item_xfn', ''),
(100, 25, '_menu_item_url', 'http://localhost/practicaswpgit/#convenios'),
(102, 26, '_menu_item_type', 'post_type'),
(103, 26, '_menu_item_menu_item_parent', '0'),
(104, 26, '_menu_item_object_id', '21'),
(105, 26, '_menu_item_object', 'page'),
(106, 26, '_menu_item_target', ''),
(107, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(108, 26, '_menu_item_xfn', ''),
(109, 26, '_menu_item_url', ''),
(111, 27, '_menu_item_type', 'post_type'),
(112, 27, '_menu_item_menu_item_parent', '0'),
(113, 27, '_menu_item_object_id', '23'),
(114, 27, '_menu_item_object', 'page'),
(115, 27, '_menu_item_target', ''),
(116, 27, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(117, 27, '_menu_item_xfn', ''),
(118, 27, '_menu_item_url', ''),
(120, 28, '_menu_item_type', 'post_type'),
(121, 28, '_menu_item_menu_item_parent', '0'),
(122, 28, '_menu_item_object_id', '23'),
(123, 28, '_menu_item_object', 'page'),
(124, 28, '_menu_item_target', ''),
(125, 28, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(126, 28, '_menu_item_xfn', ''),
(127, 28, '_menu_item_url', ''),
(129, 29, '_menu_item_type', 'post_type'),
(130, 29, '_menu_item_menu_item_parent', '0'),
(131, 29, '_menu_item_object_id', '21'),
(132, 29, '_menu_item_object', 'page'),
(133, 29, '_menu_item_target', ''),
(134, 29, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(135, 29, '_menu_item_xfn', ''),
(136, 29, '_menu_item_url', ''),
(138, 30, '_menu_item_type', 'post_type'),
(139, 30, '_menu_item_menu_item_parent', '0'),
(140, 30, '_menu_item_object_id', '19'),
(141, 30, '_menu_item_object', 'page'),
(142, 30, '_menu_item_target', ''),
(143, 30, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(144, 30, '_menu_item_xfn', ''),
(145, 30, '_menu_item_url', ''),
(147, 31, '_edit_last', '1'),
(148, 31, '_edit_lock', '1514746624:1'),
(149, 31, '_wp_page_template', 'contactanos.php'),
(150, 33, '_menu_item_type', 'post_type'),
(151, 33, '_menu_item_menu_item_parent', '0'),
(152, 33, '_menu_item_object_id', '31'),
(153, 33, '_menu_item_object', 'page'),
(154, 33, '_menu_item_target', ''),
(155, 33, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(156, 33, '_menu_item_xfn', ''),
(157, 33, '_menu_item_url', ''),
(159, 34, '_edit_last', '1'),
(160, 34, '_edit_lock', '1514751305:1'),
(161, 34, '_wp_page_template', 'formulariomovilidad-page.php'),
(162, 36, '_edit_last', '1'),
(163, 36, '_edit_lock', '1514754325:1'),
(164, 53, '_edit_last', '1'),
(165, 53, '_edit_lock', '1514758288:1'),
(167, 53, 'institucion', 'Universidad Nacional Pedro Ruiz Gallo'),
(168, 53, '_institucion', 'field_5a494cc76fbe5'),
(169, 53, 'inicio_de_convocatoria', '20180118'),
(170, 53, '_inicio_de_convocatoria', 'field_5a494db66fbe6'),
(171, 53, 'duracion_de_convocatoria', '3 años'),
(172, 53, '_duracion_de_convocatoria', 'field_5a494e3b6fbe7'),
(173, 53, 'imagen_de_portada_convocatoria', ''),
(174, 53, '_imagen_de_portada_convocatoria', 'field_5a494e816fbe8'),
(175, 53, 'presentacion', ''),
(176, 53, '_presentacion', 'field_5a494efc6fbe9'),
(177, 53, 'beneficios', ''),
(178, 53, '_beneficios', 'field_5a494f3f6fbea'),
(179, 53, 'ies_elegibles', ''),
(180, 53, '_ies_elegibles', 'field_5a494f5c6fbeb'),
(181, 53, 'requerimientos_para_postular', ''),
(182, 53, '_requerimientos_para_postular', 'field_5a494f7b6fbec'),
(183, 53, 'areas_de_conocimiento', ''),
(184, 53, '_areas_de_conocimiento', 'field_5a494f926fbed'),
(185, 53, 'pasos_para_postular', ''),
(186, 53, '_pasos_para_postular', 'field_5a494fe76fbee'),
(187, 53, 'cronograma', ''),
(188, 53, '_cronograma', 'field_5a494ffa6fbef'),
(189, 53, 'duracion_de_la_beca', ''),
(190, 53, '_duracion_de_la_beca', 'field_5a4950266fbf0'),
(191, 53, 'documentos_obligatorios', ''),
(192, 53, '_documentos_obligatorios', 'field_5a4950426fbf1'),
(193, 53, 'bases_y_modificaciones', ''),
(194, 53, '_bases_y_modificaciones', 'field_5a49504c6fbf2'),
(195, 53, 'documentos_convocatoria', ''),
(196, 53, '_documentos_convocatoria', 'field_5a4950616fbf3'),
(197, 53, 'resultados_convocatorias', ''),
(198, 53, '_resultados_convocatorias', 'field_5a49508b6fbf4'),
(199, 54, 'institucion', 'Universidad Nacional Pedro Ruiz Gallo'),
(200, 54, '_institucion', 'field_5a494cc76fbe5'),
(201, 54, 'inicio_de_convocatoria', '20180118'),
(202, 54, '_inicio_de_convocatoria', 'field_5a494db66fbe6'),
(203, 54, 'duracion_de_convocatoria', '3 años'),
(204, 54, '_duracion_de_convocatoria', 'field_5a494e3b6fbe7'),
(205, 54, 'imagen_de_portada_convocatoria', ''),
(206, 54, '_imagen_de_portada_convocatoria', 'field_5a494e816fbe8'),
(207, 54, 'presentacion', ''),
(208, 54, '_presentacion', 'field_5a494efc6fbe9'),
(209, 54, 'beneficios', ''),
(210, 54, '_beneficios', 'field_5a494f3f6fbea'),
(211, 54, 'ies_elegibles', ''),
(212, 54, '_ies_elegibles', 'field_5a494f5c6fbeb'),
(213, 54, 'requerimientos_para_postular', ''),
(214, 54, '_requerimientos_para_postular', 'field_5a494f7b6fbec'),
(215, 54, 'areas_de_conocimiento', ''),
(216, 54, '_areas_de_conocimiento', 'field_5a494f926fbed'),
(217, 54, 'pasos_para_postular', ''),
(218, 54, '_pasos_para_postular', 'field_5a494fe76fbee'),
(219, 54, 'cronograma', ''),
(220, 54, '_cronograma', 'field_5a494ffa6fbef'),
(221, 54, 'duracion_de_la_beca', ''),
(222, 54, '_duracion_de_la_beca', 'field_5a4950266fbf0'),
(223, 54, 'documentos_obligatorios', ''),
(224, 54, '_documentos_obligatorios', 'field_5a4950426fbf1'),
(225, 54, 'bases_y_modificaciones', ''),
(226, 54, '_bases_y_modificaciones', 'field_5a49504c6fbf2'),
(227, 54, 'documentos_convocatoria', ''),
(228, 54, '_documentos_convocatoria', 'field_5a4950616fbf3'),
(229, 54, 'resultados_convocatorias', ''),
(230, 54, '_resultados_convocatorias', 'field_5a49508b6fbf4'),
(231, 55, '_edit_last', '1'),
(232, 55, '_edit_lock', '1514924140:1'),
(233, 13, 'descripcion_movilidad_estudiantil', '<div>\r\n<div>A través de los distintos convenios firmados, nuestros estudiantes pueden aplicar para cursar un semestre académico en universidades del Perú o el extranjero.</div>\r\n</div>'),
(234, 13, '_descripcion_movilidad_estudiantil', 'field_5a496a7869f6a'),
(235, 13, 'portada_movilidad', ''),
(236, 13, '_portada_movilidad', 'field_5a496b2969f6b'),
(237, 58, 'descripcion_movilidad_estudiantil', '<div>\r\n<div>A través de los distintos convenios firmados, nuestros estudiantes pueden aplicar para cursar un semestre académico en universidades del Perú o el extranjero.</div>\r\n</div>'),
(238, 58, '_descripcion_movilidad_estudiantil', 'field_5a496a7869f6a'),
(239, 58, 'portada_movilidad', ''),
(240, 58, '_portada_movilidad', 'field_5a496b2969f6b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2017-12-31 01:07:45', '2017-12-31 01:07:45', 'Bienvenido a WordPress. Esta es su primera entrada. Edítela o bórrela, y ¡empiece a escribir!', '¡Hola mundo!', '', 'publish', 'open', 'open', '', 'hola-mundo', '', '', '2017-12-31 01:07:45', '2017-12-31 01:07:45', '', 0, 'http://localhost/practicaswpgit/?p=1', 0, 'post', '', 1),
(2, 1, '2017-12-31 01:07:45', '2017-12-31 01:07:45', 'Esto es una página de ejemplo. Es diferente a una entrada del blog, ya que permanecerá fija en un lugar y se mostrará en la navegación de su sitio (en la mayoría de temas). La mayoría de personas empieza con una página Acerca de, que brinda información a los visitantes de su sitio. Se podría decir algo como esto:\n\n<blockquote>¡Hola! Durante el día soy un mensajero, un aspirante a actor por la noche, y este es mi blog. Vivo en Lima, tengo un enorme perro llamado Pocho, y me gusta el Pisco Sour. (Y caminar bajo la lluvia.)</blockquote>\n\n...o algo como esto:\n\n<blockquote>La compañía XYZ, se fundó en 1971, y ha estado desde entonces, proporcionando artilugios de calidad al público. Está situado en la ciudad de Lima, XYZ emplea a más de 2,000 personas y hace todo tipo de cosas sorprendentes para la comunidad limeña.</blockquote>\n\nComo nuevo usuario de WordPress, usted debe ir a <a href=\"http://localhost/practicaswpgit/wp-admin/\">su panel</a> para eliminar esta página y crear nuevas para su contenido. ¡Que se divierta!', 'Página de ejemplo', '', 'publish', 'closed', 'open', '', 'pagina-de-ejemplo', '', '', '2017-12-31 01:07:45', '2017-12-31 01:07:45', '', 0, 'http://localhost/practicaswpgit/?page_id=2', 0, 'page', '', 0),
(3, 1, '2017-12-31 01:20:27', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-12-31 01:20:27', '0000-00-00 00:00:00', '', 0, 'http://localhost/practicaswpgit/?p=3', 0, 'post', '', 0),
(4, 1, '2017-12-31 14:50:10', '0000-00-00 00:00:00', '', 'Inicio', '', 'draft', 'closed', 'closed', '', '', '', '', '2017-12-31 14:50:10', '0000-00-00 00:00:00', '', 0, 'http://localhost/practicaswpgit/?p=4', 1, 'nav_menu_item', '', 0),
(5, 1, '2017-12-31 14:50:12', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2017-12-31 14:50:12', '0000-00-00 00:00:00', '', 0, 'http://localhost/practicaswpgit/?p=5', 1, 'nav_menu_item', '', 0),
(6, 1, '2017-12-31 14:51:32', '2017-12-31 14:51:32', '', 'Nosotros', '', 'publish', 'closed', 'closed', '', 'inicio', '', '', '2017-12-31 20:12:26', '2017-12-31 20:12:26', '', 0, 'http://localhost/practicaswpgit/?p=6', 1, 'nav_menu_item', '', 0),
(7, 1, '2017-12-31 14:52:50', '2017-12-31 14:52:50', '{\n    \"nav_menu[2]\": {\n        \"value\": {\n            \"name\": \"Men\\u00fa Superior\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": true\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2017-12-31 14:52:50\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'afdc372b-beb3-4c9a-a258-82f248eb3123', '', '', '2017-12-31 14:52:50', '2017-12-31 14:52:50', '', 0, 'http://localhost/practicaswpgit/2017/12/31/afdc372b-beb3-4c9a-a258-82f248eb3123/', 0, 'customize_changeset', '', 0),
(8, 1, '2017-12-31 14:53:05', '2017-12-31 14:53:05', '{\n    \"nav_menu[2]\": {\n        \"value\": {\n            \"name\": \"Men\\u00fa Superior\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2017-12-31 14:53:05\"\n    },\n    \"nav_menu_item[-749475703]\": {\n        \"value\": {\n            \"object_id\": 2,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"post_type\",\n            \"title\": \"P\\u00e1gina de ejemplo\",\n            \"url\": \"http://localhost/practicaswpgit/pagina-de-ejemplo/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"P\\u00e1gina de ejemplo\",\n            \"nav_menu_term_id\": 2,\n            \"_invalid\": false,\n            \"type_label\": \"P\\u00e1gina\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2017-12-31 14:53:05\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '0562f3d7-aca2-410e-a6b8-f8c89f87e7d7', '', '', '2017-12-31 14:53:05', '2017-12-31 14:53:05', '', 0, 'http://localhost/practicaswpgit/2017/12/31/0562f3d7-aca2-410e-a6b8-f8c89f87e7d7/', 0, 'customize_changeset', '', 0),
(10, 1, '2017-12-31 16:05:27', '2017-12-31 16:05:27', '', 'Inicio', '', 'publish', 'closed', 'closed', '', 'inicio-2', '', '', '2017-12-31 18:14:25', '2017-12-31 18:14:25', '', 0, 'http://localhost/practicaswpgit/?p=10', 1, 'nav_menu_item', '', 0),
(11, 1, '2017-12-31 16:06:14', '2017-12-31 16:06:14', '{\n    \"nav_menu_item[-458061826]\": {\n        \"value\": {\n            \"object_id\": 2,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"post_type\",\n            \"title\": \"P\\u00e1gina de ejemplo\",\n            \"url\": \"http://localhost/practicaswpgit/pagina-de-ejemplo/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"P\\u00e1gina de ejemplo\",\n            \"nav_menu_term_id\": 3,\n            \"_invalid\": false,\n            \"type_label\": \"P\\u00e1gina\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2017-12-31 16:06:14\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '9a0f98dc-1995-4800-a57c-eaea13e94061', '', '', '2017-12-31 16:06:14', '2017-12-31 16:06:14', '', 0, 'http://localhost/practicaswpgit/2017/12/31/9a0f98dc-1995-4800-a57c-eaea13e94061/', 0, 'customize_changeset', '', 0),
(13, 1, '2017-12-31 17:41:53', '2017-12-31 17:41:53', '', 'Movilidad Estudiantil', '', 'publish', 'closed', 'closed', '', 'movilidad-estudiantil', '', '', '2017-12-31 22:58:07', '2017-12-31 22:58:07', '', 0, 'http://localhost/practicaswpgit/?page_id=13', 0, 'page', '', 0),
(14, 1, '2017-12-31 17:41:53', '2017-12-31 17:41:53', '', 'Movilidad Estudiantil', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2017-12-31 17:41:53', '2017-12-31 17:41:53', '', 13, 'http://localhost/practicaswpgit/2017/12/31/13-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2017-12-31 17:46:42', '2017-12-31 17:46:42', '', 'Internacionalización Docentes', '', 'publish', 'closed', 'closed', '', 'internacionalizacion-docentes', '', '', '2017-12-31 17:46:42', '2017-12-31 17:46:42', '', 0, 'http://localhost/practicaswpgit/?page_id=15', 0, 'page', '', 0),
(16, 1, '2017-12-31 17:46:42', '2017-12-31 17:46:42', '', 'Internacionalización Docentes', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2017-12-31 17:46:42', '2017-12-31 17:46:42', '', 15, 'http://localhost/practicaswpgit/2017/12/31/15-revision-v1/', 0, 'revision', '', 0),
(17, 1, '2017-12-31 17:47:07', '2017-12-31 17:47:07', ' ', '', '', 'publish', 'closed', 'closed', '', '17', '', '', '2017-12-31 18:14:26', '2017-12-31 18:14:26', '', 0, 'http://localhost/practicaswpgit/?p=17', 4, 'nav_menu_item', '', 0),
(18, 1, '2017-12-31 17:47:07', '2017-12-31 17:47:07', ' ', '', '', 'publish', 'closed', 'closed', '', '18', '', '', '2017-12-31 18:14:26', '2017-12-31 18:14:26', '', 0, 'http://localhost/practicaswpgit/?p=18', 5, 'nav_menu_item', '', 0),
(19, 1, '2017-12-31 17:51:28', '2017-12-31 17:51:28', '', 'Otras Convocatorias', '', 'publish', 'closed', 'closed', '', 'otras-convocatorias', '', '', '2017-12-31 17:51:28', '2017-12-31 17:51:28', '', 0, 'http://localhost/practicaswpgit/?page_id=19', 0, 'page', '', 0),
(20, 1, '2017-12-31 17:51:28', '2017-12-31 17:51:28', '', 'Otras Convocatorias', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2017-12-31 17:51:28', '2017-12-31 17:51:28', '', 19, 'http://localhost/practicaswpgit/2017/12/31/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2017-12-31 17:58:32', '2017-12-31 17:58:32', '', 'Noticias', '', 'publish', 'closed', 'closed', '', 'noticias', '', '', '2017-12-31 17:58:32', '2017-12-31 17:58:32', '', 0, 'http://localhost/practicaswpgit/?page_id=21', 0, 'page', '', 0),
(22, 1, '2017-12-31 17:58:32', '2017-12-31 17:58:32', '', 'Noticias', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2017-12-31 17:58:32', '2017-12-31 17:58:32', '', 21, 'http://localhost/practicaswpgit/2017/12/31/21-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2017-12-31 18:08:00', '2017-12-31 18:08:00', '', 'Eventos', '', 'publish', 'closed', 'closed', '', 'eventos', '', '', '2017-12-31 18:08:00', '2017-12-31 18:08:00', '', 0, 'http://localhost/practicaswpgit/?page_id=23', 0, 'page', '', 0),
(24, 1, '2017-12-31 18:08:00', '2017-12-31 18:08:00', '', 'Eventos', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2017-12-31 18:08:00', '2017-12-31 18:08:00', '', 23, 'http://localhost/practicaswpgit/2017/12/31/23-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2017-12-31 18:12:25', '2017-12-31 18:12:25', '', 'Convenios', '', 'publish', 'closed', 'closed', '', 'convenios', '', '', '2017-12-31 20:12:26', '2017-12-31 20:12:26', '', 0, 'http://localhost/practicaswpgit/?p=25', 2, 'nav_menu_item', '', 0),
(26, 1, '2017-12-31 18:12:25', '2017-12-31 18:12:25', ' ', '', '', 'publish', 'closed', 'closed', '', '26', '', '', '2017-12-31 20:12:26', '2017-12-31 20:12:26', '', 0, 'http://localhost/practicaswpgit/?p=26', 3, 'nav_menu_item', '', 0),
(27, 1, '2017-12-31 18:12:25', '2017-12-31 18:12:25', ' ', '', '', 'publish', 'closed', 'closed', '', '27', '', '', '2017-12-31 20:12:26', '2017-12-31 20:12:26', '', 0, 'http://localhost/practicaswpgit/?p=27', 4, 'nav_menu_item', '', 0),
(28, 1, '2017-12-31 18:14:26', '2017-12-31 18:14:26', ' ', '', '', 'publish', 'closed', 'closed', '', '28', '', '', '2017-12-31 18:14:26', '2017-12-31 18:14:26', '', 0, 'http://localhost/practicaswpgit/?p=28', 3, 'nav_menu_item', '', 0),
(29, 1, '2017-12-31 18:14:25', '2017-12-31 18:14:25', ' ', '', '', 'publish', 'closed', 'closed', '', '29', '', '', '2017-12-31 18:14:25', '2017-12-31 18:14:25', '', 0, 'http://localhost/practicaswpgit/?p=29', 2, 'nav_menu_item', '', 0),
(30, 1, '2017-12-31 18:14:26', '2017-12-31 18:14:26', ' ', '', '', 'publish', 'closed', 'closed', '', '30', '', '', '2017-12-31 18:14:26', '2017-12-31 18:14:26', '', 0, 'http://localhost/practicaswpgit/?p=30', 6, 'nav_menu_item', '', 0),
(31, 1, '2017-12-31 18:59:26', '2017-12-31 18:59:26', '', 'Contáctanos', '', 'publish', 'closed', 'closed', '', 'contactanos', '', '', '2017-12-31 18:59:26', '2017-12-31 18:59:26', '', 0, 'http://localhost/practicaswpgit/?page_id=31', 0, 'page', '', 0),
(32, 1, '2017-12-31 18:59:26', '2017-12-31 18:59:26', '', 'Contáctanos', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2017-12-31 18:59:26', '2017-12-31 18:59:26', '', 31, 'http://localhost/practicaswpgit/2017/12/31/31-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2017-12-31 20:12:26', '2017-12-31 20:12:26', ' ', '', '', 'publish', 'closed', 'closed', '', '33', '', '', '2017-12-31 20:12:26', '2017-12-31 20:12:26', '', 0, 'http://localhost/practicaswpgit/?p=33', 5, 'nav_menu_item', '', 0),
(34, 1, '2017-12-31 20:17:22', '2017-12-31 20:17:22', '', 'Formulario', '', 'publish', 'closed', 'closed', '', 'formulario', '', '', '2017-12-31 20:17:27', '2017-12-31 20:17:27', '', 0, 'http://localhost/practicaswpgit/?page_id=34', 0, 'page', '', 0),
(35, 1, '2017-12-31 20:17:22', '2017-12-31 20:17:22', '', 'Formulario', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2017-12-31 20:17:22', '2017-12-31 20:17:22', '', 34, 'http://localhost/practicaswpgit/2017/12/31/34-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2017-12-31 21:06:55', '2017-12-31 21:06:55', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:13:\"post_category\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:30:\"category:movilidad-estudiantil\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'Datos para Movilidad Estudiantil', 'datos-para-movilidad-estudiantil', 'publish', 'closed', 'closed', '', 'group_5a494ca59f257', '', '', '2017-12-31 21:06:57', '2017-12-31 21:06:57', '', 0, 'http://localhost/practicaswpgit/?post_type=acf-field-group&#038;p=36', 0, 'acf-field-group', '', 0),
(37, 1, '2017-12-31 21:06:55', '2017-12-31 21:06:55', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:45:\"Ingresar Nombre de Universidad o Institución\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Institución', 'institucion', 'publish', 'closed', 'closed', '', 'field_5a494cc76fbe5', '', '', '2017-12-31 21:06:55', '2017-12-31 21:06:55', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=37', 0, 'acf-field', '', 0),
(38, 1, '2017-12-31 21:06:55', '2017-12-31 21:06:55', 'a:8:{s:4:\"type\";s:11:\"date_picker\";s:12:\"instructions\";s:34:\"Marca el inicio de la Convocatoria\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:14:\"display_format\";s:6:\"F j, Y\";s:13:\"return_format\";s:6:\"F j, Y\";s:9:\"first_day\";i:1;}', 'Inicio de Convocatoria', 'inicio_de_convocatoria', 'publish', 'closed', 'closed', '', 'field_5a494db66fbe6', '', '', '2017-12-31 21:06:55', '2017-12-31 21:06:55', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=38', 1, 'acf-field', '', 0),
(39, 1, '2017-12-31 21:06:55', '2017-12-31 21:06:55', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:55:\"Marca el Tiempo en Meses o Años que durara el Programa\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Duración de Convocatoria', 'duracion_de_convocatoria', 'publish', 'closed', 'closed', '', 'field_5a494e3b6fbe7', '', '', '2017-12-31 21:06:55', '2017-12-31 21:06:55', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=39', 2, 'acf-field', '', 0),
(40, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:9:\"thumbnail\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Imagen de portada Convocatoria', 'imagen_de_portada_convocatoria', 'publish', 'closed', 'closed', '', 'field_5a494e816fbe8', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=40', 3, 'acf-field', '', 0),
(41, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Presentación', 'presentacion', 'publish', 'closed', 'closed', '', 'field_5a494efc6fbe9', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=41', 4, 'acf-field', '', 0),
(42, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Beneficios', 'beneficios', 'publish', 'closed', 'closed', '', 'field_5a494f3f6fbea', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=42', 5, 'acf-field', '', 0),
(43, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'IES Elegibles', 'ies_elegibles', 'publish', 'closed', 'closed', '', 'field_5a494f5c6fbeb', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=43', 6, 'acf-field', '', 0),
(44, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Requerimientos para Postular', 'requerimientos_para_postular', 'publish', 'closed', 'closed', '', 'field_5a494f7b6fbec', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=44', 7, 'acf-field', '', 0),
(45, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Áreas de Conocimiento', 'areas_de_conocimiento', 'publish', 'closed', 'closed', '', 'field_5a494f926fbed', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=45', 8, 'acf-field', '', 0),
(46, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Pasos para postular', 'pasos_para_postular', 'publish', 'closed', 'closed', '', 'field_5a494fe76fbee', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=46', 9, 'acf-field', '', 0),
(47, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Cronograma', 'cronograma', 'publish', 'closed', 'closed', '', 'field_5a494ffa6fbef', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=47', 10, 'acf-field', '', 0),
(48, 1, '2017-12-31 21:06:56', '2017-12-31 21:06:56', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Duración de la Beca', 'duracion_de_la_beca', 'publish', 'closed', 'closed', '', 'field_5a4950266fbf0', '', '', '2017-12-31 21:06:56', '2017-12-31 21:06:56', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=48', 11, 'acf-field', '', 0),
(49, 1, '2017-12-31 21:06:57', '2017-12-31 21:06:57', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Documentos Obligatorios', 'documentos_obligatorios', 'publish', 'closed', 'closed', '', 'field_5a4950426fbf1', '', '', '2017-12-31 21:06:57', '2017-12-31 21:06:57', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=49', 12, 'acf-field', '', 0),
(50, 1, '2017-12-31 21:06:57', '2017-12-31 21:06:57', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Bases y modificaciones', 'bases_y_modificaciones', 'publish', 'closed', 'closed', '', 'field_5a49504c6fbf2', '', '', '2017-12-31 21:06:57', '2017-12-31 21:06:57', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=50', 13, 'acf-field', '', 0),
(51, 1, '2017-12-31 21:06:57', '2017-12-31 21:06:57', 'a:10:{s:4:\"type\";s:4:\"file\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:7:\"library\";s:3:\"all\";s:8:\"min_size\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Documentos Convocatoria', 'documentos_convocatoria', 'publish', 'closed', 'closed', '', 'field_5a4950616fbf3', '', '', '2017-12-31 21:06:57', '2017-12-31 21:06:57', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=51', 14, 'acf-field', '', 0),
(52, 1, '2017-12-31 21:06:57', '2017-12-31 21:06:57', 'a:10:{s:4:\"type\";s:4:\"file\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:7:\"library\";s:3:\"all\";s:8:\"min_size\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Resultados Convocatorias', 'resultados_convocatorias', 'publish', 'closed', 'closed', '', 'field_5a49508b6fbf4', '', '', '2017-12-31 21:06:57', '2017-12-31 21:06:57', '', 36, 'http://localhost/practicaswpgit/?post_type=acf-field&p=52', 15, 'acf-field', '', 0),
(53, 1, '2017-12-31 21:09:20', '2017-12-31 21:09:20', '', 'Beca Presidente de la Republica', '', 'publish', 'open', 'open', '', 'beca-presidente-de-la-republica', '', '', '2017-12-31 21:09:20', '2017-12-31 21:09:20', '', 0, 'http://localhost/practicaswpgit/?p=53', 0, 'post', '', 0),
(54, 1, '2017-12-31 21:09:20', '2017-12-31 21:09:20', '', 'Beca Presidente de la Republica', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2017-12-31 21:09:20', '2017-12-31 21:09:20', '', 53, 'http://localhost/practicaswpgit/2017/12/31/53-revision-v1/', 0, 'revision', '', 0),
(55, 1, '2017-12-31 22:56:54', '2017-12-31 22:56:54', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:4:\"page\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:2:\"13\";}}}s:8:\"position\";s:15:\"acf_after_title\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'Datos de Pagina Movilidad Estudiantil', 'datos-de-pagina-movilidad-estudiantil', 'publish', 'closed', 'closed', '', 'group_5a496a5f6a653', '', '', '2017-12-31 23:08:32', '2017-12-31 23:08:32', '', 0, 'http://localhost/practicaswpgit/?post_type=acf-field-group&#038;p=55', 0, 'acf-field-group', '', 0),
(56, 1, '2017-12-31 22:56:54', '2017-12-31 22:56:54', 'a:10:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:1;s:5:\"delay\";i:0;}', 'Descripción Movilidad Estudiantil', 'descripcion_movilidad_estudiantil', 'publish', 'closed', 'closed', '', 'field_5a496a7869f6a', '', '', '2017-12-31 23:08:31', '2017-12-31 23:08:31', '', 55, 'http://localhost/practicaswpgit/?post_type=acf-field&#038;p=56', 0, 'acf-field', '', 0),
(57, 1, '2017-12-31 22:56:54', '2017-12-31 22:56:54', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:9:\"thumbnail\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Portada Movilidad', 'portada_movilidad', 'publish', 'closed', 'closed', '', 'field_5a496b2969f6b', '', '', '2017-12-31 22:57:19', '2017-12-31 22:57:19', '', 55, 'http://localhost/practicaswpgit/?post_type=acf-field&#038;p=57', 1, 'acf-field', '', 0),
(58, 1, '2017-12-31 22:58:07', '2017-12-31 22:58:07', '', 'Movilidad Estudiantil', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2017-12-31 22:58:07', '2017-12-31 22:58:07', '', 13, 'http://localhost/practicaswpgit/2017/12/31/13-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Sin categoría', 'sin-categoria', 0),
(2, 'Menú Superior', 'menu-superior', 0),
(3, 'Menú Movil', 'menu-movil', 0),
(4, 'Movilidad Estudiantil', 'movilidad-estudiantil', 0),
(5, 'Internacionalización Docente', 'internacionalizacion-docente', 0),
(6, 'Otras Convocatorias', 'otras-convocatorias', 0),
(7, 'Noticia', 'noticia', 0),
(8, 'Evento', 'evento', 0),
(9, 'Galeria', 'galeria', 0),
(10, 'Datos Generales', 'datos-generales', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(6, 2, 0),
(10, 3, 0),
(17, 3, 0),
(18, 3, 0),
(25, 2, 0),
(26, 2, 0),
(27, 2, 0),
(28, 3, 0),
(29, 3, 0),
(30, 3, 0),
(33, 2, 0),
(53, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 5),
(3, 3, 'nav_menu', '', 0, 6),
(4, 4, 'category', '', 0, 1),
(5, 5, 'category', '', 0, 0),
(6, 6, 'category', '', 0, 0),
(7, 7, 'category', '', 0, 0),
(8, 8, 'category', '', 0, 0),
(9, 9, 'category', '', 0, 0),
(10, 10, 'category', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'adminpracticas'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"cf5c478432f857907a2da70768cba59a4dbb66d001ef9973555f25070e05d92c\";a:4:{s:10:\"expiration\";i:1515892826;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36\";s:5:\"login\";i:1514683226;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '3'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:2:\"::\";}'),
(19, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(20, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(21, 1, 'nav_menu_recently_edited', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'adminpracticas', '$P$BNfDJgFRw4sZjnM5SzbpbeFzG2UVsl.', 'adminpracticas', 'danielunprg@gmail.com', '', '2017-12-31 01:07:43', '', 0, 'adminpracticas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indices de la tabla `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indices de la tabla `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indices de la tabla `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indices de la tabla `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indices de la tabla `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indices de la tabla `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indices de la tabla `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT de la tabla `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT de la tabla `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
