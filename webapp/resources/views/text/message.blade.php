<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
<body>
	



	<div class="ui internally celled grid">
		<div class="row">
			<div class="three wide column">
				<img>
			</div>
			<div class="ten wide column">
				<h1>Text Originale</h1>

				@foreach($messages as $value)
				<div class="ui comments">
					<h3 class="ui dividing header">ID: {{$value->id}}</h3>
					<div class="comment">
						<a class="avatar">
							<img src="https://www.google.fr/search?q=semantic+ui&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjP5J_EuovSAhUIBMAKHUzaAjsQ_AUICSgC&biw=1600&bih=786#imgrc=yCC6UcZNkLEljM:">
						</a>
						<div class="content">
							<a class="author">NAME :{{$value->name}}</a>

							<div class="text">MESSAGE :{{$value->text}}</div>

						</div>


						<form action="/supprim/{{$value->id}}" method="post">
							{{csrf_field()}}
							<button class="ui red labeled icon button">supprimer</button>
						</form>
					</div>
					<form action="/chiffrer/{{$value->id}}" method="post">
						{{csrf_field()}}
						<button class="ui blue labeled icon button">Chiffrer</button>
					</form>
				</div>
				@endforeach


			</div>
			<div class="three wide column">
				<img>
			</div>
		</div>







		<form action="comment" method="post" style="margin-top: 100px;">{{csrf_field()}}
			<button class="ui primary basic button">Ajouter un commentaire</button>
		</form>
	</body>
	</html>