
<?php
/**
 * At a Glance Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */


$missile_short_name = get_field('missile_name');


?>

<div class="ataglance">
  <h1>At a glance:</h1>

  <?php
  $specs = get_lzb_meta('missile-specs');

  foreach( $specs as $spec ) {
    $spec_name = $spec['spec'];
    $spec_value = $spec['value']; ?>

    <p><strong><?php echo $spec_name; ?></strong><br><?php echo $spec_value; ?></p>
  <?php } ?>

</div>