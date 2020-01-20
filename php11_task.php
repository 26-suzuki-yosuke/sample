<?php
echo "\n";

//課題①
$a=3;
$b=7;
echo $a+$b;
echo "\n"."\n";

//課題②
$array_month = ['１月','２月','３月','４月','５月','６月','７月','８月','９月','１０月','１１月','１２月'];
echo $array_month[7];
echo "\n"."\n";

//課題③
$hello='Hello, ';
$name='Yosuke';
$world="'s world";
echo $hello.$name.$world;
echo "\n"."\n";

//課題④
/*
$2018_calendar = {
  "January" => "1月",
  "February" => "2月"、
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" = "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => 10月,
  "November" => "11月",
  "December" => "12月"
};

// 12月を表示する
echo $2018_calendar[December];
*/

echo '課題④エラー箇所'."\n";
echo '・配列の囲いは「{ }」ではなく「[ ]」。'."\n";
echo '・２月行末のカンマ「，」が全角句点「、」になっている。'."\n";
echo '・６月の代入記号？（=>でないといけないところ）の入力ミス。'."\n";
echo '・１０月の要素をダブルクォーテーション「”」で囲ってない。'."\n"."\n";