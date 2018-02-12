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
      <li class="nav-item active">
        <a class="nav-link" href="/welcome">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/catalog">Catalog</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row">
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

	<div class="col-md-6">
		<div class="row">
		<span class="items">
	    <span class="hats">
        <img src="assets/img/hat.png">
        <img src="assets/img/hat2.png">
        <img src="assets/img/hat3.png">
        <img src="assets/img/hat4.png">
        <img src="assets/img/glasses.png">
        <img src="assets/img/glasses2.png">
	    </span>
			<br>
		  <span class="tops">
		    <img src="assets/img/sweater.png">
		  </span>
			<br>
			<span class="hands">
				<img src="assets/img/knife.png">
			</span>
			<br>
			<span class="shoes">
			<img src="assets/img/triples.png">
			</span>
			<br>
		</span>
		</div>
		<hr>
		<div class="row">
			<span class="items">
			{categories}
			<span class="categoryName">
			{accessories}
			<span class="{category}">
			<img style="width: 10%; height: width;" src="{accessoryImg}" alt="{accessoryName}">
			</span>
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
