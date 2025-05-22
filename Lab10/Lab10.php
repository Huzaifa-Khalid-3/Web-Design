<?php
include 'Header.php';
?>

<div id="content">
    <form id="bookForm">
        <label for="genre">Select Genre:</label>
        <select id="genre" name="genre">
            <option value="Computer">Computer</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Romance">Romance</option>
            <option value="Horror">Horror</option>
            <option value="Science Fiction">Science Fiction</option>
        </select>
        <button type="button" onclick="fetchBooks()">Show Books</button>
    </form>
    <div id="bookList"></div>
</div>

<script>
function fetchBooks() {
    var genre = document.getElementById("genre").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "Books.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("bookList").innerHTML = xhr.responseText;
        }
    };
    xhr.send("genre=" + genre);
}
</script>

<?php
include 'Footer.php';
?>
