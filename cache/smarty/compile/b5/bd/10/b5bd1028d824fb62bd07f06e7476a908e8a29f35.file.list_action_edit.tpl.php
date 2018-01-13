<?php /* Smarty version Smarty-3.1.19, created on 2017-12-21 18:40:01
         compiled from "C:\xampp\htdocs\prestashop\admin1300fomgi\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16917859565a3bd5d15b79e3-14019107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bd1028d824fb62bd07f06e7476a908e8a29f35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin1300fomgi\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1504508262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16917859565a3bd5d15b79e3-14019107',
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
  'unifunc' => 'content_5a3bd5d15fa073_68689428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3bd5d15fa073_68689428')) {function content_5a3bd5d15fa073_68689428($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
