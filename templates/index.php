<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <!--заполните этот список из массива категорий-->

        <?php foreach ($cat as $key => $value): ?>
            <li class="promo__item promo__item--<?=htmlspecialchars($value["code"]);?>">                
                <a class="promo__link" href="pages/all-lots.html"><?=htmlspecialchars($value["name_cat"]);?></a>
            </li>
        <?php endforeach; ?>

    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <!--заполните этот список из массива с товарами-->

        <?php foreach ($ad as $key => $value): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src=<?=htmlspecialchars($value["image"]);?> width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=htmlspecialchars($value["name_cat"]);?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=htmlspecialchars($value["name"]);?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=price_formating($value["price_begin"]);?></span>
                        </div>
                        <div class="lot__timer timer <?= (floor((strtotime("tomorrow midnight") - time()) / 60) <= 60) ? "timer--finishing" : ""; ?>">
                            <?=format_time();?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
        
    </ul>
</section>
