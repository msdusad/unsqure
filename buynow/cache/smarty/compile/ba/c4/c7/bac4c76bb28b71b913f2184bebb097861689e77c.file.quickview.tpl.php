<?php /* Smarty version Smarty-3.1.19, created on 2015-12-11 04:42:01
         compiled from "/home/easy2/public_html/buynow/admin/themes/default/template/controllers/modules/quickview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416088421566a5419433e80-88612269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac4c76bb28b71b913f2184bebb097861689e77c' => 
    array (
      0 => '/home/easy2/public_html/buynow/admin/themes/default/template/controllers/modules/quickview.tpl',
      1 => 1448586598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416088421566a5419433e80-88612269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'displayName' => 0,
    'badges' => 0,
    'badge' => 0,
    '_badge' => 0,
    'nb_rates' => 0,
    'avg_rate' => 0,
    'price' => 0,
    'id_currency' => 0,
    'description_full' => 0,
    'additional_description' => 0,
    'is_addons_partner' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_566a54194ae104_69739176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a54194ae104_69739176')) {function content_566a54194ae104_69739176($_smarty_tpl) {?>
<div class="bootstrap">
	<div class="col-lg-2">
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
" class="img-thumbnail" />
		<?php if (isset($_smarty_tpl->tpl_vars['badges']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['badge']->key => $_smarty_tpl->tpl_vars['badge']->value) {
$_smarty_tpl->tpl_vars['badge']->_loop = true;
?>
				<?php if (is_array($_smarty_tpl->tpl_vars['badge']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['_badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['badge']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_badge']->key => $_smarty_tpl->tpl_vars['_badge']->value) {
$_smarty_tpl->tpl_vars['_badge']->_loop = true;
?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['_badge']->value;?>
" alt="" class="clearfix quickview-badge" />
					<?php } ?>
				<?php } else { ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value;?>
" alt="" class="clearfix quickview-badge" />
				<?php }?>
			<?php } ?>
		<?php }?>
	</div>
	<div class="col-lg-10">
		<h1><?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
</h1>
		<div class="row">
			<div class="col-sm-6">
				<?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value>0) {?>
				<span class="rating">
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==5) {?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==4) {?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==3) {?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==2) {?> active<?php }?>"></span>
					<span class="star<?php if ($_smarty_tpl->tpl_vars['avg_rate']->value==1) {?> active<?php }?>"></span>
				</span>
				<p class="small"><?php if ((int)$_smarty_tpl->tpl_vars['nb_rates']->value>1) {?><?php echo smartyTranslate(array('s'=>"(%s votes)",'sprintf'=>$_smarty_tpl->tpl_vars['nb_rates']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>"(%s vote)",'sprintf'=>$_smarty_tpl->tpl_vars['nb_rates']->value),$_smarty_tpl);?>
<?php }?></p>
			<?php }?>
			</div>
			<div class="col-sm-6">
				<?php if ((int)$_smarty_tpl->tpl_vars['price']->value) {?>
					<div class="quickview-price">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['price']->value,'currency'=>$_smarty_tpl->tpl_vars['id_currency']->value),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		</div>
		<hr />
		<h3><?php echo smartyTranslate(array('s'=>"Description"),$_smarty_tpl);?>
</h3>
		<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['description_full']->value;?>
</p>
		<?php if (isset($_smarty_tpl->tpl_vars['additional_description']->value)&&trim($_smarty_tpl->tpl_vars['additional_description']->value)!='') {?>
			<hr />
			<h3><?php echo smartyTranslate(array('s'=>"Merchant benefits"),$_smarty_tpl);?>
</h3>
			<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['additional_description']->value;?>
</p>
		<?php }?>
		<hr />
		<?php if ($_smarty_tpl->tpl_vars['is_addons_partner']->value) {?>
			<a class="btn btn-success btn-lg pull-right" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo smartyTranslate(array('s'=>'Install module'),$_smarty_tpl);?>
</a>
		<?php } else { ?>
			<a class="btn btn-success btn-lg pull-right" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" onclick="return !window.open(this.href);"><?php echo smartyTranslate(array('s'=>'View on PrestaShop Addons'),$_smarty_tpl);?>
</a>
		<?php }?>
	</div>
</div><?php }} ?>
