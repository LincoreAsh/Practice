<?php
$text = 'Трагедия Пушкина «Моцарт и Сальери» занимает всего десять страниц.
 О чем она? О зависти или о том, что «гений и злодейство – две вещи несовместные»? Есть ли оправдание Сальери,
 который, по версии Пушкина, отравил Моцарта?
История предумышленного убийства рассказывается самим преступником: и Моцарта, и все происходящее мы видим
глазами Сальери. Пьеса начинается с его монолога: «Все говорят: нет правды на земле. Но правды нет и выше». Это похоже 
на речь обвиняемого. Оказывается, убийство задумано давно, готово и орудие – «последний дар моей Изоры».
 Но кто такая Изора? Где целых восемнадцать лет Сальери хранил яд – в пузырьке?';
echo 'В вашем тексте ' . count(explode(' ', $text)) . ' слов.' . PHP_EOL;
$search_words = preg_split("/[\s,.]/", $text);

foreach ($search_words as $word)
{
    preg_match_all ('/'.$word.'/', $text, $matches);

    $result[$word] = count ($matches[0]);
}

foreach ($result as $index => $val)
{
    echo("$index - $val; ") . PHP_EOL;
}