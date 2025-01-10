<?php

return [
    "/" => "Home@index",
    "/diretrizes" => "Home@rules",
    "/inicio" => "Home@home",
    "/user" => "User@index",
    "/user/login" => "User@login",
    "/user/create" => "User@create",
    "/user/[a-z0-9_]+" => "User@show",
    "/comments/[0-9]+" => "Comments@index",
    "/repository/create" => "Repository@create",
    "/repository/[0-9]+" => "Repository@show",
    "/repository/[0-9]+/delete" => "Repository@delete"
];