<?php

function getFlashMsg($flash) {
    if (isset($_SESSION[$flash])) {
        $message = $_SESSION[$flash];
        unset($_SESSION[$flash]);
        return $flash_msg;
    }
}

function setFlashMsg($flash, $message) {
    if (!isset($_SESSION[$flash])) {
        $_SESSION[$flash] = $message;
    }
}