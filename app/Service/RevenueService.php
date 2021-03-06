<?php

namespace App\Service;


use App\Models\Order;
use Illuminate\Support\Facades\DB;
use ParagonIE\Sodium\Core\Curve25519\H;

class RevenueService
{
    protected $order;
    const HANDLED = 2;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function reportMonth()
    {
        return DB::table('orders')->select(DB::raw('SUM(payment_total) as total, MONTH(date) as month'))
            ->where('status_order_id', self::HANDLED)
            ->groupBy(DB::raw('MONTH(date)'))
            ->get();
    }

    public function reportQuarterly()
    {
        return DB::table('orders')->select(DB::raw('SUM(payment_total) as total, QUARTER(date) as quarter'))
            ->where('status_order_id', self::HANDLED)
            ->groupBy(DB::raw('QUARTER(date)'))
            ->get();
    }

    public function reportYear()
    {
        return DB::table('orders')->select(DB::raw('SUM(payment_total) as total, YEAR(date) as year'))
            ->where('status_order_id', self::HANDLED)
            ->groupBy(DB::raw('YEAR(date)'))
            ->orderBy('year', 'asc')
            ->get();
    }

    public function reportTypeRoomMonth()
    {
        return DB::table('orders')
            ->join('order_type_room', 'orders.id', '=', 'order_type_room.order_id')
            ->join('type_rooms', 'order_type_room.type_room_id', '=', 'type_rooms.id')
            ->where('status_order_id', self::HANDLED)
            ->select(DB::raw('name, SUM(order_type_room.total) as total, MONTH(date) as month'))
            ->groupBy(DB::raw('name, MONTH(date)'))
            ->get();
    }

    public function reportTypeRoom()
    {
        return DB::table('orders')
            ->join('order_type_room', 'orders.id', '=', 'order_type_room.order_id')
            ->join('type_rooms', 'order_type_room.type_room_id', '=', 'type_rooms.id')
            ->where('status_order_id', self::HANDLED)
            ->select(DB::raw('name, SUM(order_type_room.total) as total'))
            ->groupBy(DB::raw('name'))
            ->get();
    }

    public function reportTypeRoomQuarter()
    {
        return DB::table('orders')
            ->join('order_type_room', 'orders.id', '=', 'order_type_room.order_id')
            ->join('type_rooms', 'order_type_room.type_room_id', '=', 'type_rooms.id')
            ->where('status_order_id', self::HANDLED)
            ->select(DB::raw('name, SUM(order_type_room.total) as total, QUARTER(date) as quarter'))
            ->groupBy(DB::raw('name, QUARTER(date)'))
            ->get();
    }

}
