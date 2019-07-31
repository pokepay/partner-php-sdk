<?php
namespace Pokepay\Request;

abstract class PagingBase extends Base
{
    protected $page = 1;
    protected $perPage = 50;

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPerPage()
    {
        return $this->perPage;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    public function getDefaultParams()
    {
        return  array(
            'page'     => $this->page,
            'per_page' => $this->perPage,
        );
    }
}
