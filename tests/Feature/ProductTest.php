namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }

    public function test_create()
    {
        $response = $this->get('/products/create');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 10.99,
        ]);
        $response->assertRedirect('/products');
    }

    public function test_show()
    {
        $product = factory(Product::class)->create();
        $response = $this->get('/products/' . $product->id);
        $response->assertStatus(200);
    }

    public function test_edit()
    {
        $product = factory(Product::class)->create();
        $response = $this->get('/products/' . $product->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $product = factory(Product::class)->create();
        $response = $this->patch('/products/' . $product->id, [
            'name' => 'Updated Product',
            'description' => 'This is an updated product',
            'price' => 20.99,
        ]);
        $response->assertRedirect('/products');
    }

    public function test_destroy()
    {
        $product = factory(Product::class)->create();
        $response = $this->delete('/products/' . $product->id);
        $response->assertRedirect('/products');
    }
}