<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google;

class TestController extends Controller
{
    public function __construct()
    {
        $this->client = new Google\Client();
        $this->client->setApplicationName(config('google.application_name'));
        $this->client->setDeveloperKey(config('google.developer_key'));
        $this->client->setAuthConfig(storage_path(config('google.service.file')));
        $this->client->addScope(config('google.scopes'));
    }

    public function redirect()
    {
        return redirect($this->client->createAuthUrl());
    }

    public function callback(Request $request)
    {
        $code = $request->get('code');
        $token = $this->client->fetchAccessTokenWithAuthCode($code);
        $this->client->setAccessToken($token);

        $businessprofileperformanceService = new Google\Service\BusinessProfilePerformance($this->client);
        $locations = $businessprofileperformanceService->locations;
        $location = $locations->getDailyMetricsTimeSeries('locations/7016196540126617689', [
            'dailyMetric' => 'BUSINESS_DIRECTION_REQUESTS',
            'dailyRange.endDate.day'    => 30,
            'dailyRange.endDate.month'  => 12,
            'dailyRange.endDate.year'   => 2022,
            'dailyRange.startDate.day'  => 1,
            'dailyRange.startDate.month'    => 7,
            'dailyRange.startDate.year' => 2022,
            // 'dailySubEntityType.timeOfDay.hours' => 0,
            // 'dailySubEntityType.timeOfDay.minutes' => 0,
            // 'dailySubEntityType.timeOfDay.nanos' => 0,
            // 'dailySubEntityType.timeOfDay.seconds' => 0,
        ]);
        $total = 0;
        foreach ($location->getTimeSeries() as $key => $value) {
            $date = $value->getDate();
            $total += $value->getValue();
        }
        return response()->json([
            'status' => 'success',
            'message' => '經由商家檔案提出的路線要求次數' . $total
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
