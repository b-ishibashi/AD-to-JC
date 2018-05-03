<?php

function ad2jc($ad)
{
    $ad = (int)$ad;

    if ($ad < 1868) {
        return false;
    }

    if ($ad < 1912) {
        return '明治' . ($ad - 1867);
    }

    if ($ad < 1926) {
        return '大正' . ($ad - 1911);
    }

    if ($ad < 1989) {
        return '昭和' . ($ad - 1925);
    }

    if ($ad < 2020) {
        return '平成' . ($ad - 1988);
    }

    return false;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

if (isset($_GET['AD'])) {
    $ad = $_GET['AD'];
    $jc = ad2jc($ad);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>和暦西暦変換</title>
</head>
<body>
<?php if (!isset($jc) || $jc === false): ?>
    <p>
        エラー
    </p>
<?php else: ?>
    <p>
        西暦<?= h($ad) ?>年は<?= h($jc) ?>年です。
    </p>
<?php endif; ?>
</body>
</html>
