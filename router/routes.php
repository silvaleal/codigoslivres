<?php

return [
    "/" => "Home@index",
    "/diretrizes" => "Home@rules",
    "/inicio" => "Home@home",
    "/user" => "User@index",
    "/user/login" => "User@login",
    "/user/create" => "User@create",
    "/user/[a-z0-9_]+" => "User@show",
    "/repository" => "Repository@index",
    "/repository/create" => "Repository@create",
    "/repository/[a-z0-9_]+" => "Repository@show"
];