<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card of Deck</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header class="container">
        <h1 class="text-center text-primary">A Deck of Cards</h1>
        <h5 class="text-center text-primary mt-0">Using html, CSS, JS, Bootstrap and PHP</h5>
    </header>

    <main class="container">
        <div class="h1 text-center">Flipping Action</div>
        <section class="card_out">
            <div class="my_card">
                <div class="back_card mx-auto"></div>
                <div class="front_card mx-auto">
                    <div class="card_outline rounded mx-auto card shadow">
                        <div class="face_value">
                            <p class="text-danger">2</p>
                            <img src="images/heart.svg" alt="heart">
                        </div>
                        <div class="other_section mx-auto" style="background: url('images/heart.svg');">
                        </div>
                        <div class="face_value_down">
                            <p class="text-danger">2</p>
                            <img src="images/heart.svg" alt="heart">
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <section class="d-block d-md-flex justify-content-around mb-2 mt-2">
            <!-- Normal Cards -->
            <section>
                <div class="h4 text-center">Cards A, 1...9</div>
                <div class="card_outline rounded mx-auto card shadow">
                    <div class="face_value">
                        <p class="text-danger">2</p>
                        <img src="images/heart.svg" alt="heart">
                    </div>
                    <div class="other_section mx-auto" style="background: url('images/heart.svg');">
                    </div>
                    <div class="face_value_down">
                        <p class="text-danger">2</p>
                        <img src="images/heart.svg" alt="heart">
                    </div>
                </div>
            </section>
            <!-- Special Cards -->
            <section>
                <div class="h4 text-center">Cards K, G, J, Joker</div>
                <div class="card_outline rounded sp_cards mx-auto" style="background: url('images/joker.svg');">
                    <div class="face_value">
                        <p class="text-danger joker">Joker</p>
                        <img src="images/heart.svg" alt="heart">
                    </div>
                    <div class="inner_section mx-auto">
                    </div>
                    <div class="face_value_down">
                        <p class="text-danger">K</p>
                        <img src="images/heart.svg" alt="heart">
                    </div>
                </div>
            </section>
            <!-- Flip -->
            <section>
                <div class="h4 text-center">Flip</div>
                <div class="d-flex justify-content-between">
                    <div class="card_outline back_side rounded mx-auto"></div>
                    <div class="card_outline rounded sp_cards mx-auto" style="background: url('images/joker.svg');">
                        <div class="face_value">
                            <p class="text-danger joker">Joker</p>
                            <img src="images/heart.svg" alt="heart">
                        </div>
                        <div class="inner_section mx-auto">
                        </div>
                        <div class="face_value_down">
                            <p class="text-danger">K</p>
                            <img src="images/heart.svg" alt="heart">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Back Side -->
            <section>
                <div class="h4 text-center">Back Side</div>
                <div class="card_outline back_side rounded mx-auto"></div>
                <div class="hcard mt-1 mx-auto">
                    <button><img src="images/card-back.jpg" alt="" width="80px" height="50px" id="1a" onclick="change_bg(this.val)"></button>
                    <button><img src="images/card-orange.png" alt="" width="90px" height="50px" id="2a"></button>
                    <button><img src="images/card-red.jpg" alt="" width="90px" height="50px" id="3a"></button>
                </div>
            </section>
        </section>
        <!-- Special Cards -->
        <section class="d-flex justify-content-around" style="overflow-x: auto;">
            <img src="images/jh.svg" alt="" width="100">
            <img src="images/joker.svg" alt="" width="100">
            <img src="images/joker2.svg" alt="" width="100">
            <img src="images/kc.svg" alt="" width="100">
            <img src="images/qs.svg" alt="" width="100">
        </section>
        <section class="card">
            <div class="h1 text-center">Card Playing</div>
            <!-- <div class="d-flex justify-content-start"> -->
            <div class="d-flex justify-content-between">
                <div class="card_outline back_side rounded mx-auto playing" onclick="generate();"></div>
                <section class="mx-auto" id="data_here">    
                </section>
            </div>
            <script>
                function generate() {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("data_here").innerHTML = this.responseText;
                            console.log('Ready State: ', this.readyState);
                            console.log(responseText);
                        }
                        console.log('Ready State: ', this.readyState);
                        console.log('Status code: ', this.status);
                    }
                    xmlhttp.open("GET", "generate.php");
                    xmlhttp.send;
                }
                function change_bg( i){
                    console.log(i);
                }
            </script>
        </section>
        
        <section class="shadow-lg">
            <div class="h1 text-center">All Deck Cards</div>
            <div class="d-flexj justify-content-betweeni row row-gap-2">
                <?php
                    $suites = ['spade','diamond','club','heart'];
                    $symbol = ['kc','qs','jh','joker'];
                    
                    for($i = 0; $i < count($suites); $i++){
                        if($i == 0 || $i == 2){
                            $val_color = 'dark';
                        }else{
                            $val_color = 'danger';
                        }
                        ?>
                            <div class="h3 text-center"><?= ucfirst($suites[$i])?></div>
                        <?php
                        for($j = 1; $j < 15; $j++){
                            if($j <= 9){
                                if($j == 1){
                                    $face = 'A';
                                }else{
                                    $face = $j;
                                }
                                ?>
                                <section class="col col-gap-1">
                                    <div class="card_outline rounded mx-auto card shadow">
                                        <div class="face_value">
                                            <p class="text-<?= $val_color?>"><?= $face?></p>
                                            <img src="images/<?= $suites[$i]?>.svg" alt="<?= $suites[$i]?>">
                                        </div>
                                        <div class="other_section mx-auto" style="background: url('images/<?= $suites[$i]?>.svg');">
                                        </div>
                                        <div class="face_value_down">
                                            <p class="text-<?= $val_color?>"><?= $face?></p>
                                            <img src="images/<?= $suites[$i]?>.svg" alt="<?= $suites[$i]?>">
                                        </div>
                                    </div>
                                </section>
                                <?php
                            }else{
                                // $symbol = ['kc','qs','jh','joker'];
                                if($j == 10){
                                    $face = 'J';
                                    $back = $symbol[2];
                                }else if($j == 11){
                                    $face = 'Q';
                                    $back = $symbol[1];
                                }else if($j == 12){
                                    $face = 'K';
                                    $back = $symbol[0];
                                }else if($j == 13){
                                    $face = 'Joker';
                                    $back = $symbol[3];
                                    $style = 'joker';
                                }
                                ?>
                                <section class="col mb-1">
                                    <div class="card_outline rounded sp_cards mx-auto card shadow" style="background: url('images/<?=$back?>.svg');">
                                        <div class="face_value">
                                            <p class="text-<?= $val_color?>"><?= $face?></p>
                                            <img src="images/<?= $suites[$i]?>.svg" alt="<?= $suites[$i]?>">
                                        </div>
                                        <div class="inner_section mx-auto">
                                        </div>
                                        <div class="face_value_down">
                                            <p class="text-<?= $val_color?>"><?= $face?></p>
                                            <img src="images/<?= $suites[$i]?>.svg" alt="<?= $suites[$i]?>">
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
    </main>
    <script src="js/index.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>

</html>