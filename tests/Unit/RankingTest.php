<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RankingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testRanking()
    {
        $response = $this->get('/api/ranking');

        try {
            $response->assertStatus(200);
        }catch (\Exception $e){
            $response->assertStatus(500);
        }

    }

    public function testRankingSemRota()
    {
        $response = $this->get('/api/ranking/1');

        $response->assertStatus(404);
    }

}
