<?php
$data = [
  "taro, taro@yamada, 000-0000-0000",
  "hanako, hanako@yamada, 000-0000-0000",
  "hoge, hoge@fuga, 000-0000-0000"
];

$msg = '';
if (isset($_POST['number'])) {
    $n = $_POST['number'] * 1;
    if ($n < 0) {
        $n = 0;
    }
    if ($n >= count($data)) {
        $n = count($data) - 1;
    }
    $msg = $data[$n];
}
echo $msg;
