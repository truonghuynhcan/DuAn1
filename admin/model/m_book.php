<?php
// Hình ảnh sách -------------------------------------------------------------------------
/**
 * Hàm upload ảnh mới
 * @param array $newImage Mảng chứa thông tin ảnh mới từ $_FILES['newImage']
 * @return string|bool Trả về đường dẫn ảnh nếu upload thành công, ngược lại trả về false.
 */
function uploadNewImage($newImage)
{
    $uploadDir = 'upload/sach/';  // Đường dẫn lưu trữ ảnh

    // Kiểm tra xem có lỗi upload không
    if ($newImage['error'] !== UPLOAD_ERR_OK) {
        echo "Lỗi khi upload ảnh.";
        return false;
    }

    // Kiểm tra định dạng ảnh (chỉ chấp nhận jpg, jpeg, png)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $fileExtension = pathinfo($newImage['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
        echo "Chỉ chấp nhận định dạng ảnh jpg, jpeg, png.";
        return false;
    }

    // Tạo tên file mới để tránh trùng lặp
    $newFileName = uniqid() . '_' . $newImage['name'];

    // Đường dẫn đầy đủ để lưu trữ ảnh
    $uploadPath = $uploadDir . $newFileName;

    // Di chuyển ảnh từ thư mục tạm sang thư mục lưu trữ
    if (move_uploaded_file($newImage['tmp_name'], $uploadPath)) {
        // Trả về đường dẫn ảnh nếu upload thành công
        return $uploadPath;
    } else {
        echo "Lỗi khi lưu trữ ảnh.";
        return false;
    }
}

// Hàm lưu tên ảnh và thay thế đường dẫn cũ trong CSDL
function saveImageNameAndReplace($imageId, $imageName)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Lấy đường dẫn ảnh cũ
            $oldImagePath = getImagePathById($imageId); // Hàm này cần được thực hiện

            // Thay thế đường dẫn cũ trong CSDL với đường dẫn mới
            $sql = "UPDATE hinhanh SET DuongDan = :imageName WHERE Id = :imageId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':imageId', $imageId, PDO::PARAM_INT);
            $stmt->bindParam(':imageName', $imageName, PDO::PARAM_STR);
            $stmt->execute();

            // Xóa ảnh cũ nếu cần
            if ($oldImagePath && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $conn = null;
        } catch (PDOException $e) {
            // Xử lý lỗi khi thêm tên ảnh và thay thế đường dẫn cũ
            echo "Lỗi thêm tên ảnh và thay thế đường dẫn cũ: " . $e->getMessage();
        }
    }
}
// hàm xóa ảnh trong bảng hinhanh
function deleteImageRecordsByBookId($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "DELETE FROM hinhanh WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}

// Hàm xóa nhiều file ảnh trong thư mục 
function deleteImages($imagePaths)
{
    foreach ($imagePaths as $path) {
        if (file_exists($path)) {
            unlink('upload/sach' . $path);
        }
    }
}

// Hàm lấy đường dẫn ảnh dựa trên ID hình ảnh
function getImagePathById($imageId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT DuongDan FROM hinhanh WHERE Id = :imageId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':imageId', $imageId, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $conn = null;

            // Trả về đường dẫn ảnh
            return $result['DuongDan'];
        } catch (PDOException $e) {
            // Xử lý lỗi khi lấy đường dẫn ảnh
            echo "Lỗi lấy đường dẫn ảnh: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

// hàm LẤY MẢNG DuongDan hình ảnh liên quan đến id sách
function getImagePathsByBookId($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT DuongDan FROM hinhanh WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);

            $conn = null;
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
/**
 * Hàm lấy mảng hình ảnh liên quan đến Id sách
 * @param int $bookId Id của sách
 * @return array|false Mảng các hình ảnh hoặc false nếu có lỗi
 */
function getImageByBookId($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT * FROM hinhanh WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Sử dụng fetchAll để lấy tất cả các dòng dữ liệu, không chỉ lấy giá trị của một cột
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $conn = null;
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    } else {
        return false;
    }
}



// Hàm xóa SQL hình ảnh liên quan đến sách:
function deleteBookImages($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Lấy tên tất cả các hình ảnh liên quan đến sách và tác giả
            $sql = "SELECT DuongDan FROM hinhanh WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            $imagePaths = $stmt->fetchAll(PDO::FETCH_COLUMN);

            // Xóa hình ảnh từ ổ đĩa
            deleteImages($imagePaths);

            // Xóa bản ghi hình ảnh từ CSDL
            $sqlDeleteImages = "DELETE FROM hinhanh WHERE Id_Sach = :bookId";
            $stmtDeleteImages = $conn->prepare($sqlDeleteImages);
            $stmtDeleteImages->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmtDeleteImages->execute();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}

// TÁC GIẢ -------------------------------------------------------------------------
function updateAuthor($authorId, $newAuthorName)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Sử dụng prepared statement để tránh SQL injection
            $sql = "UPDATE tacgia SET HoVaTen = :newAuthorName WHERE Id = :authorId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':newAuthorName', $newAuthorName, PDO::PARAM_STR);
            $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);

            // Thực hiện câu lệnh SQL
            $stmt->execute();

            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}

function getAuthorById($authorId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT t.*, COUNT(stg.Id_Sach) as bookCount 
                    FROM tacgia t 
                    LEFT JOIN sach_tacgia stg ON t.Id = stg.Id_TacGia
                    WHERE t.Id = :authorId
                    GROUP BY t.Id";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $conn = null;
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

function deleteAuthorById($authorId)
{
    // Kiểm tra xem có sách nào liên kết đến tác giả không
    // if (hasBooksLinkedToAuthor($authorId)) {
    //     echo '<script>';
    //     echo 'alert("Tác giả có sách liên kết, không thể xóa!");';
    //     echo 'window.location.href = "index.php?pg=ad&active=author_management";';
    //     echo '</script>';
    //     return;
    // }

    // Nếu không có sách liên kết, thực hiện xóa tác giả
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Bắt đầu một giao dịch để đảm bảo tính nhất quán
            $conn->beginTransaction();

            // Xóa tác giả
            $sql = "DELETE FROM tacgia WHERE Id = :authorId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
            $stmt->execute();

            // Commit giao dịch
            $conn->commit();

            // Đóng kết nối
            $conn = null;

            // echo '<script>';
            // echo 'alert("Xóa tác giả thành công!");';
            // echo 'window.location.href = "index.php?pg=ad&active=author_management";';
            // echo '</script>';
        } catch (PDOException $e) {
            // Rollback nếu có lỗi
            // $conn->rollBack();
            echo "Lỗi: " . $e->getMessage();
        }
    } else {
        echo "Không thể kết nối đến cơ sở dữ liệu.";
    }
}

// Hàm kiểm tra xem có sách nào liên kết đến tác giả không
function hasBooksLinkedToAuthor($authorId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Kiểm tra xem có sách nào liên kết đến tác giả không
            $sql = "SELECT COUNT(*) FROM sach_tacgia WHERE Id_TacGia = :authorId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchColumn();

            // Đóng kết nối
            $conn = null;

            return ($result > 0);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    } else {
        echo "Không thể kết nối đến cơ sở dữ liệu.";
        return false;
    }
}


// hàm kiểm tra xem một tác giả có liên kết với thể loại khác hay không
function isAuthorLinkedToOtherCategories($authorId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Kiểm tra xem tác giả có liên kết với thể loại khác hay không
            $sql = "SELECT COUNT(*) FROM sach_tacgia WHERE Id_TacGia = :authorId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
            $stmt->execute();

            $count = $stmt->fetchColumn();

            // Đóng kết nối
            $conn = null;

            return $count > 1; // Nếu tác giả liên kết với nhiều hơn một sách, trả về true
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }

    return false;
}

// Hàm xóa liên kết giữa sách và tác giả:
function deleteBookAuthorLinks($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Xóa liên kết sách và tác giả
            $sql = "DELETE FROM sach_tacgia WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}

function getAuthorsWithBookCount($limit, $search)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT tg.Id, tg.HoVaTen, COUNT(stg.Id_Sach) as bookCount
                    FROM tacgia tg
                    LEFT JOIN sach_tacgia stg ON tg.Id = stg.Id_TacGia
                    LEFT JOIN sach s ON stg.Id_Sach = s.Id
                    WHERE tg.HoVaTen LIKE :search
                    GROUP BY tg.Id, tg.HoVaTen
                    LIMIT :limit";

            // Thực thi câu truy vấn
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();

            // Lấy kết quả
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $results;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
function getAuthorCount()
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(Id) as authorCount FROM tacgia";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['authorCount'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
// THỂ LOẠI -------------------------------------------------------------------------
// Hàm cập nhật thể loại
function updateGenre($genreId, $tenTheLoai) {
    // Thực hiện cập nhật thể loại trong cơ sở dữ liệu
    // Sử dụng PDO hoặc MySQLi để thực hiện truy vấn cập nhật

    // Ví dụ sử dụng PDO:
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "UPDATE theloai SET TenTheLoai = :tenTheLoai WHERE Id = :genreId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':tenTheLoai', $tenTheLoai, PDO::PARAM_STR);
            $stmt->bindParam(':genreId', $genreId, PDO::PARAM_INT);
            $stmt->execute();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi cập nhật thể loại: " . $e->getMessage();
        }
    }
}
function getGenreById($genreId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT t.*, COUNT(stl.Id_Sach) as bookCount 
                    FROM theloai t 
                    LEFT JOIN sach_theloai stl ON t.Id = stl.Id_TheLoai
                    WHERE t.Id = :genreId
                    GROUP BY t.Id";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':genreId', $genreId, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $conn = null;
            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}


// hàm tạo hoặc update thể loại -> trả về id của thể loại 
function createOrUpdateTheLoai($tenTheLoai)
{
    // Kết nối CSDL
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Kiểm tra xem thể loại đã tồn tại chưa
            $sqlCheckExist = "SELECT Id FROM theloai WHERE TenTheLoai = :tenTheLoai";
            $stmtCheckExist = $conn->prepare($sqlCheckExist);
            $stmtCheckExist->bindParam(':tenTheLoai', $tenTheLoai, PDO::PARAM_STR);
            $stmtCheckExist->execute();
            $existingTheLoai = $stmtCheckExist->fetch(PDO::FETCH_ASSOC);

            // Nếu thể loại đã tồn tại, trả về ID của thể loại đó
            if ($existingTheLoai) {
                return $existingTheLoai['Id'];
            }

            // Nếu thể loại chưa tồn tại, thêm mới vào bảng TheLoai
            $sqlInsert = "INSERT INTO theloai (TenTheLoai) VALUES (:tenTheLoai)";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bindParam(':tenTheLoai', $tenTheLoai, PDO::PARAM_STR);
            $stmtInsert->execute();

            // Trả về ID của thể loại vừa thêm mới
            return $conn->lastInsertId();
        } catch (PDOException $e) {
            // Xử lý lỗi nếu có
            echo "Error: " . $e->getMessage();
        } finally {
            // Đóng kết nối
            $conn = null;
        }
    }

    return false;
}
// truy xuất id thể loại theo id sách
function getCategoriesByBookId($bookId)
{
    try {
        $conn = pdo_get_connection();

        if ($conn) {
            // Truy vấn để lấy thông tin thể loại của sách
            $sql = "SELECT t.Id FROM theloai t
                    INNER JOIN sach_theloai st ON t.Id = st.Id_TheLoai
                    WHERE st.Id_Sach = :bookId";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Lấy kết quả
            $categoryIds = $stmt->fetchAll(PDO::FETCH_COLUMN);

            // Đóng kết nối
            $conn = null;

            return $categoryIds;
        }
    } catch (PDOException $e) {
        // Ném exception để cho phép người gọi hàm xử lý lỗi
        throw new Exception("Error retrieving categories: " . $e->getMessage());
    }

    return false;
}

// hàm xóa thể loại có kiểm tra
function deleteCategoryById($categoryId)
{
    // // Kiểm tra xem có sách nào liên kết đến thể loại không
    // if (hasBooksLinkedToCategory($categoryId)) {
    //     echo '<script>';
    //     echo 'alert("Thể loại có sách liên kết, không thể xóa!");';
    //     echo 'window.location.href = "index.php?pg=ad&active=category_management";';
    //     echo '</script>';
    //     return;
    // }

    // Nếu không có sách liên kết, thực hiện xóa thể loại
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Bắt đầu một giao dịch để đảm bảo tính nhất quán
            $conn->beginTransaction();

            // Xóa thể loại
            $sql = "DELETE FROM theloai WHERE Id = :categoryId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $stmt->execute();

            // Commit giao dịch
            $conn->commit();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            // Rollback nếu có lỗi
            // $conn->rollBack();
            echo "Lỗi: " . $e->getMessage();
        }
    } else {
        echo "Không thể kết nối đến cơ sở dữ liệu.";
    }
}

// Hàm kiểm tra xem có sách nào liên kết đến thể loại không
function hasBooksLinkedToCategory($categoryId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Kiểm tra xem có sách nào liên kết đến thể loại không
            $sql = "SELECT COUNT(*) FROM sach_theloai WHERE Id_TheLoai = :categoryId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchColumn();

            // Đóng kết nối
            $conn = null;

            return ($result > 0);
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    } else {
        echo "Không thể kết nối đến cơ sở dữ liệu.";
        return false;
    }
}



// Hàm xóa liên kết giữa sách và thể loại:
function deleteBookCategoryLinks($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Xóa liên kết sách và thể loại
            $sql = "DELETE FROM sach_theloai WHERE Id_Sach = :bookId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}

// hàm truy xuất id.tl, tên.tl, và số lượng sách trong tl 
function getCategoriesWithBookCount($limit, $search)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Kiểm tra giá trị hợp lệ cho $limit
            if (!is_int($limit) || $limit <= 0) {
                echo "Lỗi tham số: \$limit phải là một số nguyên dương.";
                return null;
            }

            // Kiểm tra giá trị hợp lệ cho $search
            if ($search !== null && !is_string($search)) {
                echo "Lỗi tham số: \$search phải là một chuỗi.";
                return null;
            }

            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT tl.Id, tl.TenTheLoai, COUNT(stl.Id_Sach) as bookCount
                    FROM theloai tl
                    LEFT JOIN sach_theloai stl ON tl.Id = stl.Id_TheLoai";

            // Thêm điều kiện tìm kiếm nếu $search có giá trị
            if ($search !== null && $search !== '') {
                $sql .= " WHERE tl.TenTheLoai LIKE :search";
            }

            // Tiếp tục câu truy vấn
            $sql .= " GROUP BY tl.Id, tl.TenTheLoai
                      ORDER BY bookCount DESC
                      LIMIT :limit";

            // Thực thi câu truy vấn
            $stmt = $conn->prepare($sql);

            // Bắt đầu bind tham số
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

            // Bind thêm tham số nếu có điều kiện tìm kiếm
            if ($search !== null && $search !== '') {
                $searchParam = "%{$search}%";
                $stmt->bindParam(':search', $searchParam, PDO::PARAM_STR);
            }

            // Thực thi câu truy vấn
            $stmt->execute();

            // Lấy kết quả
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

function getCategoryCount()
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as total FROM theloai";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['total'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

// SÁCH -------------------------------------------------------------------------
//truy vấn thông tin sách theo thể loại và lấy hình ảnh
function getBookByAuthor($authorId)
{
    /**
     * Thực hiện truy vấn thông tin sách theo thể loại và lấy hình ảnh
     * @param int $authorId ID của thể loại
     * @return array Mảng chứa thông tin sách và hình ảnh
     */
    // Câu truy vấn SQL
    $sql = "SELECT s.*, GROUP_CONCAT(DISTINCT t.HoVaTen SEPARATOR ', ') AS TacGia, h.TenAnh AS TenHinhAnh, h.DuongDan AS DuongDan
        FROM sach s
        INNER JOIN sach_tacgia st ON s.Id = st.Id_Sach
        INNER JOIN tacgia t ON st.Id_TacGia = t.Id
        LEFT JOIN hinhanh h ON s.Id = h.Id_Sach
        WHERE t.Id = :authorId
        GROUP BY s.Id";

    // Thực hiện truy vấn sử dụng PDO
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
        $stmt->execute();

        // Lấy kết quả
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        // Xử lý lỗi
        echo "Lỗi truy vấn: " . $e->getMessage();
        return array();
    } finally {
        unset($conn);
    }
}
//truy vấn thông tin sách theo thể loại và lấy hình ảnh
function getBookByGenre($genreId)
{
    /**
     * Thực hiện truy vấn thông tin sách theo thể loại và lấy hình ảnh
     * @param int $genreId ID của thể loại
     * @return array Mảng chứa thông tin sách và hình ảnh
     */
    // Câu truy vấn SQL
    $sql = "SELECT s.*, GROUP_CONCAT(DISTINCT t.TenTheLoai SEPARATOR ', ') AS TheLoai, h.TenAnh AS TenHinhAnh, h.DuongDan AS DuongDan
        FROM sach s
        INNER JOIN sach_theloai st ON s.Id = st.Id_Sach
        INNER JOIN theloai t ON st.Id_TheLoai = t.Id
        LEFT JOIN hinhanh h ON s.Id = h.Id_Sach
        WHERE t.Id = :idTheLoai
        GROUP BY s.Id";

    // Thực hiện truy vấn sử dụng PDO
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idTheLoai', $genreId, PDO::PARAM_INT);
        $stmt->execute();

        // Lấy kết quả
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        // Xử lý lỗi
        echo "Lỗi truy vấn: " . $e->getMessage();
        return array();
    } finally {
        unset($conn);
    }
}
// * Cập nhật thông tin sách trong CSDL
function update_sach($bookId, $updatedData)
{
    /**
     * Cập nhật thông tin sách trong CSDL
     * @param int $bookId ID của sách cần cập nhật
     * @param array $updatedData Mảng chứa thông tin sách mới
     * @throws PDOException lỗi thực thi câu lệnh SQL
     */
    try {
        $conn = pdo_get_connection();

        // Tạo câu lệnh SQL UPDATE
        $sql = "UPDATE sach SET 
                `TenSach` = :tenSach,
                `DonGia` = :donGia,
                `GiamGia` = :giamGia,
                `NamXuatBan` = :namXuatBan,
                `NhaXuatBan` = :nhaXuatBan,
                `SoLuongConHang` = :soLuongConHang,
                `MoTa` = :moTa,
                `MoTaChiTiet` = :moTaChiTiet,
                `TrangThai` = :trangThai
                WHERE `Id` = :bookId";

        // Thực hiện cập nhật thông tin sách
        pdo_executeHaveArray(
            $sql,
            array(
                ':tenSach' => $updatedData['TenSach'],
                ':donGia' => $updatedData['DonGia'],
                ':giamGia' => $updatedData['GiamGia'],
                ':namXuatBan' => $updatedData['NamXuatBan'],
                ':nhaXuatBan' => $updatedData['NhaXuatBan'],
                ':soLuongConHang' => $updatedData['SoLuongConHang'],
                ':moTa' => $updatedData['MoTa'],
                ':moTaChiTiet' => $updatedData['MoTaChiTiet'],
                ':trangThai' => $updatedData['TrangThai'],
                ':bookId' => $bookId
            )
        );
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function deleteBookById($bookId)
{
    // Kiểm tra id sách có tồn tại không
    if (!isBookExist($bookId)) {
        echo "Sách không tồn tại.";
        return;
    }

    // Tìm đường dẫn hình ảnh và xóa các file ảnh
    // $imagePaths = getImagePathsByBookId($bookId);
    // deleteImages($imagePaths);

    // Tìm và xóa dữ liệu SQL hình ảnh có liên kết với id sách
    deleteImageRecordsByBookId($bookId);

    // Tìm và xóa liên kết giữa sach_tacgia
    deleteBookAuthorLinks($bookId);
    // Tìm và xóa liên kết giữa sach_theloai
    deleteBookCategoryLinks($bookId);

    // Tìm và xóa sách
    deleteBook($bookId);

    echo "Xóa sách thành công.";
}

// hàm xóa sách
function deleteBook($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "DELETE FROM sach WHERE Id = :bookId";

            // Thực thi câu truy vấn
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Đóng kết nối
            $conn = null;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
        }
    }
}
// Hàm kiểm tra id sách có tồn tại không
function isBookExist($bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as count FROM sach WHERE Id = :bookId";

            // Thực thi câu truy vấn
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $stmt->execute();

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['count'] > 0;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    } else {
        return false;
    }
}
// hàm truy suất danh sách sách
function getBookAll($limit)
{
    $sql = "SELECT * FROM sach ORDER BY Id ASC LIMIT $limit";
    return pdo_query($sql);
}
// hàm truy xuất số lượng sách
function getBookCount()
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as total FROM sach";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['total'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
// function sach_detail($id_sach)
// {
//     $sql = "SELECT
//         s.*, -- Thông tin sách
//         GROUP_CONCAT(DISTINCT t.HoVaTen SEPARATOR ', ') AS TacGia, -- Danh sách tác giả
//         GROUP_CONCAT(DISTINCT tl.TenTheLoai SEPARATOR ', ') AS TheLoai -- Danh sách thể loại
//         FROM
//             sach s
//         JOIN
//             sach_tacgia st ON s.Id = st.Id_Sach
//         JOIN
//             tacgia t ON st.Id_TacGia = t.Id
//         JOIN
//             sach_theloai stl ON s.Id = stl.Id_Sach
//         JOIN
//             theloai tl ON stl.Id_TheLoai = tl.Id
//         WHERE
//             s.Id = $id_sach
//         GROUP BY
//             s.Id;
//         ";
//     return pdo_query($sql)[0];
// }
?>