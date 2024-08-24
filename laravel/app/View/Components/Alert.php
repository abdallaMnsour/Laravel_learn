<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $limit = 0,
        public string $color = 'primary',
        public ?string $title = null
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        $limit = $this->limit;
        $color = $this->color;
        $title = $this->title;
        return view('components.alert', compact('limit', 'color', 'title'));

        // for ($i = 0; $i < $limit; $i++) :
        //     echo <<<test
        //         <div class="alert alert-$color">
        //             $title
        //         </div>
        //     test;
        // endfor;
    }
}
