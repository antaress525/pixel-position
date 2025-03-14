<?php

namespace Tests\Unit;

use App\Models\Job;
use Tests\TestCase;
use App\Models\Employer;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer
        ]);
        $this->assertTrue($job->employer->is($employer));
    }
}
