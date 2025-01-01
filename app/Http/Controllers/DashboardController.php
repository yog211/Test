<?php
namespace App\Http\Controllers;

use App\Models\UangMasuk;
use App\Models\UangKeluar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{

  public function index() {

    $totalUangMasuk = UangMasuk::sum('nominal');
    $totalUangKeluar = UangKeluar::sum('nominal');

    $uangmasukformat = 'Rp.' . number_format($totalUangMasuk, 0, ',', '.');

    $uangkeluarformat = 'Rp.' . number_format($totalUangKeluar, 0, ',', '.');

    // Kirim data ke view
    return view('dashboard', compact('uangmasukformat', 'uangkeluarformat',
    ));
  }
}