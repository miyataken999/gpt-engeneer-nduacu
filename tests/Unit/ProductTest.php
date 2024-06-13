namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_product_creation()
    {
        $product = new Product();
        $product->name = 'Test Product';
        $product->description = 'This is a test product';
        $product->price = 10.99;
        $product->save();
        $this->assertTrue($product->exists);
    }
}