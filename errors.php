
<?php if (count ($errors)>0):?>
<div>
<?php foreach ($errors as $z):?>
<div class="alert alert-danger" role="alert">
<?php echo $z?>
</div>
<?php endforeach?>
</div>

<?php endif ?>