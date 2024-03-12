<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Benefit;
use App\Models\BenefitContent;

class BenefitLivewire extends Component
{
    public $id;
    public $benefit_id;

    public function deleteBenefit($id,$benefit_id)
    {
        $plan = Benefit::find($id);
        // レコードを削除
        $plan->delete();

        $plans = BenefitContent::where("benefit_id",$benefit_id)->get();
        // レコードを削除

        foreach ($plans as $plan){
            $plan->delete();
        }

        return redirect()->route('show-benefit');
    }
}
