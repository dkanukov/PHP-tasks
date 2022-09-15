<?php
    $textStorage = [
    ];

    function addPost(string $title, string $text, &$textStorage): void {
        $textStorage[] = ['title' => $title, 'text' => $text];
    }

    function removePost(int $index, array &$textStorage): bool {
        if (count($textStorage) - 1 < $index) return false;

        unset($textStorage[$index]);
        return true;
    }

    addPost('testTitle3', 'testText3', $textStorage);
    addPost('testTitle4', 'testText4', $textStorage);
    print_r($textStorage);
    $res1 = removePost(0, $textStorage);
    $res2 = removePost(3, $textStorage);
    print_r($textStorage);
    echo $res1 . " " . $res2, PHP_EOL;
//    var_dump($testStorage[1]['title']);