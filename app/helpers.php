<?php
    Carbon\Carbon::setLocale('vi');
     function showEventTime($t) {
        return ucwords($t->dayName.', '.$t->day.' Tháng '.$t->month.' '.$t->year);
}
function showTime($s, $e) {
    Carbon\Carbon::setLocale('vi');
    $start = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $s);
    $end = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $e);
    if($start->toDateString() == $end->toDateString() ) {
        echo showEventTime($start);
    } else {
        echo showEventTime($start).' - '.showEventTime($end);
    }
    echo '('.$start->format('h:i A').' - '.$end->format('h:i A').')';
}
function isTicketSelling($s, $e) {
         $now = Carbon\Carbon::now();
         $sell_start = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $s);
         $sell_end = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $e);
        if($now > $sell_start && $now < $sell_end) {
            return true;
        } else  false;

}
function isSellingTicket($s) {
    $now = Carbon\Carbon::now();
    $sell_start = Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $s);
    if($now->diffInMinutes($sell_start) > 0) {
        return true;
    } else
        return false;
}