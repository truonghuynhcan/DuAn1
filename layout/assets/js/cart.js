// Lấy giỏ hàng từ biến JavaScript được tạo từ PHP
var cart = cartDataFromPHP || [];

function addToCart(productId, productName, unitPrice, quantity) {
    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    var existingItemIndex = cart.findIndex(item => item.productId === productId);

    if (existingItemIndex !== -1) {
        // Nếu sản phẩm đã tồn tại, tăng số lượng
        cart[existingItemIndex].quantity += quantity;
    } else {
        // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
        cart.push({
            productId: productId,
            productName: productName,
            unitPrice: unitPrice,
            quantity: quantity
        });
    }

    // Cập nhật giỏ hàng vào Session Storage
    sessionStorage.setItem('cart', JSON.stringify(cart));

    // Hiển thị thông báo hoặc thực hiện các hành động khác nếu cần
    alert('Sản phẩm đã được thêm vào giỏ hàng!');
}




function addToCart(productId, productName, unitPrice, quantity) {
    // Lấy giỏ hàng từ Session Storage hoặc tạo mới nếu chưa tồn tại
    var cart = JSON.parse(sessionStorage.getItem('cart')) || [];

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    var existingItemIndex = cart.findIndex(item => item.productId === productId);

    if (existingItemIndex !== -1) {
        // Nếu sản phẩm đã tồn tại, cập nhật số lượng
        cart[existingItemIndex].quantity += quantity;
    } else {
        // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
        cart.push({
            productId: productId,
            productName: productName,
            unitPrice: unitPrice,
            quantity: quantity
        });
    }

    // Cập nhật giỏ hàng vào Session Storage
    sessionStorage.setItem('cart', JSON.stringify(cart));

    // Hiển thị thông báo hoặc thực hiện các hành động khác nếu cần
    alert('Sản phẩm đã được thêm vào giỏ hàng!');

    // Gọi hàm để cập nhật giỏ hàng trên server (ví dụ: thông qua AJAX)
    updateCartOnServer(cart);
}

// Hàm để cập nhật giỏ hàng trên server
function updateCartOnServer(cart) {
    // Gửi yêu cầu AJAX để cập nhật giỏ hàng trên server
    var xhr = new XMLHttpRequest();
    var url = 'model/m_cart.php'; // Đường dẫn đến file PHP xử lý cập nhật giỏ hàng
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // In phản hồi từ server (có thể xóa dòng này trong production)
        }
    };

    // Chuyển đổi mảng giỏ hàng thành chuỗi JSON và gửi đi
    var jsonData = JSON.stringify({ cart: cart });
    xhr.send(jsonData);
}
