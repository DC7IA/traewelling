<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ICSExportTest extends TestCase {
    use RefreshDatabase;

    /** @test */
    public function test_export_ICS_request_with_unknown_user() {
        // GIVEN: A non-existing username
        $username = "UNKNOWN";

        // WHEN: Requesting the ICS export
        $response = $this->get(route('export.ics', ['username' => $username]));
        
        // THEN: The application returns 404
        $response->assertNotFound();
    }

    /** @test */
    public function test_export_ICS_request_without_access_key() {
        // GIVEN: A user
        $user = factory(User::class)->create();

        // WHEN: Requesting the ICS export without access key
        $response = $this->get(route('export.ics', ['username' => $user->username]));
        
        // THEN: The application returns 401
        $response->assertUnauthorized();
    }
    
    /** @test */
    public function test_export_ICS_request_with_empty_access_key() {
        // GIVEN: A user
        $user = factory(User::class)->create();

        // WHEN: Requesting the ICS export without access key
        $response = $this->get(route('export.ics', ['username' => $user->username, 'access_key' => '']));
        
        // THEN: The application returns 401
        $response->assertUnauthorized();
    }
    
    /** @test */
    public function test_export_ICS_request_with_wrong_access_key() {
        // GIVEN: A user
        $user = factory(User::class)->create();

        // WHEN: Requesting the ICS export without access key
        $response = $this->get(route('export.ics', ['username' => $user->username, 'access_key' => 'not_the_real_access_key']));
        
        // THEN: The application returns 401
        $response->assertUnauthorized();
    }

    /** @test */
    public function test_export_ICS_request_with_the_right_access_key() {
        // GIVEN: A user and it's access key
        $user = factory(User::class)->create();
        $key = $user->receiveAccessKey();

        // WHEN: Requesting the ICS export without access key
        $response = $this->get(route('export.ics', ['username' => $user->username, 'access_key' => $key]));
        
        // THEN: The application returns 200 and a valid ICS file, although it's empty
        $response->assertOk();
        $response->assertHeader("content-type", "text/calendar; charset=UTF-8");
        $response->assertSee(route('export.ics', ['username' => $user->username]));
    }
}
