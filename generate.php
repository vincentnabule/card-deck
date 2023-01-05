<?php
// BLACK JACK
// 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15
// A 2 3 4 5 6 7 8 9 10  J  Q K 

$suite = rand(0, 3);
$suites = ['spade', 'diamond', 'club', 'heart'];
$suite_color = $suite == 1 || $suite == 3 ? 'danger' : 'dark';

$val = rand(1, 13);
if ($val <= 10) {
    if ($val == 1) {
        $face = 'A';
    } else {
        $face = $val;
    }
    $bg = "'images/$suites[$suite].svg'";
    echo '<div class="card_outline rounded mx-auto card shadow">';
    echo '<div class="face_value"><p class="text-' . $suite_color . '">' . $face . '</p><img src="images/' . $suites[$suite] . '.svg" alt="' . $suites[$suite] . '"></div>';
    echo '<div class="other_section mx-auto" style="background: url(' . $bg . ');"></div>';
    echo '<div class="face_value_down"><p class="text-' . $suite_color . '">' . $face . '</p><img src="images/' . $suites[$suite] . '.svg" alt="' . $suites[$suite] . '"></div>';
    echo '</div>';
} else {
    $symbol = ['kc', 'qs', 'jh'];
    if ($val == 11) {
        $face = 'J';
        $back = $symbol[2];
    } elseif ($val == 12) {
        $face = 'Q';
        $back = $symbol[1];
    } elseif ($val == 13) {
        $face = 'K';
        $back = $symbol[0];
    }
    $bg = "'images/$back.svg'";
    echo '<div class="card_outline rounded sp_cards mx-auto card shadow" style="background: url(' . $bg . ');">';
    echo '<div class="face_value"><p class="text-' . $suite_color . '">' . $face . '</p><img src="images/' . $suites[$suite] . '.svg" alt="' . $suites[$suite] . '"></div>';
    echo '<div class="inner_section mx-auto">';
    echo '<div class="face_value_down"><p class="text-' . $suite_color . '">' . $face . '</p><img src="images/' . $suites[$suite] . '.svg" alt="' . $suites[$suite] . '"></div>';
    echo '</div>';
}

?>