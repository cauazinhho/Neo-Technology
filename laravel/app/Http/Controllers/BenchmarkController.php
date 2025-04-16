<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;


 
class BenchmarkController extends Controller
{
    public function show(Request $request, $game)
    {
        $cpus = [
            'i3-10100F' => 50,
            'i5-11400F' => 70,
            'i7-12700K' => 90,
        ];
 
        $gpus = [
            'GTX 1050 Ti' => 40,
            'GTX 1660 Super' => 60,
            'RTX 3060' => 80,
            'RTX 4090' => 100,
        ];
 
        $games = [
            'cyberpunk' => [
                'required_power' => 120,
                'base_fps' => 60,
            ],
            'eldenring' => [
                'required_power' => 100,
                'base_fps' => 60,
            ],
        ];
 
        if (!isset($games[$game])) {
            abort(404);
        }
 
        $cpu_selected = $request->input('cpu');
        $gpu_selected = $request->input('gpu');
 
        // Se ainda não escolheu config, só mostra a tela com as opções
        if (!$cpu_selected || !$gpu_selected) {
            return view('auth.telabenchmark', [
                'game' => $game,
                'cpus' => array_keys($cpus),
                'gpus' => array_keys($gpus),
            ]);
        }
 
        if (!isset($cpus[$cpu_selected]) || !isset($gpus[$gpu_selected])) {
            abort(404);
        }
 
        $cpu_power = $cpus[$cpu_selected];
        $gpu_power = $gpus[$gpu_selected];
        $total_power = $cpu_power + $gpu_power;
 
        $required_power = $games[$game]['required_power'];
        $base_fps = $games[$game]['base_fps'];
 
        $fps = round(($total_power / $required_power) * $base_fps);
 
        return view('auth.telabenchmark', [
            'game' => $game,
            'cpu' => $cpu_selected,
            'gpu' => $gpu_selected,
            'fps' => $fps,
            'cpus' => array_keys($cpus),
            'gpus' => array_keys($gpus),
        ]);
    }
}