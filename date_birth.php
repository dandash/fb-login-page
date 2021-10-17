<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>date of birth</title>
</head>

<body>


    <div class="select-choice">
        <select name="day" class="day">
            <option value="0">يوم</option>
            <?php
            for ($a = 1; $a <= 31; $a++) {
            ?>
                <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="select-choice">
        <select name="month" class="month">
            <option value="0">شهر</option>
            <?php
            for ($m = 1; $m <= 12; $m++) {
                $num = str_pad($m, 2, 0, STR_PAD_LEFT);
                //setlocale(LC_ALL, "ar_AE");
                $month =  date("F", mktime(0, 0, 0, $m, 1));

            ?>
                <option value="<?php echo $num; ?>"><?php echo $month; ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    <div class="select-choice">
        <select name="year" class="year">
            <option value="0">سنه</option>
            <?php
            for ($y = 1990; $y <= 2100; $y++) {
            ?>
                <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
            <?php
            }
            ?>
        </select>


    </div>


</body>

</html>