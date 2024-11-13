<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0

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
<<<<<<< HEAD
        ], 201);
    }

    public function capNhatSanpham(Request $request, $id)
    {
        // Lấy tất cả các tham số từ request
        $params = $request->all();
        // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu không
        $sanPham = SanPham::find($id);

        if (!$sanPham) {
            return response()->json([
                'message' => 'San pham không tồn tại',
            ], 404);
        }
        // Nếu có ảnh mới, lưu ảnh đó
        // Nếu hình ảnh không thay đổi thì sao -> giữ lại đường dẫn hình ảnh cũ
        if (isset($params['hinh_anh'])) {
            $params['hinh_anh'] = $this->saveImage($params['hinh_anh']);
        }
        // Cập nhật các thông tin của sản phẩm
        $sanPham->update($params);

        return response()->json([
            
            'message' => 'Cập nhật sản phẩm thành công',
            'data' => $sanPham,

        ], 200);
    }



=======
        ], 200);
    }

>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
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
<<<<<<< HEAD
        ], 201);
    }
    public function laySanphamTheoId(Request $request, $id)
    {
        $result = SanPham::find($id);

        if (!$result) {
            return response()->json([
                'message' => 'Khong tim thay thong tin'
            ], 404);
        }

        return response()->json([
            'sanpham' => $result,
        ], 201);
    }
    private function saveImage($image)
    {
        // Check if image is a valid base64 string
        if (preg_match('/^data:image\/(\w+);base64,/', $image, $type)) {
            // Remove the base64 prefix and decode the data
            $image = substr($image, strpos($image, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif, etc.

            // Validate image type
            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png'])) {
                throw new \Exception('Invalid image type');
            }

            // Replace spaces with plus signs and decode the base64 string
=======
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
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
            $image = str_replace(' ', '+', $image);
            $image = base64_decode($image);

            if ($image === false) {
<<<<<<< HEAD
                throw new \Exception('Base64 decode failed');
            }
        } else {
            throw new \Exception('Invalid base64 image data');
        }

        // Set the file name and path
        $fileName = Str::random() . '.' . $type;
        $filePath = 'images/' . $fileName;

        // Save the image using Laravel's Storage facade
        Storage::disk('public')->put($filePath, $image);

        // Return the public URL to the saved image
        return Storage::url($filePath);
=======
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
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    }
}
