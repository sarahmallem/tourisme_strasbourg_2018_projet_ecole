<?php

// Convert FA Icons to a processed version for release on MaxButtons
$icons_processed = file_get_contents('icons_processed.json');

echo "<PRE>";

//print_R( json_decode($icons_processed));

echo "</PRE>";

$icons = file_get_contents('icons.json');

$icons = json_decode($icons);
$i =0;

foreach($icons as $icon_name => $icon)
{
    unset($icon->changes);
    unset($icon->ligatures);
    unset($icon->search);
    unset($icon->unicode);
    //unset($icon->label);
    unset($icon->voted);
    unset($icon->free);

    $styles = $icon->styles;

    foreach($styles as $style)
    {
      unset($icon->svg->$style->raw);
      unset($icon->svg->$style->last_modified);

    }
    $i++;
}

echo "<PRE>";

print_r($i);

echo "</PRE>";
