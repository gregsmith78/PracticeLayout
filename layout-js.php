<!DOCTYPE html>
<html>
	<head>
		<title>Justin Markup</title>

		<style>
			body, * {
				position: relative;
				margin: 0;
				padding: 0;
			}
			body {
				margin: 0px auto;
				background-color: #DDD;
			}

			#main {
				margin: 0px 10%;
				float: left;
				width: 80%;
				height: auto;
				background-color: red;
			}

			.leftcolumn {
				float: left;
				width: 60%;
				background-color: blue;
				height: auto;
			}

			.rightcolumn {
				float: left;
				width: 34%;
				background-color: yellow;
			}
			.row {
				float: left;
				padding: 20px;
				background-color: purple;
				margin-bottom: 20px;
				height: auto;
			}
			.row.imgcolumn img {
				float: left;
				margin: 0 20px 20px 0;

			}
			.row.imgcolumn p {

			}
		</style>
	</head>
	<body>

		<div id="main">
			<div class="leftcolumn">
				<div class="row imgcolumn">
					<img src="group_v.jpg" width="100px" height="100px"/><p>Etiam tristique mi velit, ut finibus sapien dictum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam in hendrerit purus. Fusce et sagittis lacus. Curabitur fringilla justo id lobortis iaculis. Sed non suscipit mauris, id malesuada erat. Morbi dictum tristique tortor, a mollis ante eleifend sit amet. Sed lobortis dolor nibh, ac sodales arcu lacinia et. Aenean varius, justo pretium malesuada tempus, odio arcu sollicitudin justo, vitae elementum lacus leo vel ex. Nullam tempus massa id metus fermentum, ut accumsan massa tincidunt. Quisque ut magna euismod, suscipit lectus eu, eleifend libero. Donec aliquet elementum magna eu commodo. Nunc gravida dapibus lacus, vel facilisis enim tristique non. Quisque accumsan sagittis sapien quis varius. Donec ullamcorper egestas elit, a efficitur felis auctor vel.</p>
				</div>
				<div class="row">
					<p>Etiam tristique mi velit, ut finibus sapien dictum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam in hendrerit purus. Fusce et sagittis lacus. Curabitur fringilla justo id lobortis iaculis. Sed non suscipit mauris, id malesuada erat. Morbi dictum tristique tortor, a mollis ante eleifend sit amet. Sed lobortis dolor nibh, ac sodales arcu lacinia et.</p>
				</div>
			</div>

			<div class="rightcolumn">
				<p>test</p>
			<div>
		</div>

	</body>
</html>