<?php

namespace Tests\Feature\Categories\Ui;

use App\Models\Category;
use App\Models\Asset;
use App\Models\User;
use Tests\TestCase;

class UpdateCategoriesTest extends TestCase
{
    public function testPermissionRequiredToStoreCategory()
    {
        $this->actingAs(User::factory()->create())
            ->post(route('categories.store'), [
                'name' => 'Test Category',
                'category_type' => 'asset'
            ])
            ->assertStatus(403)
            ->assertForbidden();
    }

    public function testUserCanCreateCategories()
    {
        $this->actingAs(User::factory()->superuser()->create())
            ->post(route('categories.store'), [
                'name' => 'Test Category',
                'category_type' => 'asset'
            ])
            ->assertStatus(302)
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('categories.index'));

        $this->assertTrue(Category::where('name', 'Test Category')->exists());
    }

    public function testUserCanEditAssetCategory()
    {
        $category = Category::factory()->forAssets()->create(['name' => 'Test Category']);
        $this->assertTrue(Category::where('name', 'Test Category')->exists());

        $response = $this->actingAs(User::factory()->superuser()->create())
            ->put(route('categories.update', ['category' => $category]), [
                'name' => 'Test Category Edited',
            ])
            ->assertStatus(302)
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('categories.index'));

        $this->followRedirects($response)->assertSee('Success');
        $this->assertTrue(Category::where('name', 'Test Category Edited')->exists());

    }

    public function testUserCanChangeCategoryTypeIfNoAssetsAssociated()
    {
        $category = Category::factory()->forAssets()->create(['name' => 'Test Category']);
        $this->assertTrue(Category::where('name', 'Test Category')->exists());

        $response = $this->actingAs(User::factory()->superuser()->create())
            ->from(route('categories.edit', ['category' => $category->id]))
            ->put(route('categories.update', ['category' => $category]), [
                'name' => 'Test Category Edited',
                'category_type' => 'accessory',
            ])
            ->assertSessionHasNoErrors()
            ->assertStatus(302)
            ->assertRedirect(route('categories.index'));

        $this->followRedirects($response)->assertSee('Success');
        $this->assertTrue(Category::where('name', 'Test Category Edited')->exists());

    }

    public function testUserCannotChangeCategoryTypeIfAssetsAreAssociated()
    {
        Asset::factory()->count(5)->laptopMbp()->create();
        $category = Category::where('name', 'Laptops')->first();

        $response = $this->actingAs(User::factory()->superuser()->create())
            ->from(route('categories.edit', ['category' => $category->id]))
            ->put(route('categories.update', ['category' => $category]), [
                'name' => 'Test Category Edited',
                'category_type' => 'accessory',
            ])
            ->assertSessionHasErrors(['category_type'])
            ->assertInvalid(['category_type'])
            ->assertStatus(302)
            ->assertRedirect(route('categories.edit', ['category' => $category->id]));

        $this->followRedirects($response)->assertSee(trans('general.error'));
        $this->assertFalse(Category::where('name', 'Test Category Edited')->exists());

    }

}
