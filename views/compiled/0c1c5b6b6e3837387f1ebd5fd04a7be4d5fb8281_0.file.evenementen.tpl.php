<?php
/* Smarty version 3.1.30, created on 2017-06-19 15:10:28
  from "/Users/juulderooy/Desktop/School/p1.3/BAP/MyBand/views/evenementen.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5947cd44818e51_42500448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1c5b6b6e3837387f1ebd5fd04a7be4d5fb8281' => 
    array (
      0 => '/Users/juulderooy/Desktop/School/p1.3/BAP/MyBand/views/evenementen.tpl',
      1 => 1497877413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5947cd44818e51_42500448 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="opening">
        <video id="despo" autoplay loop="1" >
                <source src="images/gif.mp4"  type="video/mp4">
        </video>
</div>
<section>


        <h1>Agenda</h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>

            <div class="background">

                <article class="artikel">
                <h1> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1>
                <img src="<?php echo $_smarty_tpl->tpl_vars['one_article']->value['image'];?>
" height="200"/>
                        <br>
                <content> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>
 </content>

                </article>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




</section>






<?php }
}
