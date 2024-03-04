<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Interview;


class InterviewLivewire extends Component
{
    public $id;

    public function deleteInterview($id)
    {
        $plan = Interview::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('show-interview');
    }
}
