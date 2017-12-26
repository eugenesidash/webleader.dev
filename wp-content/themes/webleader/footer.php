<!-- START "Form (footer)" -->
	<a name="order"></a>
	<div class="footer_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1"></div>
				<div class="col-lg-5 col-md-5 col-sm-5">
					<div class="img_footer_form">
						<div class="header_block_text">
							<h2>Понравилось? Значит,<br>Самое время заказать<br><span>Landing page</span></h2>
							<p>Хотите узнать больше или расширить<br>возможности лендинга? Свяжитесь с нами!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5">
					<form action="<?php bloginfo('template_directory') ?>/form_send.php" method="POST">
						<p>Ваше имя</p>
						<input name="webna" type="text" required>
						<p>Ваш номер</p>
						<input name="webph" type="text" required>
						<div class="butt">
							<button class="yellow_butt" type="submit">Заказать <span>landing page</span></button>
						</div>
					</form>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1"></div>
			</div>
		</div>
	</div>
	<!-- END "Form (footer)" -->
	<!-- START "Footer" -->
	<div class="footer bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="logo_footer">
						<a href="/"><img src="<?php bloginfo('template_directory') ?>/img/logo_footer.png" alt="Webleader"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="phone phone_footer">
						<a href="tel:+79260120000"><img src="<?php bloginfo('template_directory') ?>/img/phone.png" alt="Webleader - Phone">+7 (926) 012 00 00</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END "Footer" -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
<?php wp_footer(); ?>