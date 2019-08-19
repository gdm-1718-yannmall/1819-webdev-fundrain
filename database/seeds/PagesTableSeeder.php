<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles_slugs = [
            'home' => ['Welcome @ Fundrain </br> Discover our newest projects!', '/images/payment.jpg'],
            'about' => ['Everything you need to know about us!', '/images/desk.jpg'],
            'services' => ['Learn everything about our services', '/images/services.jpg'],
            'privacy policy' => ['Our privacy policy', '/images/Logo.jpg'],
        ];

        foreach ($titles_slugs as $title => [$slug, $image]) {
            factory(App\Models\Page::class)->create([
                'title' => $title,
                'slug' => $slug,
                'image' => $image,
            ]);
        }
            
        
        
    }
}
