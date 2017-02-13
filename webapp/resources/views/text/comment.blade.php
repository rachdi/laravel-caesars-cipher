<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">

</head>
<body>
	<div class="three column row">
		<div class="column"></div>
		<div class="column"><form action="message" method="post">
			{{csrf_field()}}

			<div class="ui center form">
				<div class="field">
					<label id="name">Name</label>
					<textarea name="name"   rows="2"></textarea>
				</div>
				<div class="field">
					<label id="text">Text</label>
					<textarea name="text"></textarea>
				</div>
				<input class="ui primary basic button" type="submit" value="Envoyer">
			</div>
		</form></div>
		<div class="column"></div>
	</div>

	

</body>
</html>