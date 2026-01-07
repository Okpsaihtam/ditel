<?php
/* Smarty version 4.3.4, created on 2026-01-06 09:44:50
  from '/home/www/public/modules/webpgenerator/views/templates/admin/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695ccb82d1b7c7_22024314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406304677ea9e850107d776e87ec92fccecd21e2' => 
    array (
      0 => '/home/www/public/modules/webpgenerator/views/templates/admin/banner.tpl',
      1 => 1587679200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695ccb82d1b7c7_22024314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel kpi-container">
    <div class="panel-heading">
        <i class="icon-home"></i> Welcome
    </div>
    <div class="kpi-refresh"></div>
    <div class="row">
        <div class="col-sm-6 col-lg-6">
            <div class="alert alert-success">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome and thank you for having purchased our module. Please read carefully the PDF documentation included with the module.','mod'=>'webpgenerator'),$_smarty_tpl ) );?>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a target="blank" href="https://addons.prestashop.com//127_teapot-creative">
                    <img class="bt-effect img-responsive" src="/modules/webpgenerator/views/img/banner.png">
                </a>
            </div>
        </div>

        <div class="button-container col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <div class="custom-text-container col-lg-12">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We provide detailed documentation in five different languages, to ease the configuration of the module as much as possible.
                If you have any questions, we are at your disposal with any information you require.
                Don`t hesitate to leave a rating and a comment on the module. We value your opinions and feedback.
                Keep an eye on the module version and check if updates are available. If you need help with updating, just contact us.','mod'=>'webpgenerator'),$_smarty_tpl ) );?>

            </div>

            <div class="col-sm-6 col-lg-6">
                <button class="btn btn-default champs-button-documentation">
                    <i class="icon-folder-open"></i>
                    Documentation
                </button>
                <div class="documentation-dropdown">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['modulePath']->value;?>
documentation_en.pdf" target="_blank" class="lang">EN</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['modulePath']->value;?>
documentation_it.pdf" target="_blank" class="lang">IT</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['modulePath']->value;?>
documentation_es.pdf" target="_blank" class="lang">ES</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['modulePath']->value;?>
documentation_fr.pdf" target="_blank" class="lang">FR</a>
                </div>

            </div>

            <div class="col-sm-6 col-lg-6">
                <a href="https://addons.prestashop.com/en/127_teapot-creative" target="_blank">
                    <button class="btn btn-default champs-button-contact-support">
                        <i class="icon-headphones"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact support','mod'=>'webpgenerator'),$_smarty_tpl ) );?>

                    </button>
                </a>
            </div>

            <div class="col-sm-6 col-lg-6">
                <a href="https://addons.prestashop.com/en/ratings.php" target="_blank">
                    <button class="btn btn-default champs-button-rate">
                        <i class="icon-star"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rate me','mod'=>'webpgenerator'),$_smarty_tpl ) );?>

                    </button>
                </a>
            </div>

            <div class="col-sm-6 col-lg-6">
                <button class="btn btn-default champs-button-info">
                    <i class="icon-info-circle"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Version','mod'=>'webpgenerator'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>

                </button>
            </div>

        </div>
    </div>

</div>

<?php echo '<script'; ?>
>
    $( ".champs-button-documentation" ).click(function() {
        $('.documentation-dropdown').toggle();
    });
<?php echo '</script'; ?>
><?php }
}
