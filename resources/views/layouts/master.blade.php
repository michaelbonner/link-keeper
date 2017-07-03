<html>
	<head>
		<title>@yield('title') | Link Keeper</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style media="screen">
			.hidden-delete {
				display: none;
			}
		</style>
	</head>
	<body>
		<div class="section">
			<div class="container">
				@yield('content')

				<hr>

				<p class="footer-buttons">
					<a href="/object" class="button"><i class="fa fa-home" aria-hidden="true"></i> All Objects</a>
					<a href="/tag" class="button"><i class="fa fa-tags" aria-hidden="true"></i> All Tags</a>
					<a href="/object/create" class="button"><i class="fa fa-plus" aria-hidden="true"></i> New Object</a>
					<a href="/link/create" class="button"><i class="fa fa-plus" aria-hidden="true"></i> New Link</a>
					<a href="/tag/create" class="button"><i class="fa fa-tag" aria-hidden="true"></i> New Tag</a>
				</p>

			</div>
		</div>

		<script
			src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous"></script>
		<script>
			$(function(){
				$('.hidden-delete-toggle').click(function(e){
					e.preventDefault();
					$('.hidden-delete-toggle, .hidden-delete').toggle();
				});
			});
		</script>
	</body>
</html>
