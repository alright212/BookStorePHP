<?php

#For getting all the books
function get_all_the_books($con)
{
    $sql = "SELECT * FROM books ORDER bY id DESC";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $books = $stmt->fetchAll();
    } else {
        $books = 0;
    }

    return $books;
}

#For getting a book by ID
function get_book_by_id($con, $id)
{
    $sql = "SELECT * FROM books WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $book = $stmt->fetch();
    } else {
        $book = 0;
    }

    return $book;
}