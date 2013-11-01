<?php
/**
 * SEF URLs that use a folder-like layout and include topic name and forum name
 * where applicable.
 *
 * @copyright (C) 2008-2012 PunBB, partially based on code (C) 2008-2009 FluxBB.org
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package PunBB
 */


// Make sure no one attempts to run this script "directly"
if (!defined('FORUM'))
	exit;

// These are the "fancy" folder based SEF URLs
$forum_url = array(
	'change_email'					=>	'change/email/$1/',
	'change_email_key'				=>	'change/email/$1/$2/',
	'change_password'				=>	'change/password/$1/',
	'change_password_key'			=>	'change/password/$1/$2/',
	'delete'						=>	'delete/$1/',
	'delete_avatar'					=>	'delete/avatar/$1/$2/',
	'delete_user'					=>	'delete/user/$1/',
	'edit'							=>	'edit/$1/',
	'email'							=>	'email/$1/',
	'forum'							=>	'forum/$1/$2/',
	'forum_rss'						=>	'feed/rss/forum/$1/',
	'forum_atom'					=>	'feed/atom/forum/$1/',
	'forum_subscribe'				=>	'subscribe/forum/$1/$2/',
	'forum_unsubscribe'				=>	'unsubscribe/forum/$1/$2/',
	'help'							=>	'help/$1/',
	'index'							=>	'',
	'index_rss'						=>	'feed/rss/',
	'index_atom'					=>	'feed/atom/',
	'login'							=>	'login/',
	'logout'						=>	'logout/$1/$2/',
	'mark_read'						=>	'mark/read/$1/',
	'mark_forum_read'				=>	'mark/forum/$1/read/$2/',
	'new_topic'						=>	'new/topic/$1/',
	'new_reply'						=>	'new/reply/$1/',
	'post'							=>	'post/$1/#p$1',
	'profile_about'					=>	'user/$1/about/',
	'profile_identity'				=>	'user/$1/identity/',
	'profile_settings'				=>	'user/$1/settings/',
	'profile_avatar'				=>	'user/$1/avatar/',
	'profile_signature'				=>	'user/$1/signature/',
	'profile_admin'					=>	'user/$1/admin/',
	'quote'							=>	'new/reply/$1/quote/$2/',
	'register'						=>	'register/',
	'report'						=>	'report/$1/',
	'request_password'				=>	'request/password/',
	'rules'							=>	'rules/',
	'search'						=>	'search/',
	'search_advanced'				=>	'search/advanced/',
	'search_resultft'				=>	'search/k$1/$2/a$3/$4/$5/$6/$7/',
	'search_results'				=>	'search/$1/',
	'search_new'					=>	'search/new/',
	'search_new_results'			=>	'search/new/$1/',
	'search_recent'					=>	'search/recent/',
	'search_recent_results'			=>	'search/recent/$1/',
	'search_unanswered'				=>	'search/unanswered/',
	'search_subscriptions'			=>	'search/subscriptions/$1/',
	'search_forum_subscriptions'	=>	'search/subscriptions/forum/$1/',
	'search_user_posts'				=>	'search/posts/user/$1/',
	'search_user_topics'			=>	'search/topics/user/$1/',
	'subscribe'						=>	'subscribe/$1/$2/',
	'topic'							=>	'topic/$1/$2/',
	'topic_rss'						=>	'feed/rss/topic/$1/',
	'topic_atom'					=>	'feed/atom/topic/$1/',
	'topic_new_posts'				=>	'topic/$1/$2/new/posts/',
	'topic_last_post'				=>	'topic/$1/last/post/',
	'unsubscribe'					=>	'unsubscribe/$1/$2/',
	'user'							=>	'user/$1/',
	'users'							=>	'users/',
	'users_browse'					=>	'users/$4/$1/$2/$3/',
	'page'							=>	'page/$1/',
	'moderate_forum'				=>	'moderate/$1/',
	'get_host'						=>	'get_host/$1/',
	'move'							=>	'move_topics/$1/$2/',
	'open'							=>	'open/$1/$2/$3/',
	'close'							=>	'close/$1/$2/$3/',
	'stick'							=>	'stick/$1/$2/$3/',
	'unstick'						=>	'unstick/$1/$2/$3/',
	'moderate_topic'				=>	'moderate/$1/$2/',
	'admin_index'					=>	'admin/index.php',
	'admin_bans'					=>	'admin/bans.php?sort_by=1',
	'admin_categories'				=>	'admin/categories.php',
	'admin_censoring'				=>	'admin/censoring.php',
	'admin_extensions_manage'		=>	'admin/extensions.php?section=manage',
	'admin_extensions_hotfixes'		=>	'admin/extensions.php?section=hotfixes',
	'admin_forums'					=>	'admin/forums.php',
	'admin_forums_forum'			=>	'admin/forums.php#forum$1',
	'admin_groups'					=>	'admin/groups.php',
	'admin_loader'					=>	'admin/loader.php',
	'admin_reindex'					=>	'admin/reindex.php',
	'admin_settings_setup'			=>	'admin/settings.php?section=setup',
	'admin_settings_features'		=>	'admin/settings.php?section=features',
	'admin_settings_content'		=>	'admin/settings.php?section=content',
	'admin_settings_email'			=>	'admin/settings.php?section=email',
	'admin_settings_announcements'	=>	'admin/settings.php?section=announcements',
	'admin_settings_registration'	=>	'admin/settings.php?section=registration',
	'admin_settings_communications'	=>	'admin/settings.php?section=communications',
	'admin_settings_maintenance'	=>	'admin/settings.php?section=maintenance',
	'admin_prune'					=>	'admin/prune.php',
	'admin_ranks'					=>	'admin/ranks.php',
	'admin_reports'					=>	'admin/reports.php',
	'admin_users'					=>	'admin/users.php'
);
