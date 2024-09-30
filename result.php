<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه امتحان</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">result</h1>

    <?php
    $questions = [
        1 => ["سوال 1: 2 + 2 = ؟", 4],
        2 => ["سوال 2: پایتخت ایران؟", "تهران"],
        3 => ["سوال 3: چند سیاره در منظومه شمسی وجود دارد؟", 8],
        4 => ["سوال 4: بزرگترین قاره جهان؟", "آسیا"],
        5 => ["سوال 5: سریع‌ترین حیوان خشکی؟", "یوزپلنگ"],
        6 => ["سوال 6: کدام فلز رسانای خوب جریان الکتریکی است؟", "نقره"],
        7 => ["سوال 7: زبان اصلی برنامه‌نویسی وب؟", "HTML"],
        8 => ["سوال 8: کدام سیاره بزرگترین سیاره منظومه شمسی است؟", "مشتری"],
        9 => ["سوال 9: چه کسی لامپ را اختراع کرد؟", "ادیسون"],
        10 => ["سوال 10: رنگ آسمان در روز آفتابی؟", "آبی"]
    ];

    $totalQuestions = count($questions);
    $correctAnswers = 0;
    $negativeCorrectAnswers = 0;

    echo "<ul class='list-group'>";
    foreach ($questions as $qNo => $qData) {
        $userAnswer = $_POST["question{$qNo}"];
        $correctAnswer = $qData[1];
        if ($userAnswer == $correctAnswer) {
            echo "<li class='list-group-item list-group-item-success'>{$qData[0]} <br> <strong>پاسخ شما: {$userAnswer} (صحیح)</strong></li>";
            $correctAnswers++;
            $negativeCorrectAnswers++;
        } else {
            echo "<li class='list-group-item list-group-item-danger'>{$qData[0]} <br> <strong>پاسخ شما: {$userAnswer} (غلط)</strong> - پاسخ صحیح: {$correctAnswer}</li>";
            $negativeCorrectAnswers--;
        }
    }
    echo "</ul>";

    $correctPercentage = ($correctAnswers / $totalQuestions) * 100;
    $negativePercentage = ($negativeCorrectAnswers / $totalQuestions) * 100;

    echo "<div class='mt-4'>";
    echo "<p><strong>درصد بدون نمره منفی: </strong> {$correctPercentage}%</p>";
    echo "<p><strong>درصد با نمره منفی: </strong> {$negativePercentage}%</p>";
    echo "</div>";
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
