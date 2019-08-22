<?php

namespace App\Listeners;

use App\Coupon;
use App\Jobs\UpdateCoupon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CartUpdateListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
//        dd('event was fired');

        $couponName = session()->get('coupon')['name'];

        if($couponName) {
            $coupon = Coupon::where('code', $couponName)->first();

            dispatch_now(new UpdateCoupon($coupon));
//            session()->put('coupon', [
//                'name' => $coupon->code,
//                'discount' => $coupon->discount(Cart::subtotal()),
//            ]);
        }
    }
}
