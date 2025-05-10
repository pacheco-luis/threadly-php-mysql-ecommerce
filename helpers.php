<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = ''): string
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name): void
{
    $viewPath = basePath('views/' . $name . '.view.php');

    if (!file_exists($viewPath)) {
        exit("View '{$name}' not found.");
    }

    require $viewPath;
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name): void
{
    $partialPath = basePath('views/partials/' . $name . '.php');

    if (!file_exists($partialPath)) {
        exit("Partial '{$name}' not found.");
    }

    require $partialPath;
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
