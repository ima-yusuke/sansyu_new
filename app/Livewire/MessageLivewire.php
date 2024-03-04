<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;

class MessageLivewire extends Component
{
    public $id;

    public function deleteMessage($id)
    {
        $plan = Message::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('show-message');
    }

}
