<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;

class QuestionLivewire extends Component
{
    public $id;

    public function deleteQuestion($id)
    {
        $plan = Question::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('show-question');
    }
}
