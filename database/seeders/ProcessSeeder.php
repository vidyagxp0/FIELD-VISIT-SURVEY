<?php

namespace Database\Seeders;

use App\Models\Process;
use App\Models\QMSProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $process  = new Process();
        $process->division_id = 1;
        $process->process_name = "New Document";
        $process->save();


        $process  = new Process();
        $process->division_id = 2;
        $process->process_name = "New Document";
        $process->save();


        $process  = new Process();
        $process->division_id = 3;
        $process->process_name = "New Document";
        $process->save();

        $process  = new Process();
        $process->division_id = 4;
        $process->process_name = "New Document";
        $process->save();


        $process  = new Process();
        $process->division_id = 5;
        $process->process_name = "New Document";
        $process->save();


        $process  = new Process();
        $process->division_id = 6;
        $process->process_name = "New Document";
        $process->save();

        $process  = new Process();
        $process->division_id = 7;
        $process->process_name = "New Document";
        $process->save();

        $process  = new Process();
        $process->division_id = 8;
        $process->process_name = "New Document";
        $process->save();

        $processNames = [
            "Field Visit"
        ];

        // Loop through each process name
        foreach ($processNames as $index => $processName) {
            for ($divisionId = 1; $divisionId <= 1; $divisionId++) {
                $process = new QMSProcess();
                $process->division_id = $divisionId;
                $process->process_name = $processName;
                $process->save();
            }
        }
    }
}