<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DudaApi extends Model
{
    use HasFactory;
    protected $endpoint;
    protected $username;
    protected $password;

    public function __construct()
    {
        parent::__construct();
        $this->client = new \GuzzleHttp\Client();

        $this->endpoint = config('app.DUDA_API_ENDPOINT', 'https://api.duda.co');
        $this->username = config('app.DUDA_API_USERNAME', 'e1e13ecf76');
        $this->password = config('app.DUDA_API_PASSWORD', 'HakVinJuADQF');
    }

    // Get Methods
    public function get_site($site_name)
    {
        //b2ea7e8c
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/sites/multiscreen/'.$site_name, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function get_pages($site_name){
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/sites/multiscreen/site/'.$site_name.'/pages', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function get_page($site_name, $page_name){
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/sites/multiscreen/site/'.$site_name.'/pages/'.$page_name, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function get_form_submissions($site_name){
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/sites/multiscreen/get-forms/'.$site_name, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function get_activities($site_name){
        // returns list of activities generated for the site. Like published, backed up, the date, who did it
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/sites/multiscreen/'.$site_name.'/activities', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }

    public function get_analytics($site_name){
        // returns list of activities generated for the site. Like published, backed up, the date, who did it
        $response = Http::withBasicAuth($this->username, $this->password)
            ->get('https://api.duda.co/api/analytics/site/'.$site_name.'?result=Activities', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
        $response = json_decode($response->getBody(), true);
        return $response;

    }


}
