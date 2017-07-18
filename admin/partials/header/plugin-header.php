<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$plugin_name = WSFL_PLUGIN_NAME;
$plugin_version = WSFL_PLUGIN_VERSION;
?>
<div id="dotsstoremain">
    <div class="all-pad">
        <header class="dots-header">
            <div class="dots-logo-main">
                <img  src="<?php echo WSFL_PLUGIN_URL . 'admin/images/woo-save-for-later.png'; ?>">
            </div>
            <div class="dots-header-right">
                <div class="logo-detail">
                    <strong><?php _e($plugin_name, WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?> </strong>
                    <span>Free Version <?php echo $plugin_version; ?> </span>
                </div>
                <div class="button-dots">
                    <span class=""><a  target = "_blank" href="https://store.multidots.com/woocommerce-save-for-later-cart-enhancement/" >
                            <img src="<?php echo WSFL_PLUGIN_URL . 'admin/images/upgrade_new.png'; ?>"></a>
                    </span>
                    <span class="support_dotstore_image"><a  target = "_blank" href="https://store.multidots.com/dotstore-support-panel/" >
                            <img src="<?php echo WSFL_PLUGIN_URL . 'admin/images/support_new.png'; ?>"></a>
                    </span>
                </div>
            </div>

            <?php
            $fee_getting_started ='';
            $fee_list = isset($_GET['page']) && $_GET['page'] == 'save_for_later' ? 'active' : '';
            $fee_add = isset($_GET['page']) && $_GET['page'] == 'wsfl-add-new' ? 'active' : '';
            //            $fee_getting_started = isset($_GET['page']) && $_GET['page'] == 'wcpfc-get-started' ? 'active' : '';
            if (!empty($_GET['page']) && ($_GET['page'] == 'wsfl-get-started')) {
                $fee_getting_started = 'active';

            }
//            $premium_version = isset($_GET['page']) && $_GET['page'] == 'wsfl-premium' ? 'active' : '';
            $fee_information = isset($_GET['page']) && $_GET['page'] == 'wsfl-information' ? 'active' : '';

            if (isset($_GET['page']) && $_GET['page'] == 'wsfl-information' || isset($_GET['page']) && $_GET['page'] == 'wsfl-get-started') {
                $fee_about = 'active';
            } else {
                $fee_about = '';
            }
            if (!empty($_REQUEST['action'])) {
                if ($_REQUEST['action'] == 'add' || $_REQUEST['action'] == 'edit') {
                    $fee_add = 'active';
                }
            }
            ?>
            <div class="dots-menu-main">
                <nav>
                    <ul>
                        <li>
                            <a class="dotstore_plugin <?php echo $fee_list; ?>"  href="<?php echo home_url('/wp-admin/admin.php?page=save_for_later'); ?>"><?php _e('Settings', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a>
                        </li>
<!--                        <li>
                            <a class="dotstore_plugin <?php // echo $premium_version; ?>"  href="<?php // echo home_url('/wp-admin/admin.php?page=wsfl-premium'); ?>"> <?php // _e('Premium Version', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a>
                        </li>-->
                        <li>
                            <a class="dotstore_plugin <?php echo $fee_about; ?>"  href="<?php echo home_url('/wp-admin/admin.php?page=wsfl-get-started'); ?>"><?php _e('About Plugin', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a>
                            <ul class="sub-menu">
                                <li><a  class="dotstore_plugin <?php echo $fee_getting_started; ?>" href="<?php echo home_url('/wp-admin/admin.php?page=wsfl-get-started'); ?>"><?php _e('Getting Started', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                                <li><a class="dotstore_plugin <?php echo $fee_information; ?>" href="<?php echo home_url('/wp-admin/admin.php?page=wsfl-information'); ?>"><?php _e('Quick info', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="dotstore_plugin"  href="#"><?php _e('Dotstore', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a>
                            <ul class="sub-menu">
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-pro-new-interface-woo-plugins"><?php _e('WooCommerce Plugins', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-pro-new-interface-wp-plugins"><?php _e('Wordpress Plugins', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li><br>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-pro-new-interface-wp-free-plugins"><?php _e('Free Plugins', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-pro-new-interface-free-theme"><?php _e('Free Themes', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                                <li><a target="_blank" href="https://store.multidots.com/go/flatrate-pro-new-interface-dotstore-support"><?php _e('Contact Support', WOO_SAVE_FOR_LATER_TEXT_DOMAIN); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>