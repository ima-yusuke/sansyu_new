<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\JobOpening;
use App\Models\JobCategory;



class JobOpeningLivewire extends Component
{
    public $id;
    public $job_opening_id;

    public function deleteJob_opening($id,$job_opening_id)
    {
        $plan = JobOpening::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト

        $plans = JobCategory::where("job_opening_id",$job_opening_id)->get();
        // レコードを削除

        foreach ($plans as $plan){
            $plan->delete();
        }


        return redirect()->route('show-job_opening');
    }
}
