<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
?><h2>1</h2><?
$array_surname = array('Васильев', 'Хожимуратова', 'Маслов', 'Соловьев', 'Габдрахимов');?>
<p class='mas'>
<?print_r($array_surname);?>
<br>
</p>
<p class="count">   Длина: <?echo count($array_surname)?> элементов</p> <br>
<p class="count">   - Есть ли Cидоров в массиве?</p><?
if(in_array('Сидоров', $array_surname)){
    ?><p class="yes">
      <?echo '- Да';?>
    </p><?
}
else {
  ?><p class="no"><?echo ' - Нет';?></p><?
}
echo '<br>';
$posl = array_pop($array_surname);
?><p class="posl">
  последний удаленный элемент:
  <?print_r($posl);?>
</p><?
?>
<h2>2</h2><?
$objects = [
  "Спортивный" => "Сидоров",
  "Художественный" => "Емелина",
  "Музыкальный" => "Иванова",
  "Литературный" => "Петров",
  "Биологический" => "Антонова"
];

asort($objects);

echo "<ul>";
foreach ($objects as $object => $surn) {
  ?><li class="list"><?echo "$object - $surn";?></li><?
}
echo "</ul>";
?>
<h2>3</h2>
<?

$student = [
    'name' => 'Айзат',
    'surname' => 'Габдрахимов',
    'group' => '435',
    'hobby' => ['Чтение'],
    'social' => ['inst' => '@gabdrahimov', 'tg' => '@gabdrahimov',]
];
?>
<h2>Мои данные</h2>
    <p class="stud">имя: <span class="sp"><? echo $student['name']?> </span></p>
    <p class="stud">фамилия: <span class="sp"><? echo $student['surname']?> </span></p>
    <p class="stud">группа: <span class="sp"><? echo $student['group']?> </span></p>
    <p class="stud">хобби: <span class="sp"><? echo $student['hobby'][0] ?> </span></p>
    <p class="stud">соцсети: <span class="sp"><? echo 'инста '. $student['social']['inst'] .'<br>', 'тг ' . $student['social']['tg'] ?> </span></p>
</body>
</html>