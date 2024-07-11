<?php
include "base.php";

$vote = $_POST['vote'];
dd($vote);
$que = $Que->find($vote);
dd($que);
/* Array
(
    [id] => 2
    [text] => 1.健走或爬樓梯、慢跑等較不受時間、場地限制的運動。
    [vote] => 0
    [subject_id] => 1
) */

$que['vote']++;

$subject = $Que->find($que['subject_id']);
dd($subject);
/* Array
(
    [id] => 1
    [text] => 問題一：你最常做什麼運動來促進健康體能呢?
    [vote] => 0
    [subject_id] => 0
) */
$subject['vote']++;

$Que->save($subject);
$Que->save($que);
