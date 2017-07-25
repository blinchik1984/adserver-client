<?php


namespace AdServer\Client;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface ClientInterface
{
    public function request(Request $request) : Response;
}