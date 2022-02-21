<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects()
    {
        // $this->withoutExceptionHandling();

        $projects = Project::factory(15)->create();
        

        $response = $this->get(route('projects.index'));
        

        $response->assertStatus(200);

        $response->assertViewIs('projects.index');
        
        $response->assertViewHas('projects');

        foreach ($projects as $project) {
            $this->assertDatabaseHas('projects', [
                'title' => $project->title
            ]);
        };
    }

    public function test_can_see_individual_project()
    {
        // $this->withoutExceptionHandling();

        $project = Project::factory()->create();


        $response = $this->get(route('projects.show', $project));


        $response->assertStatus(200);
        
        $response->assertViewIs('projects.show');
        
        $response->assertViewHas('project');

        $this->assertDatabaseHas('projects', ['title' => $project->title]);
    }
}
