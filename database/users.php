<?php

$users_list;

function get_users() {
    if (!empty($users_list)) {
        return $users_list;
    }
    else return $users_list = array("admin@admin.com");
}