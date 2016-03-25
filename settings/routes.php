<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 16:54
 */

$app->get("/books", function ($request, $response, $args) {
    return \App\Model\Book::all()->toJson();
});
