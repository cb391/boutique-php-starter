<?php
$products = [...]; // 30+ produits

// Récupération des filtres
$search = $_GET["q"] ?? "";
$categories = $_GET["category"] ?? [];
$priceMin = $_GET["price_min"] ?? 0;
$priceMax = $_GET["price_max"] ?? PHP_INT_MAX;
$sort = $_GET["sort"] ?? "name_asc";
$page = $_GET["page"] ?? 1;

// Filtrage
$results = array_filter($products, function($p) use (...) {
    // Conditions de filtrage
});

// Tri
usort($results, function($a, $b) use ($sort) {
    // Logique de tri
});

// Pagination
$perPage = 10;
$total = count($results);
$pages = ceil($total / $perPage);
$results = array_slice($results, ($page - 1) * $perPage, $perPage);
?>