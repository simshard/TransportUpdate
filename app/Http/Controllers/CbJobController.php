<?php

namespace App\Http\Controllers;

use App\cbJob;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class CbJobController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('jobs.jobupdate', ['cbJob' => new cbJob]);
    }

    /**
     * Store a jobupdate request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //dd( $request->request->all()) ;
        $attributes=request()->validate([
            'JobNumber'=>'alpha_num|required',
            'CustOrderNum'=>'alpha_num|required',
            'Reg'=>'alpha_num|required',
            'Progress'=>'string|required',
            'DueDate'=>'date|nullable',
            'ColDate'=>'date|nullable',
            'DelDate'=>'date|nullable',
            'Progress'=>'string|required',
            'POCName'=>'string|nullable',
            'POCDate'=>'date|nullable',
            'POCTime'=>'string|nullable',
            'POCMiles'=>'numeric|nullable',
            'PODName'=>'string|nullable',
            'PODDate'=>'date|nullable',
            'PODTime'=>'string|nullable',
            'PODMiles'=>'numeric|nullable',
            'JobCancelled'=>'boolean',
            'JobAborted'=>'boolean',
            'notes'=>'string|nullable'
        ]);

        $payload=json_encode($attributes);
        $attributes['webhook_payload']=$payload;
        $jobInsert = cbJob::create($attributes);  //persist to database
        Log::info($payload);  //save request to log



        //DO the api request

        $url = "http://157.245.35.154";
        $token="JB101SHBDIKJBD";
        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json',
        ];
        $client = new \GuzzleHttp\Client(['base_uri' => $url]);
        $response = $client->request(
            'POST',
            'transportUpdate',
            [
                'headers' => $headers,
                'json'=>$attributes,
            ]
        );
        // $res = (string) $response->getBody();
        //  Log::info($res);
        //  dd($res );

        $output=json_decode($response->getBody()->getContents(), true);



          print_r($output);


        /*
if ($output['error']) {
            echo $output['error'] ;
        }
  if ($output['success']) {
      $output['success'] ;
  }

*/
        //   $rez=$response->getBody()->getContents();
     //   Log::info($rez);
     //   $contents = json_decode($rez);
     //   dd($contents);
         //$contents->error  OR $contents->success
    }
}
