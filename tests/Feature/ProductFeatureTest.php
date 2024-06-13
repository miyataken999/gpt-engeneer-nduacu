namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;

class ProductFeatureTest extends TestCase
{
    public function test_product_index()
    {
        $response = $this->get(route('products.index'));
        $response->assertStatus(200);
    }

    public function test_product_store()
    {
        $response = $this->post(route('products.store'), [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 10.99,
        ]);
        $response->assertRedirect(route('products.index'));
    }
}