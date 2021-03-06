<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>webPLE</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

	<style>
		body {
			margin: 0;
			font-family: 'Kanit', sans-serif;
		}

		.navbar {
			overflow: hidden;
			background-color: #2e2b37;
			position: fixed;
			top: 0;
			width: 100%;
		}

		.navbar a {
			float: right;
			display: block;
			color: whitesmoke;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background: lightcyan;
			color: black;
		}

		.navbar a.active {
			background-color: #e37b7c;
			color: white;
		}

		.navbar i {
			float: left;
			margin: 15px;
			font-size: 23px;

		}
	</style>
</head>


<body class="is-preload">

	<div class="navbar">
		<a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
		<a href="#result">Test results</a>
		<a href="#test">Personality test</a>
		<a href="#home" class="active">Home</a>
		<i class="fa fa-user-circle">&nbsp;&nbsp;{{Auth::user()->name}}</i>
	</div>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<section class="panel spotlight medium right">
				<div class="content span-10">
					<h1 class="major">What is&nbsp;&nbsp; M B T I &nbsp;&nbsp;?</h1>
					<p>MBTI คือ ตัวชี้วัดรูปแบบบุคลิกภาพที่ติดตัวมาแต่กำเนิด โดย Myers และ Briggs พัฒนาจากทฤษฎี "Personality Type" จากนักจิตวิทยา ชาวสวิตเซอร์แลนด์ Carl G. Jung (1875-1961) ซึ่งเชื่อว่ามนุษย์แต่ละคนไม่ได้แตกต่างกันอย่าง สะเปสะปะแต่มีรูปแบบของพฤติกรรมที่แสดงว่าเราเป็น Type ใด สอดคล้องกับถ้อยคำของนักมานุษยวิทยา Clyde Kluckhohn ที่กล่าวไว้ว่า
					<blockquote>“มนุษย์ทุกคนนั้นคล้ายคลึงกับมนุษย์คนอื่น ๆ เหมือนกับมนุษย์บางคน แต่ก็ไม่เหมือนมนุษย์คนใดเลย”</blockquote>
					</p>
					<ul class="actions">
						<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="image filtered tinted" data-position="top left">
					<img src="images/pic02.jpg" alt="" />
				</div>
			</section>

			<section class="panel banner right" id="first">
				<div class="content color0 span-5">
					<h1 class="major">What is the&nbsp;&nbsp; M B T I &nbsp;&nbsp;for ?</h1>
					<p>
					<blockquote>"EQ มีความสำคัญมากเป็น 2 เท่าของ IQ"</blockquote>
					MBTI คือเครื่องมือในการนำมาพัฒนา Emotional Intelligence หรือความฉลาดทางอารมณ์
					โดยเน้นสร้างความเข้าใจพื้นฐานเกี่ยวกับการตระหนักรู้ในตัวเองและการเข้าใจผู้อื่น
					ซึ่งจะเป็นแผนที่ที่นำไปสู่ความสามารถในการบริหารจัดการตัวเองและพัฒนาตัวเอง
					รวมไปถึงการพัฒนาทักษะในการเข้าสังคมที่ดีด้วย</p>
					<ul class="actions">
						<li><a href="#secound" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
			</section>

			<!-- Panel -->
			<section class="panel color1-alt" id="secound">
				<div class="intro color4">
					<h2 class="major">What is the MBTI measure ?</h2>
					<p>MBTI เป็น Type Indicator ดังนั้นสิ่งที่ MBTI จะวัดก็คือ รูปแบบบุคลิกภาพ (Personality) ที่ติดตัวมาแต่กำเนิด ผ่านการหาความพึงใจ (Preference)<br> 4 ตัวจาก 8 ตัว ซึ่งเป็นสิ่งที่เราถนัดเป็นธรรมชาติมากกว่า </p>
					<br>

					<div class="actions">
						<div class="align-left">

							
							<a href="Test" class="button primary color1 circle icon solid fa-angle-right"></a><h3>ทำแบบทดสอบ</h3>

						</div>
					</div>
				</div>
				<div class="inner columns divided">
					<ul class="content span-2-75">
						<li><strong>E | I</strong>Extraversion | Introvertsion:<br>
							ช่วยเรื่องการสื่อสาร การสร้างความไว้วางใจ และการดูแลพลังงานของตัวเอง</li><br>
						<li><strong>S | N</strong>Sensing | iNtuition:<br>
							ช่วยเรื่องการเข้าใจเรื่องการให้คุณค่าข้อมูลและการมองภาพที่แตกต่าง การใช้ภาษา (การสื่อสาร) และโฟกัสในTimeline ของแต่ละคน </li><br>
						<li><strong>T | F</strong>Thinking | Feeling:<br>
							ช่วยเรื่องการสร้างบรรยากาศในที่ทำงาน การได้รับ Feedback การให้ค่าของเหตุผล</li><br>
						<li><strong>J | P</strong>Judging-Perceiving:<br>
							ช่วยเรื่องการบริหารจัดการการทำงาน การเข้าใจมุมมองที่มีต่อการปรับตัวเข้าหาโลกภายนอกและทัศนคติที่ต่างกัน</li>
					</ul>
					<div class="content span-2-75">
						<img src="images/16.png" alt="" />
					</div>
				</div>
			</section>

			<!-- <section class="panel color1" id="secound">
				<div class="intro joined">
					<h2 class="major">What is the MBTI measure ?</h2>
					<p>MBTI เป็น Type Indicator ดังนั้นสิ่งที่ MBTI จะวัดก็คือ รูปแบบบุคลิกภาพ (Personality) ที่ติดตัวมาแต่กำเนิด ผ่านการหาความพึงใจ (Preference)<br> 4 ตัวจาก 8 ตัว ซึ่งเป็นสิ่งที่เราถนัดเป็นธรรมชาติมากกว่า </p>
					<ul class="actions">
						<li><a href="#third" class="button primary color1 circle icon solid fa-angle-right">Take the test</a></li>
					</ul>
				</div>
				<div class="inner">
					<ul class="content span-3">
						<li>E | I
							Extraversion | Introvertsion:
							ช่วยเรื่องการสื่อสาร การสร้างความไว้วางใจ และการดูแลพลังงานของตัวเอง</li>
						<li>S | N
							Sensing | iNtuition:
							ช่วยเรื่องการเข้าใจเรื่องการให้คุณค่าข้อมูลและการมองภาพที่แตกต่าง การใช้ภาษา (การสื่อสาร) และโฟกัสในTimeline ของแต่ละคน </li>
						<li>T | F
							Thinking | Feeling:
							ช่วยเรื่องการสร้างบรรยากาศในที่ทำงาน การได้รับ Feedback การให้ค่าของเหตุผล</li>
						<li>J | P
							Judging-Perceiving:
							ช่วยเรื่องการบริหารจัดการการทำงาน การเข้าใจมุมมองที่มีต่อการปรับตัวเข้าหาโลกภายนอกและทัศนคติที่ต่างกัน</li>
					</ul>
				</div>
			</section> -->

			<!-- Panel (Spotlight) -->
			<!-- <section class="panel spotlight large left" id="thrid">
				
				<div class="content span-5">
					<input type="radio" id="control_01" name="select" value="1">
					<label for="control_01">
						<h2>Pfft</h2>
						<p>Awww, poor baby. Too afraid of the scary game sprites? I laugh at you.</p>
						<img src="images/signup-image.jpg" alt="" />
					</label>
				</div>
				<div class="content span-5">
					<input type="radio" id="control_02" name="select" value="2">
					<label for="control_02">
						<h2>Wannabe</h2>
						<p>You're not a gaming God by any stretch of the imagination.</p>
						<img src="images/signup-image.jpg" alt="" />
					</label>
				</div>
		</div>
		</section> -->

			<!-- Panel -->
			<section class="panel">
				<div class="intro color2">
					<h2 class="major">Elit integer</h2>
					<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
				</div>
				<div class="gallery">
					<div class="group span-3">
						<a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
						<a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
						<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
					</div>
					<a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
					<div class="group span-4-5">
						<a href="images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/05.jpg" alt="" /></a>
						<a href="images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/06.jpg" alt="" /></a>
						<a href="images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/07.jpg" alt="" /></a>
						<a href="images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
					</div>
					<a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
				</div>
			</section>

			<!-- Panel -->
			<section class="panel color4-alt">
				<div class="intro color4">
					<h2 class="major">Contact</h2>
					<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
				</div>
				<div class="inner columns divided">
					<div class="span-3-25">
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field half">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="4"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send Message" class="button primary" /></li>
							</ul>
						</form>
					</div>
					<div class="span-1-5">
						<ul class="contact-icons color1">
							<li class="icon brands fa-twitter"><a href="#">@untitled-tld</a></li>
							<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled</a></li>
							<li class="icon brands fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
							<li class="icon brands fa-instagram"><a href="#">@untitled-tld</a></li>
							<li class="icon brands fa-medium-m"><a href="#">medium.com/untitled</a></li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Panel -->
			<section class="panel color2-alt">
				<div class="intro color2">
					<h2 class="major">Elements</h2>
					<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam. </p>
				</div>
				<div class="inner columns aligned">
					<div class="span-2-75">

						<h3 class="major">Text</h3>
						<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

						<h1>Heading Level 1</h1>
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>

					</div>
					<div class="span-3">

						<h4>Blockquote</h4>
						<blockquote>Lorem ipsum dolor sit amet. Felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in vestibulum. Blandit adipiscing eu iaculis volutpat ac adipiscing volutpat ac adipiscing faucibus.</blockquote>

						<h4>Preformatted</h4>
						<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>

					</div>
					<div class="span-1-25">

						<h3 class="major">Lists</h3>

						<h4>Unordered</h4>
						<ul>
							<li>Lorem ipsum dolor sit.</li>
							<li>Dolor pulvinar etiam.</li>
							<li>Etiam vel felis viverra.</li>
						</ul>

						<h4>Alternate</h4>
						<ul class="alt">
							<li>Lorem ipsum dolor sit.</li>
							<li>Dolor pulvinar etiam.</li>
							<li>Etiam vel felis viverra.</li>
							<li>Felis enim feugiat.</li>
						</ul>

					</div>
					<div class="span-1-5">

						<h4>Ordered</h4>
						<ol>
							<li>Lorem ipsum dolor sit.</li>
							<li>Dolor pulvinar etiam.</li>
							<li>Etiam vel felis viverra.</li>
							<li>Felis enim feugiat.</li>
							<li>Etiam vel felis lorem.</li>
						</ol>

						<h4>Actions</h4>
						<ul class="actions">
							<li><a href="#" class="button primary color2">Default</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary color2">Default</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>

					</div>
					<div class="span-1-25">

						<h4>Icons</h4>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
						</ul>

						<h4>Contact Icons</h4>
						<ul class="contact-icons color2">
							<li class="icon brands fa-twitter"><a href="#">Twitter</a></li>
							<li class="icon brands fa-facebook-f"><a href="#">Facebook</a></li>
							<li class="icon brands fa-instagram"><a href="#">Instagram</a></li>
							<li class="icon brands fa-github"><a href="#">GitHub</a></li>
							<li class="icon brands fa-medium-m"><a href="#">Medium</a></li>
						</ul>

					</div>
					<div class="span-3">
						<h3 class="major">Table</h3>
						<h4>Default</h4>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="span-3">
						<h4>Alternate</h4>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="span-2-25">
						<h3 class="major">Buttons</h3>
						<ul class="actions">
							<li><a href="#" class="button primary color2">Primary</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button large">Large</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button primary color2 icon solid fa-cog">Icon</a></li>
							<li><a href="#" class="button icon fa-gem">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button primary color2 disabled">Disabled</span></li>
							<li><span class="button disabled">Disabled</span></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button primary color2 circle icon solid fa-cog">Icon</a></li>
							<li><a href="#" class="button circle icon fa-gem">Icon</a></li>
						</ul>
					</div>
					<div class="span-4-5">
						<h3 class="major">Form</h3>
						<form method="post" action="#">
							<div class="fields">
								<div class="field third">
									<label for="demo-name">Name</label>
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
								</div>
								<div class="field third">
									<label for="demo-email">Email</label>
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
								</div>
								<div class="field third">
									<label for="demo-category">Category</label>
									<div class="select-wrapper">
										<select name="demo-category" id="demo-category">
											<option value="">-</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
								</div>
								<div class="field quarter">
									<input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked />
									<label for="demo-priority-low">Low Priority</label>
								</div>
								<div class="field quarter">
									<input type="radio" id="demo-priority-high" name="demo-priority" class="color2" />
									<label for="demo-priority-high">High Priority</label>
								</div>
								<div class="field quarter">
									<input type="checkbox" id="demo-copy" name="demo-copy" class="color2" />
									<label for="demo-copy">Email a copy</label>
								</div>
								<div class="field quarter">
									<input type="checkbox" id="demo-human" name="demo-human" class="color2" checked />
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="field">
									<label for="demo-message">Message</label>
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send Message" class="primary color2" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>

			<!-- Copyright -->
			<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>