<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventLivewire extends Component
{

    public $id;

    public function deleteEvent($id)
    {
        // Booksテーブルから指定のIDのレコード1件を取得
        $plan = Event::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('show-event');
    }
}

