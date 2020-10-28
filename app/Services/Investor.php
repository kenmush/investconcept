<?php


namespace App\Services;


use GuzzleHttp\Client;

class Investor
{
    protected $path = 'http://100.27.13.227/v1/';

    public function investorLogin($data)
    {
        return $this->request('POST', 'portal/investor/login/', [
                "username" => $data['username'],
                "password" => $data['password']
        ]);
    }

    public function getAllInvestors()
    {
        return $this->request('GET','portal/investor/creation/');
    }
    public function getAssetsbyCategory()
    {
        return $this->request('GET', 'portal/asset/creation/');
    }

    public function getUserAssets($user)
    {
        return $this->request('GET', 'portal/investor/portfolio/'.$user);
    }

    public function getAssetCategories()
    {
        return $this->request('GET', 'portal/asset/category/creation/');
    }

    public function registerInvestor($data)
    {
        return $this->request('POST', 'portal/investor/creation/', [
                'phoneNumber'  => $data['phoneNumber'],
                'firstName'    => $data['firstName'],
                'middleName'   => $data['middleName'],
                'lastName'     => $data['lastName'],
                'username'     => $data['username'],
                'language'     => $data['language'],
                'email'        => $data['email'],
                'organization' => $data['organization'],
                'password'     => $data['password'],
        ]);

    }

    protected function request($method, $path, array $parameters = [])
    {
        $response = (new Client)->{$method}($this->path.ltrim($path, '/'), [
                'headers' => [
                        'Authorization' => "Bearer ".'X-Mutisya',
                        'Content-Type'  => 'application/json',
                ],
                'json'    => $parameters,
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}