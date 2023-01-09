<section class="shadow-lg">
            <div class="h1 text-center">All Deck Cards</div>
            <div class="d-flexj justify-content-betweeni row row-gap-3">
                <?php
                    $suites = ['spade', 'diamond', 'club', 'heart'];
                    $symbol = ['kc', 'qs', 'jh'];

                    for ($i = 0; $i < count($suites); $i++) {
                        if ($i == 0 || $i == 2) {
                            $val_color = 'dark';
                        } else {
                            $val_color = 'danger';
                        }
                        ?>
                            <div class="h3 text-center"><?= ucfirst($suites[$i]) ?></div>
                        <?php
                        for ($j = 1; $j < 14; $j++) {
                            if ($j <= 10) {
                                if ($j == 1) {
                                    $face = 'A';
                                } else {
                                    $face = $j;
                                }
                                ?>
                                    <section class="col col-gap-2">
                                        <div class="card_outline rounded mx-auto card shadow">
                                            <div class="face_value">
                                                <p class="text-<?= $val_color ?>"><?= $face ?></p>
                                                <img src="images/<?= $suites[$i] ?>.svg" alt="<?= $suites[$i] ?>">
                                            </div>
                                            <div class="other_section mx-auto" style="background: url('images/<?= $suites[$i] ?>.svg');">
                                            </div>
                                            <div class="face_value_down">
                                                <p class="text-<?= $val_color ?>"><?= $face ?></p>
                                                <img src="images/<?= $suites[$i] ?>.svg" alt="<?= $suites[$i] ?>">
                                            </div>
                                        </div>
                                    </section>
                                <?php
                            } 
                            else {
                                // $symbol = ['kc','qs','jh','joker'];
                                if ($j == 11) {
                                    $face = 'J';
                                    $back = $symbol[2];
                                } else if ($j == 12) {
                                    $face = 'Q';
                                    $back = $symbol[1];
                                } else if ($j == 13) {
                                    $face = 'K';
                                    $back = $symbol[0];
                                }
                                ?>
                                    <section class="col mb-1">
                                        <div class="card_outline rounded sp_cards mx-auto card shadow" style="background: url('images/<?= $back ?>.svg');">
                                            <div class="face_value">
                                                <p class="text-<?= $val_color ?>"><?= $face ?></p>
                                                <img src="images/<?= $suites[$i] ?>.svg" alt="<?= $suites[$i] ?>">
                                            </div>
                                            <div class="inner_section mx-auto">
                                            </div>
                                            <div class="face_value_down">
                                                <p class="text-<?= $val_color ?>"><?= $face ?></p>
                                                <img src="images/<?= $suites[$i] ?>.svg" alt="<?= $suites[$i] ?>">
                                            </div>
                                        </div>
                                    </section>
                                <?php
                            }
                        }
                    }
                ?>
            </div>
        </section>