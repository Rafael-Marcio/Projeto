<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Nota Fiscal</title>
</head>

<body>
  <div class="row">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a id="reme" name="reme" href="#test1">Test 1</a></li>
          <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
          <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
          <li class="tab col s3"><a href="#test4">Test 4</a></li>
        </ul>
      </div>
      <div id="test1" style=<a class="mensagem"></a> class="col s12">Test 1</div>
      <div id="test2" style="display: none;" class="col s12">Test 2</div>
      <div id="test3" style="display: none;" class="col s12">Test 3</div>
      <div id="test4" style="display: none;" class="col s12">Test 4</div>
    </div>
  </div>
</body>
<script type="text/javascript">
  $("#reme").click(function () {
    event.preventDefault();
    
    });
</script>

</html>