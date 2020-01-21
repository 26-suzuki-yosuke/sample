<?php
//----------------------------------------------------

// 課題①

function Task1($int){
    $i=$int*2;
    return $i;
}

//----------------------------------------------------

// 課題②

function Task2($a,$b){
    $j=$a+$b;
    return $j;
}

//----------------------------------------------------

// 課題③

function Task3($arr){
    $cnt=count($arr);
    $Sumk=$arr[0];
    for ($k=1; $k < $cnt; $k++){
        $Sumk *= $arr[$k];
    }
    return $Sumk;
}

//----------------------------------------------------

// 課題④

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if ($max_number < $a){
        $max_number =$a;
    }
    
 }

 return $max_number;
 }
 
//----------------------------------------------------

echo '課題①　入力値：20';
echo '　→　戻り値：'.task1(20)."\n";

echo '課題②　入力値：35,72';
echo '　→　戻り値：'.task2(35,72)."\n";

echo '課題③　入力値：1,3,5,7,9';
echo '　→　戻り値：'.task3(array(1,3,5,7,9))."\n";

echo '課題④　入力値：7,2,5,3,1,8';
echo '　→　戻り値：'.max_array(array(7,2,5,3,1,8))."\n";

echo "\n";
echo '// 課題⑤'."\n";
//------------
echo '//strip_tags ... 変数内のHTTP及びPHPタグを削除する。'."\n";
echo '入力例：strip_tags("<p>Hello_World!!</p>")'."\n";
echo '戻り値：'.strip_tags('<p>Hello_World!!</p>')."\n"."\n";

//------------
echo '//array_push ... 配列の追加。'."\n";
echo '入力例：$str_arr = ["A","B"]'."\n";
echo '　　　　array_push($str_arr,"C","D")'."\n";
echo '戻り値：'."\n";

$str_arr = ["A","B"];
array_push ($str_arr,"C","D");
print_r($str_arr);
echo "\n";

//------------
echo '//array_merge ... 配列の結合。指定された同じキー文字列があった場合、値は後から指定されたものに上書きされる。'."\n";
echo '入力例：$arr1 = ["A","B","check" => "OK"]'."\n";
echo '　　　　$arr2 = ["C","check"=>"NO","D"]'."\n";
echo '　　　　$Result = array_merge($arr1,$arr2)'."\n";
echo '戻り値：'."\n";

$arr1 = ["A","B","check" => "OK"];
$arr2 = ["C","check"=>"NO","D"];
$Result = array_merge($arr1,$arr2);
print_r($Result);
echo "\n";

//------------
echo '//time ... 現時刻の取得。'."\n";
echo '//mktime ... 指定した時刻の取得。'."\n";
echo '//date ... 時刻の書式指定。'."\n";

echo '入力例：$d1 = time()'."\n";
echo '　　　　$d2 = mktime(23,59,60,12,31,2020)'."\n";
echo '　　　　date("Y-m-d",$d1)'."\n";
echo '　　　　date("Y-m-d",$d2)'."\n";
echo '戻り値：'."\n";

$d1 = time();
$d2 = mktime(23,59,60,12,31,2020);
echo date('Y-m-d',$d1)."\n";
echo date('Y-m-d',$d2)."\n";