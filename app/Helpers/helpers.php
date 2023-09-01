<?php

function formatDate($date)
{
    $date = date_create($date);
    $date = date_format($date, 'd M, Y');
    return $date;
}

function getIndex($val)
{
    $num = $val % 4;
    switch ($num) {
        case 0:
            $num = 1;
            break;
        case 1:
            $num = 2;
            break;
        case 2:
            $num = 3;
            break;
        default:
            $num = 4;
            break;
    }
    return $num;
}

function getServiceName($val)
{
    if ($val == 1) {
        return "Vehicle License";
    } else if ($val == 2) {
        return "Roadworthiness Certificate";
    } else if ($val == 3) {
        return "Computerized Vehicle Inspection";
    } else {
        return "Proof of Ownership Certificate";
    }
}


// borrowers date return function
function returnDate($date)
{
    $date = date_create($date);
    $date = date_add($date, date_interval_create_from_date_string("10 days"));
    $date = date_format($date, 'd M, Y');
    return $date;
}

function returnDateTime($date)
{
    $date = date_create($date);
    $date = date_format($date, 'H:ia, d M');
    return $date;
}

function currentUser(): object
{
    return auth()->user();
}

function greeting(): string
{
    $string = "good morning";
    if ((intval(date('H')) >= 12) && (intval(date('H')) < 16)) {
        $string = 'good afternoon';
    } elseif (intval(date('H')) >= 16 && intval(date('H')) < 23) {
        $string = 'good evening';
    }
    return $string;
}

function toDashboard()
{
    return redirect(auth()->user()->roles[0]->name . '/home');
}

function moneyFormat($money)
{
    // dollar = '&#36' or '$dollar,
    // pound = '&#163' or &pound
    $money = doubleval($money);
    $salary = number_format("$money", 2);
    return $salary;
}

function returnArr($val): array
{
    $arr = [];
    for ($i = 1; $i <= 12; $i++) {
        if (array_key_exists($i, $val)) {
            array_push($arr, $val[$i]);
        } else {
            array_push($arr, 0);
        }
    }
    return $arr;
}