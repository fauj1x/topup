<?php

namespace App\View\Components;

use App\Http\Controllers\RecommendationController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Recommendation extends Component
{
    public $data = "true ngab";
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $controller = new RecommendationController();
        $this->data = $controller->getData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recommendation', ['data' => $this->data]);
    }
}
