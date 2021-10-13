  <?php

namespace App\Actions;

use App\Models\Bike\Bike_Detail;
use App\Models\Payment\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchBikeAction
{
    public function execute(Request $request): ?array
    {

        $search_text = $request->input('search');
//            echo ($search_text);

        //        $Bike = Bike_Detail::with(['rentals', 'employees'])
//            ->where('employee_id', Auth::id())
////            ->where('rent_status', 'LIKE', '%' . $search_text . '%')
//            ->get()->toArray();

//        dd($Bike);

        if ($search_text !== null) {
            return Rental::with(['employees', 'users', 'bike_details' => function ($query) use ($search_text) {
                $query->where('bike_model', 'LIKE', '%' . $search_text . '%');
            }])
                ->whereHas('bike_details', function ($query) use ($search_text) {
                    $query->where('bike_model', 'LIKE', '%' . $search_text . '%');
                })
                ->where('employee_id', Auth::id())
                ->get()->toArray();
        }

        return null;

    }
}
