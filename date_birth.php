<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>date of birth</title>
</head>

<body>
    <!--
    <div class="select-choice">

        <select size="1" name="day">
            <option value="" selected>Select Date</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>

    </div>-->



    <!--    <select size="1" name="month">
            <option value="" selected>Select Month</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>

    </div>

    <div class="select-choice">

        <select name="year">

            <option value="">
                1950
            </option>

            <option value="">
                1951
            </option>

            <option value="">
                1952
            </option>

            <option value="">
                1953
            </option>

            <option value="">
                1954
            </option>

            <option value="">
                1955
            </option>

            <option value="">
                1956
            </option>

            <option value="">
                1957
            </option>

            <option value="">
                1958
            </option>

            <option value="">
                1959
            </option>

            <option value="">
                1960
            </option>

            <option value="">
                1961
            </option>

            <option value="">
                1962
            </option>

            <option value="">
                1963
            </option>

            <option value="">
                1964
            </option>

            <option value="">
                1965
            </option>

            <option value="">
                1966
            </option>

            <option value="">
                1967
            </option>

            <option value="">
                1968
            </option>

            <option value="">
                1969
            </option>

            <option value="">
                1970
            </option>

            <option value="">
                1971
            </option>

            <option value="">
                1972
            </option>

            <option value="">
                1973
            </option>

            <option value="">
                1974
            </option>

            <option value="">
                1975
            </option>

            <option value="">
                1976
            </option>

            <option value="">
                1977
            </option>

            <option value="">
                1978
            </option>

            <option value="">
                1979
            </option>

            <option value="">
                1980
            </option>

            <option value="">
                1981
            </option>

            <option value="">
                1982
            </option>

            <option value="">
                1983
            </option>

            <option value="">
                1984
            </option>

            <option value="">
                1985
            </option>

            <option value="">
                1986
            </option>

            <option value="">
                1987
            </option>

            <option value="">
                1988
            </option>

            <option value="">
                1989
            </option>

            <option value="">
                1990
            </option>

            <option value="">
                1991
            </option>

            <option value="">
                1992
            </option>

            <option value="">
                1993
            </option>

            <option value="">
                1994
            </option>

            <option value="">
                1995
            </option>

            <option value="">
                1996
            </option>

            <option value="">
                1997
            </option>

            <option value="">
                1998
            </option>

            <option value="">
                1999
            </option>

            <option value="">
                2000
            </option>

            <option value="">
                2001
            </option>

            <option value="">
                2002
            </option>

            <option value="">
                2003
            </option>

            <option value="">
                2004
            </option>

            <option value="">
                2005
            </option>

            <option value="">
                2006
            </option>

            <option value="">
                2007
            </option>

            <option value="">
                2008
            </option>

            <option value="">
                2009
            </option>

            <option value="">
                2010
            </option>

            <option value="">
                2011
            </option>

            <option value="">
                2012
            </option>

            <option value="">
                2013
            </option>

            <option value="2014">
                2014
            </option>

            <option value="2015">
                2015
            </option>

            <option value="2016">
                2016
            </option>

            <option value="2017">
                2017
            </option>

            <option value="2018">
                2018
            </option>

            <option value="2019">
                2019
            </option>

            <option value="2020">
                2020
            </option>

        </select>-->

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