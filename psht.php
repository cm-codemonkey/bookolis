<?php

$date_1 = date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 1 days'));
$date_2 = date('Y-m-d', strtotime(date('d-m-Y', strtotime(date('Y-m-d'))) . ' + 2 days'));

header('Location: https://bookolis.app.pricenavigator.net/hotel/results/Canc%C3%BAn-M%C3%A9xico/3703/' . $date_1 . '/' . $date_2 . '/2-0?availability=CNF');
