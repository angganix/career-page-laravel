<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $limit, $page, $offset, $sortby, $sortdir, $search = "";

    public function __construct()
    {
        $this->limit = Request::get("limit", 25);
        $this->page = Request::get("page", 1);
        $this->offset = ($this->page - 1) * $this->limit;
        $this->sortby = Request::get("sortby", "id");
        $this->sortdir = Request::get("sortdir", "desc");
        $this->search = Request::get("search", "");
    }

}
