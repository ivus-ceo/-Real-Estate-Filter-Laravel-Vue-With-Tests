<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Services\Countries\CountryService;
use App\Services\Slugs\SlugService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    public function __construct(
        private readonly CountryService $countryService,
        private readonly SlugService $slugService,
    )
    {}

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getFileCountries() as $fileCountry)
        {
            $country = Country::create([
                'name' => $fileCountry['name'],
                'iso2_code' => $fileCountry['iso2'],
                'iso3_code' => $fileCountry['iso3'],
                'numeric_code' => $fileCountry['numeric_code'],
                'phone_code' => $fileCountry['phone_code'],
                'published_at' => now(),
            ]);

            $country->location()->create([
                'latitude' => $fileCountry['latitude'],
                'longitude' => $fileCountry['longitude'],
            ]);

            $country->slug()->create([
                'slug' => $this->slugService->getUniqueSlug($countryDTO->name),
                'published_at' => now(),
            ]);
        }
    }

    /**
     * Get all countries
     *
     * @return array
     */
    private function getFileCountries(): array
    {
        return json_decode(File::get(public_path('jsons/countries.json')), true);
    }
}
