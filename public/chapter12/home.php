<?php
$title = "Home";
$thisDir = 12;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="../bootstrap/css/bootstrap.min.css"
            rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center
                py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-­
                    0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use
                        xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4"><?= $title ?></span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="home.php" class="nav-link"
                        aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="home.php?q=add" class="nav-link"
                        aria-current="page">Add</a></li>
                </ul>
            </header>
            <div>
            <?php
                try {
                    echo '<br />';
                    echo 'Current PHP version: ' . phpversion();
                    echo '<br />';
                    $host = 'mysql-db';
                    $dbname = 'beginningPHP';
                    $user = 'user';
                    $pass = 'pass';
                    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
                    $conn = new PDO($dsn, $user, $pass);
                    echo 'Database connected successfully';
                    echo '<br />';
                } 
                catch (\Throwable $t) {
                    echo 'Error: ' . $t->getMessage();
                    echo '<br />';
                }
                function deleteBook($theBook) {
                    global $conn;
                    $sql = "delete FROM `books` WHERE `id`=$theBook";
                    $result = $conn->query($sql);
                    echo "Book Deleted<br />";
                }
                function showEditBook($theBook) {
                    global $conn;
                    $sql = "SELECT * FROM `books` WHERE `id`=$theBook";
                    $result = $conn->query($sql);
                    foreach($result as $row) {
                        $addForm ='<form action="home.php"
                        method="post"><table>';
                        $addForm .= '<tr><td>Title</td><td><input type="text"
                        name="title" value="'.$row['title'].'"></td></tr>';
                        $addForm .= '<tr><td>Author</td><td><input type="text"
                        name="author" value="'.$row['author'].'"></td></tr>';
                        $addForm .= '<tr><td>Category</
                        td><td><input type="text" name="category"
                        value="'.$row['category'].'"></td></tr>';
                        $addForm .= '<tr><td>ISBN</td><td><input type="text"
                        name="isbn" value="'.$row['isbn'].'"></td></tr>';
                        $addForm .= '<tr><td></td><td><input type="submit"
                        name="submit"></td></tr>';
                        $addForm .= '<input type="hidden" name="bookToUpdate"
                        value="'.$row['id'].'">';
                        $addForm .= '</table></form>';
                        echo $addForm;
                    }
                }   
                function showAddBook() {
                    $addForm ='<form action="home.php" method="post"><table>';
                    $addForm .= '<tr><td>Title</td><td><input type="text"
                    name="title"></td></tr>';
                    $addForm .= '<tr><td>Author</td><td><input type="text"
                    name="author"></td></tr>';
                    $addForm .= '<tr><td>Category</td><td><input type="text"
                    name="category"></td></tr>';
                    $addForm .= '<tr><td>ISBN</td><td><input type="text"
                    name="isbn"></td></tr>';
                    $addForm .= '<tr><td></td><td><input type="submit"
                    name="submit"></td></tr>';
                    $addForm .= '<input type="hidden" name="bookToAdd"
                    value="true">';
                    $addForm .= '</table></form>';
                    echo $addForm;
                }
                function showBooks() {
                    global $conn;
                    $sql = "SELECT * FROM `books` WHERE `id`";
                    $result = $conn->query($sql);
                    if ($result !== false) {
                        $rowCount = $result->rowCount();
                        echo "Number of Books: $rowCount <br />";
                    }
                    foreach($result as $row) {
                        echo $row['id'].' - '. $row['title'] .' - '.
                        $row['author'] .' - '. $row['category'] .' - '.
                        $row['isbn'] .' [ <a href="home.php?q=edit&book='.$row
                        ['id'].'"> Edit</a> <a href="home.php?q=delete&book='.
                        $row['id'].'"> Delete</a> ]<br />';
                    }
                }
                if (isset($_GET['q'])) {
                    if ($_GET['q'] == 'add') {
                    echo "Adding Book<br />";
                    showAddBook();
                    }
                    if ($_GET['q'] == 'edit') {
                    $theBook = $_GET['book'];
                    echo "Editing Book<br />";
                    showEditBook($theBook);
                    }
                    if ($_GET['q'] == 'delete') {
                        $theBook = $_GET['book'];
                        echo "Deleting Book<br />";
                        deleteBook($theBook);
                    }
                }
                if (isset($_POST['bookToUpdate'])) {
                    global $conn;
                    $sql = "update books set title=?, author=?, category=?,
                    isbn=? where id=?";
                    if ($stmt = $conn->prepare($sql)) {
                    $stmt->bindParam(1,$_POST['title']);
                    $stmt->bindParam(2,$_POST['author']);
                    $stmt->bindParam(3,$_POST['category']);
                    $stmt->bindParam(4,$_POST['isbn']);
                    $stmt->bindParam(5,$_POST['bookToUpdate']);
                    if($stmt->execute()) {
                    echo "Book ". $_POST['title'] ."added";
                    }
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    echo "</br>Stmt error: ".$stmt->error();
                    }
                }
                if (isset($_POST['bookToAdd'])) {
                    global $conn;
                    $sql = "insert into books (title, author, category, isbn)
                    VALUES (?,?,?,?)";
                    if ($stmt = $conn->prepare($sql)) {
                    $stmt->bindParam(1,$_POST['title']);
                    $stmt->bindParam(2,$_POST['author']);
                    $stmt->bindParam(3,$_POST['category']);
                    $stmt->bindParam(4,$_POST['isbn']);
                    if($stmt->execute()) {
                    echo "New Book added";
                    }
                    }
                }
                showBooks();
            ?>
            </div>
</body>