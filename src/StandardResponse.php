<?php
/**
 * Created by PhpStorm.
 * User: xmxtc
 * Date: 2019/6/4
 * Time: 3:52 PM
 */

namespace AvalonGames\Util;


class StandardResponse
{
    private $status = 0;

    private $data;

    private $links;

    public function response($result=null)
    {
        $this -> setData($result);

        return response() -> json($this -> getResponseData());
    }

    protected function getResponseData()
    {
        return [
            'status'    => $this -> status,
            'data'      => $this -> data,
            '_links'    => $this -> getLinks()
        ];
    }

    public function setStatus(int $status)
    {
        $this -> status = $status;

        return $this;
    }

    public function getLinks()
    {
        if(!$this -> links) {
            $this -> links = [
                'self'  => [
                    'href'  => url() -> current()
                ]
            ];
        }

        return $this -> links;
    }

    public function setLinks($links)
    {
        $this -> links = $links;

        return $this;
    }

    public function setData($data)
    {
        $this -> data = $data;
        
        return $this;
    }
}