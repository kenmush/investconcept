<?php


namespace App\Services;


use GuzzleHttp\Client;

class Investor
{
    protected $path = 'https://5b441e4de88a.ngrok.io/';

//    protected $path = ;

    public function investorLogin($data)
    {
        return $this->request('POST', 'portal/investor/login/', [
                "username" => $data['username'],
                "password" => $data['password']
        ]);
    }

    protected function request($method, $path, array $parameters = [])
    {
        $response = (new Client)->{$method}($this->path().ltrim($path, '/'), [
                'headers' => [
                        'Authorization' => "Bearer ".'X-Mutisya',
                        'Content-Type'  => 'application/json',
                ],
                'json'    => $parameters,
        ]);

        return json_decode((string) $response->getBody(), true);
    }

    public function path()
    {
        return config('investordashboard.root_path');
    }

    public function checkFirstTimeLogin($api_id)
    {

        return $this->request('GET', 'portal/investor/check_first/login/'.$api_id.'/');
    }

    public function getCategoryInvestments($investmentId)
    {
        return $this->request('GET', "portal/assets/by/category/$investmentId/");
    }

    public function getAllAssets()
    {
        return $this->request('GET', 'portal/asset/creation/');
    }

    public function createAssetForInvestor($data)
    {
        return $this->requestFiles('POST', 'portal/asset/investment/creation/', $data);
    }

    protected function requestFiles($method, $path, array $parameters = [])
    {
        $response = (new Client)->{$method}($this->path().ltrim($path, '/'), [
                'headers'   => [
                        'Authorization' => "Bearer ".'X-Mutisya',
                ],
                'multipart' => $parameters,
        ]);

        return json_decode((string) $response->getBody(), true);
    }

    public function getLandingPageData()
    {
        return $this->request('GET', 'portal/website/contents/details/1/');
    }

    public function createLandingPageData($data)
    {
        return $this->request('POST', 'portal/website/contents/creation/', $data);
    }

    public function updateLandingPageData($data, $id)
    {
        return $this->request('PUT', 'portal/website/contents/details/'.$id.'/', $data);
    }

    public function updateAssetInvestedIn($data, $investorId)
    {
        return $this->request('PUT', 'portal/investor/investments/'.$investorId.'/', $data);
    }

    public function registerBeneficiary($data)
    {
        return $this->request('POST', 'portal/beneficiary/creation/', $data);
    }

    public function getBeneficiary()
    {
        return $this->request('GET', 'portal/beneficiary/creation/');
    }

    public function getBeneficiaryById($id)
    {
        return $this->request('GET', 'portal/beneficiary/profile/'.$id.'/');
    }

    public function signupInvestor($data)
    {
        return $this->request('POST', 'portal/investor/creation/', [
                'phoneNumber'   => $data['phoneNumber'],
                'firstName'     => $data['firstName'],
                'middleName'    => $data['middleName'],
                'lastName'      => $data['lastName'],
                'username'      => $data['username'],
                'language'      => $data['language'],
                'email'         => $data['email'],
                'organization'  => $data['organization'],
                'password'      => $data['password'],
                'accredited'    => $data['accredited'],
                'investor_type' => $data['investor_type'],
        ]);
    }

    public function updateAsset($id, $data)
    {
        return $this->request('PUT', 'portal/asset/category/'.$id.'/', $data);
    }

    public function getAssetbyId($id)
    {
        return $this->request('GET', 'portal/asset/category/'.$id.'/');
    }

    public function getAssetbyIdbyInvestor($id, $investorId)
    {
        return $this->request('GET', 'portal/assets/by/category/'.$id.'/'.$investorId.'/');
    }

    public function createAsset($data)
    {
        return $this->request('POST', 'portal/asset/category/creation/', $data);
    }

    public function changepassword($data, $apiid)
    {
        return $this->request('POST', 'portal/investor/changePassword/'.$apiid.'/', $data);
    }

    public function updateInvestor($data, $investor)
    {
        return $this->requestFiles('PUT', 'portal/investor/profile/'.$investor.'/', [
                [
                        'name'     => 'phoneNumber',
                        'contents' => $data['phoneNumber']
                ], [
                        'name'     => 'firstName',
                        'contents' => $data['firstName']
                ], [
                        'name'     => 'middleName',
                        'contents' => $data['middleName']
                ], [
                        'name'     => 'lastName',
                        'contents' => $data['lastName']
                ],
                [
                        'name'     => 'username',
                        'contents' => $data['username']
                ],
                [
                        'name'     => 'language',
                        'contents' => $data['language']
                ],
                [
                        'name'     => 'email',
                        'contents' => $data['email']
                ],
                [
                        'name'     => 'organization',
                        'contents' => $data['organization']
                ],
                [
                        'name'     => 'password',
                        'contents' => $data['password']
                ],
                [
                        'name'     => 'passport',
                        'contents' => "null",
                ],
                [
                        'name'     => 'license',
                        'contents' => "null",
                ],
                [
                        'name'     => 'avatar',
                        'contents' => "null",
                ],
//                [
//                        'name'     => 'avatar',
//                        'contents' => fopen($data['avatar'], 'r'),
//                        'filename' => $data['avatar']->getClientOriginalName()
////                        'contents' => file_get_contents(storage_path('app\\'.$data['avatar']))
//                ],

        ]);
    }

    public function updateVerificationData($data, $investor)
    {
        return $this->requestFiles('PUT', 'portal/investor/profile/upload/'.$investor.'/', [
                [
                        'name'     => 'passport',
                        'contents' => fopen($data['passport'], 'r'),
                        'filename' => $data['passport']->getClientOriginalName()
                ],
                [
                        'name'     => 'license',
                        'contents' => fopen($data['licence'], 'r'),
                        'filename' => $data['licence']->getClientOriginalName()
                ],
                [
                        'name'     => 'avatar',
                        'contents' => null,
                ]
        ]);
    }

    public function updateQuestionaireData($data, $investor)
    {
        return $this->requestFiles('PUT', 'portal/investor/questionnaires/'.$investor.'/', [
                [
                        'name'     => 'investor',
                        'contents' => $data['investor']
                ], [
                        'name'     => 'legal_name',
                        'contents' => $data['legal_name']
                ], [
                        'name'     => 'investor_location',
                        'contents' => $data['investor_location']
                ], [
                        'name'     => 'nationality',
                        'contents' => $data['nationality']
                ], [
                        'name'     => 'source_of_wealth',
                        'contents' => $data['source_of_wealth']
                ], [
                        'name'     => 'tax_identification_number',
                        'contents' => $data['tax_identification_number']
                ], [
                        'name'     => 'authorization',
                        'contents' => $data['authorization']
                ], [
                        'name'     => 'address',
                        'contents' => $data['address']
                ], [
                        'name'     => 'date_of_birth',
                        'contents' => $data['date_of_birth']
                ], [
                        'name'     => 'w9_form',
                        'contents' => fopen($data['w9_form'], 'r'),
                        'filename' => $data['w9_form']->getClientOriginalName()
                ],
        ]);
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    public function getAllInvestors()
    {
        return $this->request('GET', 'portal/investor/creation/');
    }

    public function assetsByInvestment($categoryId, $investmentId)
    {
        return $this->request('GET', "portal/assets/by/investor/{$categoryId}/{$investmentId}/");
    }

    public function getAssetsbyCategory()
    {
        return $this->request('GET', 'portal/asset/creation/');
    }

    public function getUserAssets($user)
    {
        return $this->request('GET', 'portal/investor/portfolio/'.$user.'/');
    }

    public function getassetCoordinates()
    {
        return $this->request('GET', 'portal/asset/creation/');
    }

    public function getAssetCategories()
    {
        return $this->request('GET', 'portal/asset/category/creation/');
    }

    public function getInvestorAssets($investorID)
    {
        return $this->request('GET', 'portal/investor/portfolio/'.$investorID.'/');
    }

    public function investorByID($investorId)
    {
        return $this->request('GET', 'portal/investor/profile/'.$investorId);
    }

    public function registerInvestor($data)
    {
        return $this->requestFiles('POST', 'portal/investor/creation/', [
                [
                        'name'     => 'phoneNumber',
                        'contents' => $data['phoneNumber']
                ], [
                        'name'     => 'firstName',
                        'contents' => $data['firstName']
                ], [
                        'name'     => 'middleName',
                        'contents' => $data['middleName']
                ], [
                        'name'     => 'lastName',
                        'contents' => $data['lastName']
                ],
                [
                        'name'     => 'username',
                        'contents' => $data['username']
                ],
                [
                        'name'     => 'language',
                        'contents' => $data['language']
                ],
                [
                        'name'     => 'email',
                        'contents' => $data['email']
                ],
                [
                        'name'     => 'organization',
                        'contents' => $data['organization']
                ],
                [
                        'name'     => 'password',
                        'contents' => $data['password']
                ],
                [
                        'name'     => 'avatar',
                        'contents' => fopen($data['avatar'], 'r'),
                        'filename' => $data['avatar']->getClientOriginalName()
//                        'contents' => file_get_contents(storage_path('app\\'.$data['avatar']))
                ],

        ]);

    }
}