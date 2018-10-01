<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
  use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $this->assertTrue(true);
        // given 3 records in db, one a month after others

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
          'created_at' => \Carbon\Carbon::now()->subMonth(1)
        ]);

        //when fetching archive
        $posts = Post::archives();

        // response in prop format

        $this->assertCount(2, $posts);

        $this->assertEquals([
          [
            "year" => $first->created_at->format('Y'),
            "month" => $first->created_at->format('F'),
            "published" => 1
          ],
          [
            "year" => $second->created_at->format('Y'),
            "month" => $second->created_at->format('F'),
            "published" => 1
          ]
        ], $posts);
    }
}
