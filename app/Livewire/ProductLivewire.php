<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;


class ProductLivewire extends Component
{
        public $id;

        public function deleteProducts($id)
    {
        $plan = Product::find($id);
        // レコードを削除
        $plan->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('show-product');
    }


}
