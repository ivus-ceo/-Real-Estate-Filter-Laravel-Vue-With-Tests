<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Region;
use App\Services\Slugs\SlugService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class RegionSeeder extends Seeder
{
    public function __construct(
        private readonly SlugService $slugService,
    )
    {}

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getFileRegions() as $fileRegion)
        {
            $region = Region::create([
                'name' => $fileRegion['name'],
                'code' => $fileRegion['state_code'],
                'country_id' => Country::firstWhere('iso3_code', $fileRegion['country_iso3_code'])->id,
                'published_at' => now(),
            ]);

            $region->location()->create([
                'latitude' => $fileRegion['latitude'],
                'longitude' => $fileRegion['longitude'],
            ]);

            $region->slug()->create([
                'slug' => $this->slugService->getUniqueSlug($region->name . '-' . $region->code),
                'published_at' => now(),
            ]);
        }
    }

    private function getFileRegions(): array
    {
        return json_decode(File::get(public_path('jsons/regions.json')), true);
    }
}
