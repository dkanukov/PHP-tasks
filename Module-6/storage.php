<?php
    $textStorage = [];

    function addPost(string $title, string $text, &$textStorage): void
    {
        $textStorage[] = ['title' => $title, 'text' => $text];
    }

    function removePost(int $index, array &$textStorage): bool {
        if (!array_key_exists($index, $textStorage)) return false;

        unset($textStorage[$index]);
        return true;
    }

    function editPost(int $index, string $title, string $text, array &$textStorage): bool {
        if (!array_key_exists($index, $textStorage)) return false;

        $textStorage[$index]['title'] = $title;
        $textStorage[$index]['text'] = $text;
        return true;
    }

    addPost('testTitle3', 'testText3', $textStorage);
    addPost('testTitle4', 'testText4', $textStorage);
    print_r($textStorage);

    $res1 = removePost(0, $textStorage);
    $res2 = removePost(3, $textStorage);
    print_r($textStorage);
    var_dump($res1, $res2);

    $res = editPost(1, 'newTitle', 'newText', $textStorage);
    $res2 = editPost(10, 'newTitle10', 'newText10', $textStorage);
    print_r($textStorage);
    var_dump($res, $res2);

//    var_dump($textStorage[1]['title']);

