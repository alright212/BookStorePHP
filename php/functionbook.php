<?php

#For getting all the books
function get_all_the_books($connection)
{
    $sql = "SELECT * FROM books ORDER bY id DESC";
    $stmt = $connection->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $books = $stmt->fetchAll();
    } else {
        $books = 0;
    }

    return $books;
}

#For getting a book by ID
function get_book_by_id($connection, $id)
{
    $sql = "SELECT * FROM books WHERE id=?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $book = $stmt->fetch();
    } else {
        $book = 0;
    }

    return $book;
}

#For searching books
function search_books($connection, $key)
{
    # creating simple search algorithm :) 
    $key = "%{$key}%";

    $sql = "SELECT * FROM books WHERE title LIKE ? OR description LIKE ?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$key, $key]);

    if ($stmt->rowCount() > 0) {
        $books = $stmt->fetchAll();
    } else {
        $books = 0;
    }

    return $books;
}

#For getting books by category
function get_books_by_category($connection, $id){
    $sql  = "SELECT * FROM books WHERE category_id=?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        $books = $stmt->fetchAll();
    }else {
        $books = 0;
    }

    return $books;
}