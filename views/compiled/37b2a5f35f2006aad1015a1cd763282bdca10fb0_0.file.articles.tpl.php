<?php
/* Smarty version 3.1.30, created on 2017-05-24 12:38:29
  from "/Users/juulderooy/Desktop/School/p1.3/BAP/MyBandV_M/views/evenementen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592562a56b1ae0_40845953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b2a5f35f2006aad1015a1cd763282bdca10fb0' => 
    array (
      0 => '/Users/juulderooy/Desktop/School/p1.3/BAP/MyBandV_M/views/evenementen.tpl',
      1 => 1495622306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592562a56b1ae0_40845953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">




<section>



        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
        <article>
        <h1> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1>
        <content> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>
 </content>
        </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




</section>

</content>

<?php }
}
