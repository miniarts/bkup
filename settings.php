<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_bloom
 * @copyright 2016 Ryan Wyllie
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new theme_bloom_admin_settingspage_tabs('themesettingbloom', get_string('configtitle', 'theme_bloom'));

    // General settings.
    $page = new admin_settingpage('theme_bloom_general', get_string('generalsettings', 'theme_bloom'));


    $name = 'theme_bloom/dashboard';
    $title = get_string('dashboard', 'theme_bloom');
    $description = get_string('dashboard_desc', 'theme_bloom');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/calendar';
    $title = get_string('calendar', 'theme_bloom');
    $description = get_string('calendar_desc', 'theme_bloom');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/mycourse';
    $title = get_string('mycourse', 'theme_bloom');
    $description = get_string('mycourse_desc', 'theme_bloom');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo file setting.
    $name = 'theme_bloom/logo';
    $title = get_string('logo','theme_bloom');
    $description = get_string('logo_desc', 'theme_bloom');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo mobile file setting.
    $name = 'theme_bloom/logocompact';
    $title = get_string('logocompact','theme_bloom');
    $description = get_string('logocompact_desc', 'theme_bloom');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logocompact');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logo main logo on the login page setting.
    $name = 'theme_bloom/logomain';
    $title = get_string('logomain','theme_bloom');
    $description = get_string('logomain_desc', 'theme_bloom');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logomain');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // favicon
    $name = 'theme_bloom/favicon';
    $title = get_string('favicon','theme_bloom');
    $description = get_string('favicon_desc', 'theme_bloom');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    //Background image setting.
    $name = 'theme_bloom/backgroundimage';
    $title = get_string('backgroundimage', 'theme_bloom');
    $description = get_string('backgroundimage_desc', 'theme_bloom');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Footnote setting.
    $name = 'theme_bloom/footnote';
    $title = get_string('footnote', 'theme_bloom');
    $description = get_string('footnotedesc', 'theme_bloom');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    $name = 'theme_bloom/footerlinks';
    $title = get_string('footerlinks','theme_bloom');
    $description = get_string('footerlinksdesc','theme_bloom');
    $default = '';
    $setting = new admin_Setting_configtextarea($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // // Custom CSS file.
    // $name = 'theme_bloom/customcss';
    // $title = get_string('customcss', 'theme_bloom');
    // $description = get_string('customcssdesc', 'theme_bloom');
    // $default = '';
    // $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    // $setting->set_updatedcallback('theme_reset_all_caches');
    // $page->add($setting);

     $settings->add($page);

    $page = new admin_settingpage('theme_bloom_color', get_string('colorsettings', 'theme_bloom'));

    $name = 'theme_bloom/inverse';
    $title = get_string('inverse', 'theme_bloom');
    $description = get_string('inverse_desc', 'theme_bloom');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    //colours
    $name = 'theme_bloom/primary';
    $title = get_string('primary', 'theme_bloom');
    $description = get_string('primary_desc', 'theme_bloom');
    $default = '#32548c';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/secondary';
    $title = get_string('secondary', 'theme_bloom');
    $description = get_string('secondary_desc', 'theme_bloom');
    $default = '#0099ff';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/accentcolor';
    $title = get_string('accentcolor', 'theme_bloom');
    $description = get_string('accentcolor_desc', 'theme_bloom');
    $default = '#fdab05';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/tab1';
    $title = get_string('tab1', 'theme_bloom');
    $description = get_string('tab1_desc', 'theme_bloom');
    $default = '#1f9888';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/tab2';
    $title = get_string('tab2', 'theme_bloom');
    $description = get_string('tab2_desc', 'theme_bloom');
    $default = '#fdab05';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/tab3';
    $title = get_string('tab3', 'theme_bloom');
    $description = get_string('tab3_desc', 'theme_bloom');
    $default = '#e90b81';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/footer';
    $title = get_string('footer', 'theme_bloom');
    $description = get_string('footer_desc', 'theme_bloom');
    $default = '#545157';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/blocksgray';
    $title = get_string('blocksgray', 'theme_bloom');
    $description = get_string('blocksgray_desc', 'theme_bloom');
    $default = '#f2f4f1';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/blocksblue';
    $title = get_string('blocksblue', 'theme_bloom');
    $description = get_string('blocksblue_desc', 'theme_bloom');
    $default = '#f1f9fe';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);



    // Social media settings.
    $page = new admin_settingpage('theme_bloom_socialmedia', get_string('socialmediasettings', 'theme_bloom'));

    $name = 'theme_bloom/facebook';
    $title = get_string('facebook','theme_bloom');
    $description = get_string('facebookdesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/twitter';
    $title = get_string('twitter','theme_bloom');
    $description = get_string('twitterdesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/linkedin';
    $title = get_string('linkedin','theme_bloom');
    $description = get_string('linkedindesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/youtube';
    $title = get_string('youtube','theme_bloom');
    $description = get_string('youtubedesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/google';
    $title = get_string('google','theme_bloom');
    $description = get_string('googledesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/flickr';
    $title = get_string('flickr','theme_bloom');
    $description = get_string('flickrdesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/pinterest';
    $title = get_string('pinterest','theme_bloom');
    $description = get_string('pinterestdesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/instagram';
    $title = get_string('instagram','theme_bloom');
    $description = get_string('instagramdesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_bloom/soundcloud';
    $title = get_string('soundcloud','theme_bloom');
    $description = get_string('soundclouddesc','theme_bloom');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description,$default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);  

    $settings->add($page);



    // Advanced settings.
    $page = new admin_settingpage('theme_bloom_advanced', get_string('advancedsettings', 'theme_bloom'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_bloom/scsspre',
        get_string('rawscsspre', 'theme_bloom'), get_string('rawscsspre_desc', 'theme_bloom'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_bloom/scss', get_string('rawscss', 'theme_bloom'),
        get_string('rawscss_desc', 'theme_bloom'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

}
