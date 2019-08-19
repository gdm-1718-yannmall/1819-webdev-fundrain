<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Arts',
                'description' => 'Discover artists who use Fundrain to realize their projects in visual art and performance.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Comics & Illustrations',
                'description' => 'Explore fantastical worlds and original characters form our community of comics creators and illustrators',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Digital Arts',
                'description' => 'Discover the greatest artists who use Fundrain to realize their projects and dreams in digital arts.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Design & Tech',
                'description' => 'from the finest designs to the most innovative tech, discover the projects from creators working to build a more beautiful future',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Food & Craft',
                'description' => 'See how artisans and entrepreneurs are using Fundrain to break new ground in food, fashion, and crafts.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Games',
                'description' => 'From tabletop adventures to beloved revivals, discover the projects forging the future of gameplay.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Music',
                'description' => 'Discover new albums, performances, and independent venues from creators using Fundrain to shape the future of sound.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Publishing',
                'description' => 'Explore how writers and publishers are using Fundrain to bring new literature, periodicals, podcasts, and more to life.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ], 
            [
                'name' => 'Film & Video',
                'description' => 'Join forces with the intrepid filmmakers and festival creators changing the way stories get told on screen.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        App\Models\Categorie::insert($data);
    }
}
