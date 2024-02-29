<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\View\View;

/**
 * Class BaseController
 *
 * @package App\Http\Controllers
 */
abstract class BaseController extends Controller
{
    protected string $metaTitle = '';
    protected string $metaDescription = '';
    protected string $content = '';
    protected string $template = 'layouts.template';
    protected array $data = [];

    public function __construct() {}

    public function render(): View
    {
        $this->data = Arr::add($this->data, 'content', $this->content);
        $this->data = Arr::add($this->data, 'metaTitle', $this->metaTitle);
        $this->data = Arr::add($this->data, 'metaDescription', $this->metaDescription);

        return view($this->template)->with($this->data);
    }

}
