<?php ?>

<html>
<head>
	<title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="containter">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h2>Administrator Login</h2>
      		<form action ="/admin/authenticate/" method="post">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name ="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <input type="hidden" name="login" value="authenticate">
        </form>
      </div>
    </div>
  </div>
</body>
</html>