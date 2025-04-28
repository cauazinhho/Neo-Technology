<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenchmarkController extends Controller
{
    private $cpus = [
        'Intel Pentium G4560' => 20,
        'AMD Athlon 3000G' => 25,
        'Ryzen 3 3200G' => 40,
        'Intel i3-10100F' => 50,
        'Ryzen 5 5500' => 80,
        'Intel i5-10400F' => 65,
        'Ryzen 5 5600' => 85,
        'Ryzen 7 5800X' => 100,
        'Intel i7-11700K' => 105,
        'Ryzen 7 7700X' => 130,
        'Ryzen 9 5900X' => 140,
        'Intel i9-12900K' => 150,
    ];

    private $gpus = [
        'GT 1030' => 20,
        'Radeon R7 250' => 25,
        'GTX 1050 Ti' => 40,
        'GTX 1660 Super' => 65,
        'RX 580' => 55,
        'RX 6600' => 75,
        'RTX 3060' => 90,
        'RTX 3070' => 110,
        'RX 6750 XT' => 115,
        'RTX 4070' => 130,
        'RX 7900 XT' => 145,
        'RTX 4080' => 160,
        'RTX 4090' => 200,
    ];

    private $games = [
        'cyberpunk' => [
            'required_power' => 100,
            'base_fps' => 60,
            'min' => [
                'gpu' => 'GTX 1060 6GB ou RX 580',
                'cpu' => 'i5-3570 ou Ryzen 3 1200',
                'ram' => '8 GB',
                'disk' => '70 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 2060 ou RX 5700 XT',
                'cpu' => 'i7-4790 ou Ryzen 5 3600',
                'ram' => '12 GB',
                'disk' => '70 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
        ],
        'the-last-of-us' => [
            'required_power' => 110,
            'base_fps' => 55,
            'min' => [
                'gpu' => 'GTX 970 ou RX 470',
                'cpu' => 'Ryzen 5 1500X ou i7-4770K',
                'ram' => '16 GB',
                'disk' => '100 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 2070 Super ou RX 6700 XT',
                'cpu' => 'Ryzen 5 3600X ou i7-8700',
                'ram' => '16 GB',
                'disk' => '100 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
        ],
        'resident-evil-4' => [
            'required_power' => 90,
            'base_fps' => 60,
            'min' => [
                'gpu' => 'GTX 1050 Ti',
                'cpu' => 'Ryzen 3 1200 ou i5-7500',
                'ram' => '8 GB',
                'disk' => '60 GB',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 2060 ou RX 5700',
                'cpu' => 'Ryzen 5 3600 ou i7-8700',
                'ram' => '16 GB',
                'disk' => '60 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
        ],
        'fortnite' => [
            'required_power' => 60,
            'base_fps' => 120,
            'min' => [
                'gpu' => 'Intel HD 4000',
                'cpu' => 'Core i3-3225',
                'ram' => '4 GB',
                'disk' => '30 GB',
                'os' => 'Windows 10 64-bit',
                'dx' => '11',
            ],
            'rec' => [
                'gpu' => 'GTX 960 ou RX 550',
                'cpu' => 'Core i5-7300U ou Ryzen 3 3300U',
                'ram' => '8 GB',
                'disk' => '30 GB',
                'os' => 'Windows 10 64-bit',
                'dx' => '11',
            ],
        ],
        'fc-25' => [
            'required_power' => 95,
            'base_fps' => 90,
            'min' => [
                'gpu' => 'GTX 1050 Ti',
                'cpu' => 'i5-6600k ou Ryzen 5 1600',
                'ram' => '8 GB',
                'disk' => '100 GB',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'GTX 1660 ou RX 5600 XT',
                'cpu' => 'i7-6700 ou Ryzen 7 2700X',
                'ram' => '12 GB',
                'disk' => '100 GB SSD',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
        ],
        'elden-ring' => [
            'required_power' => 100,
            'base_fps' => 60,
            'min' => [
                'gpu' => 'GTX 1060 ou RX 580',
                'cpu' => 'i5-8400 ou Ryzen 3 3300X',
                'ram' => '12 GB',
                'disk' => '60 GB',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 3060 Ti ou RX 6700 XT',
                'cpu' => 'i7-8700K ou Ryzen 5 3600X',
                'ram' => '16 GB',
                'disk' => '60 GB SSD',
                'os' => 'Windows 10 64-bit',
                'dx' => '12',
            ],
        ],
        'stalker-2' => [
            'required_power' => 120,
            'base_fps' => 60,
            'min' => [
                'gpu' => 'GTX 1060 ou RX 580',
                'cpu' => 'i5-7600K ou Ryzen 5 1600X',
                'ram' => '8 GB',
                'disk' => '150 GB',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 2070 ou RX 6700 XT',
                'cpu' => 'i7-9700K ou Ryzen 7 3700X',
                'ram' => '16 GB',
                'disk' => '150 GB SSD',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
        ],
        'stray' => [
            'required_power' => 65,
            'base_fps' => 70,
            'min' => [
                'gpu' => 'GTX 650 Ti',
                'cpu' => 'i5-2300 ou AMD FX-6350',
                'ram' => '8 GB',
                'disk' => '10 GB',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'GTX 780 ou RX 580',
                'cpu' => 'i5-8400 ou Ryzen 5 2600',
                'ram' => '8 GB',
                'disk' => '10 GB',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
        ],
        'assassins-creed-shadows' => [
            'required_power' => 130,
            'base_fps' => 60,
            'min' => [
                'gpu' => 'GTX 1070 ou RX 590',
                'cpu' => 'i5-8400 ou Ryzen 5 2600',
                'ram' => '8 GB',
                'disk' => '100 GB',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
            'rec' => [
                'gpu' => 'RTX 3070 ou RX 6800 XT',
                'cpu' => 'i7-10700K ou Ryzen 7 5800X',
                'ram' => '16 GB',
                'disk' => '100 GB SSD',
                'os' => 'Windows 10',
                'dx' => '12',
            ],
        ],
    ];



    private function getGameImage($game)
    {
        $extensions = ['png', 'jpg', 'jpeg', 'webp'];
        foreach ($extensions as $ext) {
            $path = public_path("img/{$game}.{$ext}");
            if (file_exists($path)) {
                return "img/{$game}.{$ext}";
            }
        }
    
        return 'img/default.jpg'; // imagem padrão caso nenhuma seja encontrada
    }
    




    public function show($game)
    {
        return view('telabenchmark', [
            'game' => $game,
            'fps' => null,
            'cpu' => null,
            'gpu' => null,
            'cpus' => array_keys($this->cpus),
            'gpus' => array_keys($this->gpus),
            'upgradeCpu' => null,
            'upgradeGpu' => null,
            'requisitos' => $this->games[$game] ?? null,
            'image' => $this->getGameImage($game),
        ]);
    }

    public function calcular(Request $request, $game)
    {
        $cpu = $request->input('cpu');
        $gpu = $request->input('gpu');

        if (!isset($this->cpus[$cpu]) || !isset($this->gpus[$gpu]) || !isset($this->games[$game])) {
            return back()->withErrors('Configuração inválida');
        }

        $cpuPower = $this->cpus[$cpu];
        $gpuPower = $this->gpus[$gpu];
        $total_power = $cpuPower + $gpuPower;

        $required_power = $this->games[$game]['required_power'];
        $base_fps = $this->games[$game]['base_fps'];

        $balanceFactor = min($cpuPower, $gpuPower) / max($cpuPower, $gpuPower);
        $fpsBase = round(($total_power / $required_power) * $base_fps * $balanceFactor);

        $fps = [
            'low' => $fpsBase + 40,
            'medium' => $fpsBase + 20,
            'high' => $fpsBase,
            'ultra' => max($fpsBase - 15, 10),
        ];

        $upgradeCpu = null;
        $upgradeGpu = null;

        if ($fps['ultra'] < 60) {
            $sortedCpus = array_keys(array_filter($this->cpus, fn($v) => $v > $cpuPower));
            $sortedGpus = array_keys(array_filter($this->gpus, fn($v) => $v > $gpuPower));

            $upgradeCpu = count($sortedCpus) > 0 ? $sortedCpus[0] : null;
            $upgradeGpu = count($sortedGpus) > 0 ? $sortedGpus[0] : null;
        }

        return view('telabenchmark', [
            'game' => $game,
            'cpu' => $cpu,
            'gpu' => $gpu,
            'fps' => $fps,
            'cpus' => array_keys($this->cpus),
            'gpus' => array_keys($this->gpus),
            'upgradeCpu' => $upgradeCpu,
            'upgradeGpu' => $upgradeGpu,
            'requisitos' => $this->games[$game],
            'image' => $this->getGameImage($game),
        ]);
    }
}
