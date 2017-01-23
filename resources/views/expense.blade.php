<html>
<head></head>
<body>
<p>
Expense View

{{-- https://laravelcollective.com/docs/5.3/html --}}
{{--
$table->increments('id');
$table->string('id_user');
$table->string('name');
$table->string('description');
$table->float('total');
$table->date('start_to_pay');
$table->integer('months_to_pay');
$table->date('purchase_date');
 --}}
<?php
echo Form::open(['url' => 'foo/bar', 'method' => 'put']);

echo Form::label('name', Lang::get('expense.name'));
echo Form::text('name');
echo '<br><br>';
echo Form::label('description', Lang::get('expense.description'));
echo Form::text('description');
echo '<br><br>';
echo Form::label('total', Lang::get('expense.total'));
echo Form::text('total');
echo '<br><br>';
echo Form::label('start_to_pay', Lang::get('expense.start_to_pay'));
echo Form::text('start_to_pay');
echo '<br><br>';
echo Form::label('months_to_pay', Lang::get('expense.months_to_pay'));
echo Form::text('months_to_pay');
echo '<br><br>';
echo Form::label('purchase_date', Lang::get('expense.purchase_date'));
echo Form::text('purchase_date');

echo Form::close();
?>

</P>
</body>
</html>
