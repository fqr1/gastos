<html>
<head></head>
<body>
<p>
Expense View

{{-- https://laravelcollective.com/docs/5.3/html --}}
<form>
<?php
echo Form::open(['url' => 'foo/bar', 'method' => 'put']);
echo Form::label('email', 'E-Mail Address');
echo Form::text('username');

echo Form::close();
?>
</form>
</P>
</body>
</html>
