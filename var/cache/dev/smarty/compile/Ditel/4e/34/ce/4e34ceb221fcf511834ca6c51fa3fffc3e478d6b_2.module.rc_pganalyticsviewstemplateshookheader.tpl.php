<?php
/* Smarty version 4.3.4, created on 2026-01-05 14:49:55
  from 'module:rc_pganalyticsviewstemplateshookheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_695bc183772ee4_12284386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e34ceb221fcf511834ca6c51fa3fffc3e478d6b' => 
    array (
      0 => 'module:rc_pganalyticsviewstemplateshookheader.tpl',
      1 => 1589148000,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695bc183772ee4_12284386 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/www/public/modules/rc_pganalytics/views/templates/hook/header.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['optimize_id']->value) && isset($_smarty_tpl->tpl_vars['optimize_class_name']->value)) && $_smarty_tpl->tpl_vars['optimize_id']->value && $_smarty_tpl->tpl_vars['optimize_class_name']->value) {?>
    <!-- Google Optimize Page Hiding-->
    <style>.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['optimize_class_name']->value, ENT_QUOTES, 'UTF-8');?>
 {opacity: 0 !important} </style>
    <?php echo '<script'; ?>
 data-keepinline>
        
        (function(a,s,y,n,c,h,i,d,e){
            s.className+=' '+y;h.start=1*new Date;
            h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
            (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);
            h.timeout=c;
        })
        
        (window,document.documentElement,'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['optimize_class_name']->value, ENT_QUOTES, 'UTF-8');?>
','dataLayer',<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['optimize_time_out']->value, ENT_QUOTES, 'UTF-8');?>
,{'<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['optimize_id']->value, ENT_QUOTES, 'UTF-8');?>
':true});
    <?php echo '</script'; ?>
>
<?php }?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<?php echo '<script'; ?>
 async src='https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_id']->value, ENT_QUOTES, 'UTF-8');?>
' data-keepinline><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 data-keepinline>
    
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
<?php echo '</script'; ?>
>
<!-- end /home/www/public/modules/rc_pganalytics/views/templates/hook/header.tpl --><?php }
}
