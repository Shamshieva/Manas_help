<?php

namespace App\Http\Services\Admin;

use App\Http\Services\UploadService;
use App\Models\Subcategory;
use Exception;
class SubcategoryService
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function store(array $data): array {
        try {
            $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            Subcategory::create($data);
            return ['notification' => 'Subcategory created successfully.'];
        } catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }


    public function update(Subcategory $subcategory, array $data, bool $exists_image): array
    {
        try {
            if ($exists_image){
                $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            }
            $subcategory->update($data);
            return ['notification' => 'Subcategory updated successfully.'];
        }
        catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }


}
