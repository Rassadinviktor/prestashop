<?php /* Smarty version Smarty-3.1.19, created on 2017-12-21 18:40:01
         compiled from "C:\xampp\htdocs\prestashop\admin1300fomgi\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17162146455a3bd5d165bb06-83713560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd43b006bf1a42d8adc1dc577804ffa0a3bf4cd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin1300fomgi\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1504508262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17162146455a3bd5d165bb06-83713560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a3bd5d168e793_93942632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3bd5d168e793_93942632')) {function content_5a3bd5d168e793_93942632($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
