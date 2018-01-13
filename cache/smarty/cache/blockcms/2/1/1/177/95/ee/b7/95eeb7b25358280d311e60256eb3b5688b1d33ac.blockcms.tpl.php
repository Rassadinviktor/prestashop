<?php /*%%SmartyHeaderCode:12963775755a391641a31e25-82544280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95eeb7b25358280d311e60256eb3b5688b1d33ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1504508262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12963775755a391641a31e25-82544280',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a577e63a57cf9_40078681',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a577e63a57cf9_40078681')) {function content_5a577e63a57cf9_40078681($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Информация</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost/prestashop/prices-drop" title="Скидки">
						Скидки
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/new-products" title="Новые товары">
					Новые товары
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/prestashop/best-sales" title="Лидеры продаж">
						Лидеры продаж
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/prestashop/stores" title="Наш магазин">
						Наш магазин
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop/contact-us" title="Связаться с нами">
					Связаться с нами
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/prestashop/content/3-terms-and-conditions-of-use" title="Порядок и условия использования">
							Порядок и условия использования
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/prestashop/content/4-about-us" title="О компании">
							О компании
						</a>
					</li>
													<li>
				<a href="http://localhost/prestashop/sitemap" title="Карта сайта">
					Карта сайта
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
