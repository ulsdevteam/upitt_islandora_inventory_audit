<?php print implode(" | " , $links); ?>
<h3><?php print $title; ?></h3>
  <?php print $get_from_uri; ?><hr>

  <?php if($count_rows): ?>
  <?php print number_format($count_rows); ?> record<?php print ($count_rows == 1) ? '' : 's'; ?><br>
<?php endif; ?>

<form action="<?php print $get_from_uri; ?>" method="get" id="inventory_audit_filtering" accept-charset="UTF-8">
<?php print $filter_controls; ?>
</form>

<?php print $pager; ?>
<div style="overflow-x:auto">
  <?php print $table_markup; ?>
</div>
