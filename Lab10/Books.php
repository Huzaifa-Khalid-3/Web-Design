<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $genre = $_POST['genre'];
    $xml = simplexml_load_file('Books.xml');
    $result = '<ul>';

    foreach ($xml->book as $book) {
        if ($book->genre == $genre) {
            $result .= '<li>';
            $result .= '<h2>' . $book->title . '</h2>';
            $result .= '<p><strong>Author:</strong> ' . $book->author . '</p>';
            $result .= '<p><strong>Price:</strong> ' . $book->price . '</p>';
            $result .= '<p><strong>Publish Date:</strong> ' . $book->publish_date . '</p>';
            $result .= '<p><strong>Description:</strong> ' . $book->description . '</p>';
            $result .= '</li>';
        }
    }
    $result .= '</ul>';
    echo $result;
}
?>
