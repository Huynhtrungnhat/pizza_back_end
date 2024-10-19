<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SanPhamController extends Controller
{
    public function themSanpham(Request $request)
    {
        $params = $request->all();

        $params['hinh_anh'] = $this->saveImage($params['hinh_anh']);

        $result = SanPham::create($params);

        if (!$result) {
            return response()->json([
                'message' => 'Them san pham that bai'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'message' => 'Them san pham thanh cong',
            'data' => $result,
        ], 200);
    }

    public function laySanpham()
    {

        $result = SanPham::all();

        if (!$result) {
            return response()->json([
                'message' => 'Khong co san pham'
            ], 500);
        }
        // unset($params['password']);
        return response()->json([
            'data' => $result,
        ], 200);
    }
    private function saveImage($image)
    {
        // Check if image is valid base64 string
        if (preg_match('/^data:image\/(\w+);base64,/', $image, $type)) {
            // Take out the base64 encoded text without mime type
            $image = substr($image, strpos($image, ',') + 1);
            // Get file extension
            $type = strtolower($type[1]); // jpg, png, gif

            // Check if file is an image
            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                throw new \Exception('invalid image type');
            }
            $image = str_replace(' ', '+', $image);
            $image = base64_decode($image);

            if ($image === false) {
                throw new \Exception('base64_decode failed');
            }
        } else {
            throw new \Exception('did not match data URI with image data');
        }

        $dir = 'storage/images/';
        $file = Str::random() . '.' . $type;
        $absolutePath = public_path($dir);
        $relativePath = $dir . $file;
        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }
        file_put_contents($relativePath, $image);

        return $relativePath;
    }
}
