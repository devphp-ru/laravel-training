<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class SiteController
 *
 * @package App\Http\Controllers
 */
class SiteController extends BaseController
{
    public function index(): View
    {
        $this->metaTitle = 'База знаний';
        $this->metaDescription = 'База знаний';

        $this->content = view('sites.index', [

        ]);

        return $this->render();
    }

}
