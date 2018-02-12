<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.css">
<link rel="stylesheet" type="text/css" href="assets/css/dragula.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/welcome">Yipper</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="/welcome">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/catalog">Catalog</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row">
	<!--Boxes that hold accessories-->
	<div class="col-md-6">
		<span class="player">
		<span class="head"></span>
		<span class="upper"></span>
	    <span class="leftHand"></span>
		<span class="rightHand"></span>
		<span class="leftFoot"></span>
		<span class="rightFoot"></span>
		  <img src="assets/img/man2.png">
		</span>
	</div>
    <!--Accessories-->
	<div class="col-md-6">
		<div class="row">
			<span class="items">
			{categories}
			<span class="{categoryName}">
			{accessories}
			<img src="{accessoryImg}" alt="{accessoryName}">
			{/accessories}
			</span>
			<br>
			{/categories}
			</span>
		</div>
	</div>
</div>
</div>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="assets/scripts/script.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
