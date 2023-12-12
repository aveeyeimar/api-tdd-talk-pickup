<?php

namespace Tests\Feature\API\Pickups;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreatePickupAPITest extends TestCase
{
    use RefreshDatabase;

    //Name Routing
    //user/create  name('user.create')
    //user/store   name('user.create')

    /**
     * A basic feature test example.
     */
    public function test_i_can_create_pickup(): void
    {
        $response = $this->postJson(
            route('pickup.create'),
            [
                "pickupsInternalId" => 2550511306,
                "companyId" => 25505,
                "agent" => [
                    "id" => 13975,
                    "name" => "Bodega Medellin",
                    "contact" => "Charly",
                    "document" => 6661233221,
                    "city" => "MEDELLIN(ANTIOQUIA)",
                    "address" => "Calle 49 Sur, Medellín, Antioquia, Colombia",
                    "reference" => "palo de mango",
                    "phone" => "3201542685",
                    "email" => "charly-warehouse@yopmail.co"
                ],
                "transportId" => 33,
                "date" => [
                    "date" => "2023-12-11",
                    "timeFrom" => "13:40:06",
                    "timeTo" => "13:30:06"
                ],
                "item" => [
                    "type" => "small-package",
                    "units" => 1,
                    "height" => 0,
                    "length" => 0,
                    "width" => 0,
                    "weight" => 1,
                    "declaredValue" => 0,
                    "description" => "5 Cajas de zapatos tala 38"
                ]
            ]

        );

        //dd

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'success',
            'message',
            'data'
        ]);

        $this->assertDatabaseCount('tblrecogidas', 1);
    }
}
