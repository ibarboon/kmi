<div class="contact_page sidebar-right">
	<section class="subpage-banner contact-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1>Contact Info</h1>
					<p>Lorem ipsum dolor sit amet resta lerna</p>
				</div>
				<div class="col-xs-4 hidden-xs">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<section class="contact-form-blog">
					<div class="row">
						<div class="section-head">
							<header class="col col-xs-12 centered">
								<section>
									<h2>Drop us an email</h2>
								</section>
								<hr>
								<p class="descriptionText">Lorem ipsum dolor sit amet resta lerna</p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<form action="#" id="dt-contact-form" role="form" class="form-inline" novalidate="novalidate">
								<div class="row">
									<div class="form-group col-xs-12 col-sm-4">
										<input type="text" required="" placeholder="full name" id="inputFullname" name="inputFullname" class="form-control">
									</div>
									<div class="form-group col-xs-12 col-sm-4">
										<input type="email" required="" placeholder="email address" id="inputEmail" name="inputEmail" class="form-control">
									</div>
									<div class="form-group col-xs-12 col-sm-4">
										<input type="text" placeholder="phone number" id="inputPhone" name="inputPhone" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-12">
										<textarea required="" placeholder="your message" id="inputMessage" name="inputMessage" rows="3" class="form-control"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-12">
										<input type="text" readonly="readonly" value="" name="num1" class="sum form-control" id="num1">
										+
										<input type="text" readonly="readonly" value="" name="num2" class="sum form-control" id="num2">
										=
										<input type="text" maxlength="2" name="captcha" class="captcha form-control" id="captcha">
										<span>(Are you human, or spambot?)</span>
									</div>
								</div>
								<div class="row">
									<div class="dt-form-info col-sm-6">
										<p>we will respond your message in 24 hours of working day</p>
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<button class="btn-send" type="submit">Send Message</button>	
										<div class="success"><div class="icon-ok-5">Email sent !</div></div>
										<div class="fail"><div class="icon-attention">Failed to send Email !</div></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
			<div class="col-sm-4 sidebar">
				<div class="widget">
					<?php if ($current_lang === 'th') { ?>
					<h3>ติดต่อเรา</h3>
					<address>
						<strong>ห้างหุ้นส่วนจำกัด คุณากร แมชินเนอรี่ อินเตอร์เนชั่นแนล</strong><br>
						200/215 หมู่บ้านมัณฑนา2 ถนนร่วมมิตรพัฒนา<br>
						แขวงท่าแร้ง เขตบางเขน<br>
						กรุงเทพมหานคร 10220<br>
						โทรศัพท์ : 085-0488889, 089-8685626 และ 02-3634589<br>
						แฟกซ์ : 02-3634588<br>
						อีเมล์ : sale1@kmi.co.th, kmi-oversea@kmi.co.th
					</address>
					<?php } elseif ($current_lang === 'en') { ?>
					<h3>Contact Us</h3>
					<address>
						<strong>Kunakorn Machinery International Limited Partnership</strong><br>
						200/215, Muntana2 Village, Ruammitpattana Road<br>
						Thareang Sub-District, Bangkhen District<br>
						Bangkok 10220<br>
						Phone : 085-0488889, 089-8685626 และ 02-3634589<br>
						Fax : 02-3634588<br>
						Email : sale1@kmi.co.th, kmi-oversea@kmi.co.th
					</address>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>