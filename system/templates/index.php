<?php include("header.php"); ?>

<p class="lead">
    Рада громадського контролю формується у складі 15 осіб, відібраних за результатами конкурсу.
    Конкурс з формування складу Ради громадського контролю проводиться шляхом рейтингового
    Інтернет-голосування громадян, які проживають на території України.
</p>

<h2 class="space-top">Порядок голосування і оголошення результатів</h2>

<p class="lead">
    Рейтингове Інтернет-голосування проводиться протягом дванадцяти годин через веб-сайт
    Національного антикорупційного бюро України з 8:00 до 20:00 &mdash; <b>?? червня 2015 року</b>.
</p>

<h2 style="color#f33">Це тестове голосування за несправжніх кандидатів.</h2>

<p>
    Будь-який громадянин, який проживає на території України, може взяти участь в рейтинговому
    Інтернет-голосуванні.
</p>

<p>
    Під час участі в рейтинговому Інтернет-голосуванні громадянин може проголосувати не більше
    ніж за п'ятнадцять кандидатів.
</p>

<p>
    Обраними до складу Ради громадського контролю за результатами рейтингового Інтернет-голосування
    вважаються п'ятнадцять кандидатів, які набрали найбільшу кількість голосів.
</p>

<p>
    За результатами конкурсу з формування складу Ради громадського контролю Директор Національного
    антикорупційного бюро України розміщує на офіційному веб-сайті Національного антикорупційного
    бюро України оголошення про результати рейтингового голосування із зазначенням кількості голосів,
    поданих за кожного кандидата.
</p>

<p>
    З метою запобігання повторного голосування, бажаючим прийняти участь в рейтинговому
    Інтернет-голосуванні, буде запропоновано пройти ряд тестів, підтвердити адресу своєї електронної
    пошти та номер мобільного телефону. На проходження всіх тестів і обрання кандидатів відводиться
    15 хв. В разі неуспішного голосування спробу можна повторити через 5 хв.
</p>

<h2 class="space-top">Відкритість і прозорість голосування</h2>

<p>
    Протокол голосування з частково знеособленними данними доступний <a href="public/report.txt">публічно</a>.
</p>

<br>

<div id="candidates_list" style="display:none">
    <h2>Список кандидатів у Раду громадського контролю</h2>
    <?= candidates_table(); ?>
    <br>
</div>

<div class="well text-center">
    <a href="#" class="btn btn-lg btn-default show-candidates">Cписок кандидатів</a>
    <a href="step1.php" class="btn btn-lg btn-primary">Розпочати голосування</a>
</div>

<?php include("footer.php"); ?>
