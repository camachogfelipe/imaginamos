<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['menu']: Items for the menu region.
 * - $page['post_content']: Items for the post_content region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */?>
<div id="cargainicio"></div>
<div id="page-wrapper">  
  <!--
  Espacio para la seccion "tus sueños"
  <div id="header">
  <?php print render($page['header']); ?>
  </div>
  -->
  <div id="top">
    <div class="t-content">      
      <div id="t-logo">
        <?php if ($logo): ?>
          <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
            <img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" />
          </a>
        <?php endif ?>
      </div>
      <?php print render($page['top']); ?>
    </div>
  </div> 
  <div id="page-bkg-normal"></div>
  <div id="page-bkg-revancha"></div>
  <div id="page-bkg-dobles"></div> 
  <div id="content-wrapper">
    <div id="texture-content-wrapper">
      <div id="pre-content">
        <?php print render($page['precontent']); ?>
      </div>
      <div id="content">
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php if ($messages): ?><h1 class="title" id="page-title"><?php print $messages; ?></h1><?php endif; ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  			<?php print render($page['content']); ?>
      </div>
      <div id="footer-log">
        <?php print render($page['footer-log']); ?>
      </div>
      <div id="footer">
        <?php print render($page['footer']); ?>
      </div>
      <div id="footer-copy">
        <?php print render($page['footer-copy']); ?>
      </div>
    </div>  
  </div>  
</div>
