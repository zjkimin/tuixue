<?php 
	header("Status: 404 LaoBa Ated")
?>
<html>

<head>
	<title>HTTP 404 FILE NOT FOUND</title>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<style type="text/css">
		* {
			transition-duration: 0.5s;
		}

		body {
			background: #252525;
			font-family: sans-serif;
			overflow: hidden;
		}

		.misaka {
			/*position: absolute;
				right: 5%;
				bottom: 0px;*/
			height: 100vh;
			z-index: 99999;
		}

		.misaka-block {
			vertical-align: bottom;
		}

		.pcblock .bgcolor {
			width: 100%;
			height: 70%;
			position: fixed;
			top: 15%;
			left: 0px;
			background: linear-gradient(to right, #363636, #303030);
			box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.75);
		}

		.pcblock .bgcontainer {
			padding-left: 5%;
			padding-right: 5%;
			color: #FFF;
			font-size: 16px;
			position: absolute;
			width: 100%;
			height: 100%;
		}

		.pcblock .bgcontainer tr,
		.pcblock .bgcontainer td {
			height: 100%;
		}

		.pcblock .bgcontainer h1 {
			color: #FFF;
			font-weight: 100;
			font-size: 50px;
			margin-block-start: 0px;
			margin-block-end: 0px;
		}

		.pcblock .bgcontainer h3 {
			color: #CCC;
			font-weight: 100;
			font-size: 25px;
			margin-block-start: 0px;
		}

		.pcblock .bgcontainer ul li {
			line-height: 20px;
		}

		a {
			color: rgb(201, 162, 61);
			text-decoration: none;
		}

		a:hover {
			color: rgb(253, 249, 123);
			text-decoration: underline;
		}

		@media screen and (max-height: 768px) {
			.pcblock .bgcolor {
				height: 100%;
				top: 0px;
			}

			body {
				overflow-y: auto;
			}
		}

		@media screen and (max-width: 1400px) {
			.pcblock .bgcolor {
				height: 100%;
				top: 0px;
			}

			.misaka {
				height: 80vh;
			}
		}

		@media screen and (max-width: 1100px) {
			.misaka {
				height: 60vh;
			}
		}

		@media screen and (max-width: 1000px) {
			.misaka {
				display: none;
			}
		}

		div {
			width: 100px;
			height: 75px;
			background-color: red;
			border: 1px solid black;
		}

		div#gg {
			transform: rotate(30deg);
			-ms-transform: rotate(30deg);
			/* IE 9 */
			-moz-transform: rotate(30deg);
			/* Firefox */
			-webkit-transform: rotate(10deg);
			/* Safari and Chrome */
			-o-transform: rotate(30deg);
			/* Opera */
		}
	</style>
</head>

<body>
	<div class="pcblock">
		<div class="bgcolor"></div>
		<table class="bgcontainer">
			<tr>
				<td>

					<h1>HTTP 404 FILE NOT FOUND</h1>
					<h3>好像你进入了某些本不该存在在这个世界的地址</h3>
					<h3>この世界に存在してはならない住所を入力したようです</h3>
					<p>
					<ul>
						<li>为了保守秘密，我们显示了此页面。<p>秘密を守るために、このページを表示しました。</p>
						</li>
						<li>你的身份已经被记录，请记住你的id:<?php $rand=mt_rand (10000000,999999999); echo $rand; ?><p>あなたの身元が記録されています。あなたのIDを覚えておいてください：<?php echo $rand; ?></p>
						</li>
						<li>谢谢您的合作。<p>ご協力ありがとうございます。</p>
						</li>
					</ul>
					</p>
				</td>
				<td class='misaka-block'>
					<img src="/error/banner.png" class="misaka" title="PIXIV ID:61775982" alt="PIXIV ID:61775982"/>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>