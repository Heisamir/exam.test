<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: aqua">
<div class="container mt-5" style="background-color: aliceblue">
    <h1 class="text-center"> آزمون اطلاعات عمومی</h1>
    <form action="result.php" method="POST">
        <?php
        $questions = [
            1 => ["سوال 1: 2 + 2 = ؟", [2, 3, 4, 5], 4],
            2 => ["سوال 2: پایتخت ایران؟", ["تهران", "مشهد", "شیراز", "اصفهان"], "تهران"],
            3 => ["سوال 3: چند سیاره در منظومه شمسی وجود دارد؟", [7, 8, 9, 10], 8],
            4 => ["سوال 4: بزرگترین قاره جهان؟", ["آسیا", "آفریقا", "اروپا", "آمریکا"], "آسیا"],
            5 => ["سوال 5: سریع‌ترین حیوان خشکی؟", ["یوزپلنگ", "شیر", "فیل", "اسب"], "یوزپلنگ"],
            6 => ["سوال 6: کدام فلز رسانای خوب جریان الکتریکی است؟", ["طلا", "نقره", "آهن", "آلومینیوم"], "نقره"],
            7 => ["سوال 7: زبان اصلی برنامه‌نویسی وب؟", ["Python", "HTML", "Java", "C++"], "HTML"],
            8 => ["سوال 8: کدام سیاره بزرگترین سیاره منظومه شمسی است؟", ["زهره", "مریخ", "مشتری", "زحل"], "مشتری"],
            9 => ["سوال 9: چه کسی لامپ را اختراع کرد؟", ["ادیسون", "تسلا", "اینشتین", "نیوتون"], "ادیسون"],
            10 => ["سوال 10: رنگ آسمان در روز آفتابی؟", ["آبی", "قرمز", "سبز", "زرد"], "آبی"]
        ];

        foreach ($questions as $qNo => $qData) {
            echo "<div class='mb-4'>";
            echo "<p><strong>{$qData[0]}</strong></p>";
            foreach ($qData[1] as $option) {
                echo "
                    <div class='form-check'>
                        <input class='form-check-input' type='radio' name='question{$qNo}' value='{$option}' required>
                        <label class='form-check-label'>{$option}</label>
                    </div>";
            }
            echo "</div>";
        }
        ?>

        <button type="submit" class="btn btn-primary" >ثبت</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
