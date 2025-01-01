<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class samirTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_samir_model_creation()
    {
        $samir = \App\Models\samir::create([
            'name' => 'Samir Example',
            // Add other attributes as needed
        ]);
    
        $this->assertDatabaseHas('samirs', [
            'name' => 'Samir Example',
        ]);
    }
    
}
