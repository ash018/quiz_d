<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('check_user_login')) {

    function check_user_login() {
        $ci = get_instance();

        $is_logged_in = $ci->session->userdata('is_log_user');
        if (!isset($is_logged_in) || $is_logged_in != true) {

            redirect(base_url('login/logout'));
        }
    }

}

// WWBD Date Formate
if (!function_exists('ru_date_show')) {

    function ru_date_show($date) {

        if ($date != '') {
            $date2 = date_create($date);
            $date_new = date_format($date2, "d/m/y H\hm");
            $date_new = $date_new;
            return $date_new;
        } else {
            return '';
        }
    }

}

if (!function_exists('select_option')) {

    function select_option($table, $field) {
        $ci = get_instance();

        $ci->load->model('common_m');
        $option = $ci->common_m->select_s($table);

        foreach ($option as $opt) {
            $opt_id = $opt['id'];
            $opt_val = $opt[$field];
            echo "<option value=\"$opt_id\">$opt_val</option>";
        }
    }

}


if (!function_exists('select_option_selected')) {

    function select_option_selected($table, $field, $selected_id) {
        $ci = get_instance();

        $ci->load->model('common_m');
        $option = $ci->common_m->option_select($table, $field);
        foreach ($option as $opt) {
            $opt_id = $opt['id'];
            $opt_val = $opt[$field];
            if ($opt_id == $selected_id) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            echo "<option $selected value=\"$opt_id\">$opt_val</option>";
        }
    }

}



if (!function_exists('get_edit_date')) {

    function get_edit_date($id, $field_name, $table, $field_value) {
        $CI = & get_instance();
        $CI->load->model('common_m');
        $edit_date_q = $CI->common_m->select_edit_date($id, $field_name, $table, $field_value);
        $edit_date = $edit_date_q['0']['edit_date'];
        return $edit_date;
    }

}

if (!function_exists('check_language')) {

    function check_language($language) {
        $ci = get_instance();

        $ci->load->model('common_m');
        $option = $ci->common_m->check_language($language);

        $check = count($option);

        if ($check == 0) {
            return 0;
        } else {
            return 1;
        }
    }

}