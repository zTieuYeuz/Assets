<?php

namespace App\Http\Controllers\Accessories;

use App\Events\CheckoutableCheckedIn;
use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Contracts\View\View;
use \Illuminate\Http\RedirectResponse;

class AccessoryCheckinController extends Controller
{
    /**
     * Check the accessory back into inventory
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @param Request $request
     * @param int $accessoryUserId
     * @param string $backto
     */
    public function create($accessoryUserId = null, $backto = null) : View | RedirectResponse
    {
        if (is_null($accessory_user = DB::table('accessories_users')->find($accessoryUserId))) {
            return redirect()->route('accessories.index')->with('error', trans('admin/accessories/message.not_found'));
        }

        $accessory = Accessory::find($accessory_user->accessory_id);
        $this->authorize('checkin', $accessory);

        return view('accessories/checkin', compact('accessory'))->with('backto', $backto);
    }

    /**
     * Check in the item so that it can be checked out again to someone else
     *
     * @uses Accessory::checkin_email() to determine if an email can and should be sent
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @param null $accessoryUserId
     * @param string $backto
     */
    public function store(Request $request, $accessoryUserId = null, $backto = null) : RedirectResponse
    {
        if (is_null($accessory_user = DB::table('accessories_users')->find($accessoryUserId))) {
            return redirect()->route('accessories.index')->with('error', trans('admin/accessories/message.does_not_exist'));
        }

        $accessory = Accessory::find($accessory_user->accessory_id);

        $this->authorize('checkin', $accessory);

        $checkin_hours = date('H:i:s');
        $checkin_at = date('Y-m-d H:i:s');
        if ($request->filled('checkin_at')) {
            $checkin_at = $request->input('checkin_at').' '.$checkin_hours;
        }

        // Was the accessory updated?
        if (DB::table('accessories_users')->where('id', '=', $accessory_user->id)->delete()) {
            $return_to = e($accessory_user->assigned_to);

            event(new CheckoutableCheckedIn($accessory, User::find($return_to), auth()->user(), $request->input('note'), $checkin_at));

            return redirect()->route('accessories.show', $accessory->id)->with('success', trans('admin/accessories/message.checkin.success'));
        }
        // Redirect to the accessory management page with error
        return redirect()->route('accessories.index')->with('error', trans('admin/accessories/message.checkin.error'));
    }
}
