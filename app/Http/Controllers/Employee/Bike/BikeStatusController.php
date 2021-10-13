

 <?php

namespace App\Http\Controllers\Employee\Bike;

use App\Actions\ToggleActiveAction;
use App\Actions\ViewBikeDetailsAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BikeStatusController extends Controller
{
    public function index(ViewBikeDetailsAction $viewBikeDetailsAction): View
    {
        $details = $viewBikeDetailsAction->execute();

        return view('Employee.bike.status.index', compact(['details']));
    }

    public function update($id, ToggleActiveAction $ActiveAction): \Illuminate\Http\RedirectResponse
    {
        $ActiveAction->execute($id);

       return back()->with('success','Bike Status Updated Successful');
    }
}
