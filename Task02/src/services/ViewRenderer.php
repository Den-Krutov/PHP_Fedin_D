<?php

namespace DenKrutov\logic\Services;

class ViewRenderer {
    public static function render($view, $data = []) {
        extract($data);
        require __DIR__ . '/../views/' . $view;
    }
}
