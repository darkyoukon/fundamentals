<?php
$columns = [
    [
        array(
            'picture' => 'nezabudka.png',
            'name' => 'Незабудка',
            'pricing' => '500'
        ),
        array(
            'picture' => 'example2.png',
            'name' => 'example2',
            'pricing' => '...'
        ),
        array(
            'picture' => 'example3.png',
            'name' => 'example3',
            'pricing' => '...'
        )
    ],
    [
        array(
            'picture' => 'example4.png',
            'name' => 'example4',
            'pricing' => '...'
        ),
        array(
            'picture' => 'example5.png',
            'name' => 'example5',
            'pricing' => '...'
        ),
        array(
            'picture' => 'example6.png',
            'name' => 'example6',
            'pricing' => '...'
        )
    ],
    [
        array(
            'picture' => 'nezabudka.png',
            'name' => 'Незабудка',
            'pricing' => '500'
        ),
        array(
            'picture' => 'example2.png',
            'name' => 'example2',
            'pricing' => '...'
        ),
        array(
            'picture' => 'example3.png',
            'name' => 'example3',
            'pricing' => '...'
        )
    ]
];
$directory = 'img';
?>
<main>
    <div id="radial"></div>
    <span id="up"></span>
    <div id="catalog">
        <a href="" id="new">
            <div id="new_icon"></div>
            <div class="text">Новинки</div>
        </a>
        <div class="vertical_line"></div>
        <a href="" id="elephants">
            <div id="elephants_icon"></div>
            <div class="text">Слонята</div>
        </a>
        <div class="vertical_line"></div>
        <a href="" id="others">
            <div id="others_icon"></div>
            <div class="text">Другие</div>
        </a>
        <div id="vertical_line_small_dpi"></div>
        <a href="" id="down_menu"></a>
    </div>
    <div id="buy_window">
        <div id="elements">
            <?php foreach ($columns as $key => $column): ?>
                <?php if($key === key(array_slice($columns, -1, 1, true))): ?>
                    <div class="buy_row">
                        <?php foreach ($column as $k => $c): ?>
                            <?php if($k === key(array_slice($column, -1, 1, true))): ?>
                                <a href="" class="piece">
                                    <?php
                                    $pic = $c['picture'];
                                    $name = $c['name'];
                                    $pricing = $c['pricing'];
                                    ?>
                                    <?php echo "<img src=$directory/$pic class=\"picture\" alt=\"$name\">"?>
                                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                                    <div class="bottom_panel">
                                        <div class="name"><?php echo $name?></div>
                                        <div class="pricing">
                                            <span><?php echo $pricing?></span>
                                            <div class="hruvnya"></div>
                                        </div>
                                    </div>
                                </a>
                            <?php else: ?>
                                <a href="" class="piece">
                                    <?php
                                    $pic = $c['picture'];
                                    $name = $c['name'];
                                    $pricing = $c['pricing'];
                                    ?>
                                    <?php echo "<img src=$directory/$pic class=\"picture\" alt=\"$name\">"?>
                                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                                    <div class="bottom_panel">
                                        <div class="name"><?php echo $name?></div>
                                        <div class="pricing">
                                            <span><?php echo $pricing?></span>
                                            <div class="hruvnya"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="vertical_line"></div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="buy_row">
                        <?php foreach ($column as $k => $c): ?>
                            <?php if($k === key(array_slice($column, -1, 1, true))): ?>
                                <a href="" class="piece">
                                    <?php
                                    $pic = $c['picture'];
                                    $name = $c['name'];
                                    $pricing = $c['pricing'];
                                    ?>
                                    <?php echo "<img src=$directory/$pic class=\"picture\" alt=\"$name\">"?>
                                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                                    <div class="bottom_panel">
                                        <div class="name"><?php echo $name?></div>
                                        <div class="pricing">
                                            <span><?php echo $pricing?></span>
                                            <div class="hruvnya"></div>
                                        </div>
                                    </div>
                                </a>
                            <?php else: ?>
                                <a href="" class="piece">
                                    <?php
                                    $pic = $c['picture'];
                                    $name = $c['name'];
                                    $pricing = $c['pricing'];
                                    ?>
                                    <?php echo "<img src=$directory/$pic class=\"picture\" alt=\"$name\">"?>
                                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                                    <div class="bottom_panel">
                                        <div class="name"><?php echo $name?></div>
                                        <div class="pricing">
                                            <span><?php echo $pricing?></span>
                                            <div class="hruvnya"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="vertical_line"></div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="horizontal">
                        <?php foreach ($column as $c): ?>
                            <div class="horizontal_line"></div>
                        <?php endforeach; ?>
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="buy_window_small_dpi">
        <div id="elements_small_dpi">
            <div id="first_row_small_dpi">
                <a href="" class="piece">
                    <img src="img/nezabudka.png" class="picture" alt="nezabudka">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">Незабудка</div>
                        <div class="pricing">
                            <span>500</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
                <div class="vertical_line"></div>
                <a href="" class="piece">
                    <img src="img/example2.png" class="picture" alt="example2">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example2</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="horizontal">
                <div class="horizontal_line"></div>
                <div class="horizontal_line"></div>
            </div>
            <div id="second_row_small_dpi">
                <a href="" class="piece">
                    <img src="img/example4.png" class="picture" alt="example4">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example4</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
                <div class="vertical_line"></div>
                <a href="" class="piece">
                    <img src="img/example5.png" class="picture" alt="example5">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example5</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="horizontal">
                <div class="horizontal_line"></div>
                <div class="horizontal_line"></div>
            </div>
            <div id="third_row_small_dpi">
                <a href="" class="piece">
                    <img src="img/nezabudka.png" class="picture" alt="nezabudka">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example7</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
                <div class="vertical_line"></div>
                <a href="" class="piece">
                    <img src="img/example2.png" class="picture" alt="example2">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example8</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="horizontal">
                <div class="horizontal_line"></div>
                <div class="horizontal_line"></div>
            </div>
            <div id="fourth_row_small_dpi">
                <a href="" class="piece">
                    <img src="img/example3.png" class="picture" alt="example3">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example3</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
                <div class="vertical_line"></div>
                <a href="" class="piece">
                    <img src="img/example6.png" class="picture" alt="example6">
                    <img src="img/buy_icon.png" class="buy_icon" alt="buy_icon">
                    <div class="bottom_panel">
                        <div class="name">example6</div>
                        <div class="pricing">
                            <span>...</span>
                            <div class="hruvnya"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>