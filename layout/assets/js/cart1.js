async function updateSession(totalQuantity, hoaDonID) {
    try {
        const response = await fetch('update_session.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ totalQuantity: totalQuantity, hoaDonID: hoaDonID }),
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log('Session updated:', data);
    } catch (error) {
        console.error('Error updating session:', error);
    }
}

// Gọi hàm chenHoaDon và lấy ID hóa đơn mới chèn
const hoaDonID = chenHoaDon('Tên Người Nhận', 'Số Điện Thoại', 'Địa Chỉ');

// Sử dụng hàm updateSession để cập nhật session
updateSession(totalQuantity, hoaDonID);

function updateCart() {
    var cartTableBody = document.getElementById("cartTableBody");
    var cartItems = JSON.parse(sessionStorage.getItem("cart")) || [];

    // Xóa nội dung cũ
    cartTableBody.innerHTML = "";

    var totalQuantity = 0;
    var totalAmount = 0;

    // Hiển thị sản phẩm trong giỏ hàng
    cartItems.forEach(function (item) {
        console.log(item)
        var row = cartTableBody.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);

        cell1.innerHTML = item.id;
        cell2.innerHTML = item.name;
        cell3.innerHTML = item.price;
        cell4.innerHTML = item.quantity;

        // Tính thành tiền
        var totalItemAmount = item.price * item.quantity;
        totalAmount += totalItemAmount;
        cell5.innerHTML = totalItemAmount;

        // Nút xóa
        var deleteButton = document.createElement("button");
        deleteButton.innerHTML = 'Xóa';
        deleteButton.className = "nut";
        deleteButton.onclick = function () {
            removeFromCart(item.id);
        };
        cell6.appendChild(deleteButton);

        // Cập nhật tổng số lượng
        totalQuantity += parseInt(item.quantity);
        row.appendChild(cell1);
        row.appendChild(cell2);
        row.appendChild(cell3);
        row.appendChild(cell4);
        row.appendChild(cell5);
        row.appendChild(cell6);
        cartTableBody.appendChild(row)
    });

    // Hiển thị tổng số lượng và tổng tiền
    document.getElementById("totalQuantity").innerText = totalQuantity;
    document.getElementById("totalAmount").innerText = totalAmount + " VND";

    // Sử dụng hàm updateSession để cập nhật session
    updateSession(totalQuantity, hoaDonID);
}

function removeFromCart(id) {
    // Lấy thông tin giỏ hàng từ sessionStorage
    var cart = JSON.parse(sessionStorage.getItem("cart")) || [];

    // Lọc ra sản phẩm cần xóa
    var updatedCart = cart.filter(item => !(item.id === id));

    // Lưu lại thông tin giỏ hàng mới
    sessionStorage.setItem("cart", JSON.stringify(updatedCart));

    alert("Đã xóa sản phẩm khỏi giỏ hàng!");
    updateCart();
}

// Gọi hàm updateCart khi trang được tải
document.addEventListener("DOMContentLoaded", updateCart);

// Hiển thị biểu tượng giỏ hàng và kích vào sẽ mở giỏ hàng
document.getElementById("cartIcon").addEventListener("click", function () {
    document.getElementById("cartTableBody").scrollIntoView({ behavior: 'smooth' });
});

function addToCart(id, name, price, quantity) {
    // Lấy thông tin giỏ hàng từ sessionStorage
    var cart = JSON.parse(sessionStorage.getItem("cart")) || [];

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    var index = cart.findIndex(item => item.id === id);
    if (index >= 0) {
        // Nếu sản phẩm đã tồn tại, tăng số lượng
        cart[index].quantity = parseInt(cart[index].quantity) + parseInt(quantity);
    } else {
        // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
        cart.push({
            name: name,
            id: id,
            quantity: quantity,
            price: price
        });
    }

    // Lưu thông tin giỏ hàng vào sessionStorage
    sessionStorage.setItem("cart", JSON.stringify(cart));

    alert("Đã thêm sản phẩm vào giỏ hàng!");
    updateCart();
}




// async function updateSession(totalQuantity, hoaDonID) {
//     try {
//         const response = await fetch('update_session.php', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//             },
//             body: JSON.stringify({ totalQuantity: totalQuantity, hoaDonID: hoaDonID }),
//         });

//         if (!response.ok) {
//             throw new Error('Network response was not ok');
//         }

//         const data = await response.json();
//         console.log('Session updated:', data);
//     } catch (error) {
//         console.error('Error updating session:', error);
//     }
// }

// // Gọi hàm chenHoaDon và lấy ID hóa đơn mới chèn
// const hoaDonID = chenHoaDon('Tên Người Nhận', 'Số Điện Thoại', 'Địa Chỉ');

// // Sử dụng hàm updateSession để cập nhật session
// updateSession(totalQuantity, hoaDonID);

// function updateCart() {
//     var cartTableBody = document.getElementById("cartTableBody");
//     var cartItems = JSON.parse(sessionStorage.getItem("cart")) || [];

//     // Xóa nội dung cũ
//     cartTableBody.innerHTML = "";

//     var totalQuantity = 0;
//     var totalAmount = 0;

//     // Hiển thị sản phẩm trong giỏ hàng
//     cartItems.forEach(function (item) {
//         console.log(item)
//         var row = cartTableBody.insertRow();
//         var cell1 = row.insertCell(0);
//         var cell2 = row.insertCell(1);
//         var cell3 = row.insertCell(2);
//         var cell4 = row.insertCell(3);
//         var cell5 = row.insertCell(4);
//         var cell6 = row.insertCell(5);

//         cell1.innerHTML = item.id;
//         cell2.innerHTML = item.name;
//         cell3.innerHTML = item.price;
//         cell4.innerHTML = item.quantity;


//         // Tính thành tiền
//         var totalItemAmount = item.price * item.quantity;
//         totalAmount += totalItemAmount;
//         cell5.innerHTML = totalItemAmount;

//         // Nút xóa
//         var deleteButton = document.createElement("button");
//         deleteButton.innerHTML = 'Xóa';
//         deleteButton.className = "nut";
//         deleteButton.onclick = function () {
//             removeFromCart(item.id);
//         };
//         cell6.appendChild(deleteButton);

//         // Cập nhật tổng số lượng
//         totalQuantity += parseInt(item.quantity);
//         row.appendChild(cell1);
//         row.appendChild(cell2);
//         row.appendChild(cell3);
//         row.appendChild(cell4);
//         row.appendChild(cell5);
//         row.appendChild(cell6);
//         cartTableBody.appendChild(row)
//     });

//     // Hiển thị tổng số lượng và tổng tiền
//     document.getElementById("totalQuantity").innerText = totalQuantity;
//     document.getElementById("totalAmount").innerText = totalAmount + " VND";

//     updateSession(totalQuantity);

// }


// function removeFromCart(id, season) {
//     // Lấy thông tin giỏ hàng từ sessionStorage
//     var cart = JSON.parse(sessionStorage.getItem("cart")) || [];

//     // Lọc ra sản phẩm cần xóa
//     var updatedCart = cart.filter(item => !(item.id === id));

//     // Lưu lại thông tin giỏ hàng mới
//     sessionStorage.setItem("cart", JSON.stringify(updatedCart));

//     alert("Đã xóa sản phẩm khỏi giỏ hàng!");
//     updateCart();
// }

// // Gọi hàm updateCart khi trang được tải
// document.addEventListener("DOMContentLoaded", updateCart);

// // Hiển thị biểu tượng giỏ hàng và kích vào sẽ mở giỏ hàng
// document.getElementById("cartIcon").addEventListener("click", function () {
//     document.getElementById("cartTableBody").scrollIntoView({ behavior: 'smooth' });
// });

// function addToCart(id, name, price, quantity) {
//     // Lấy thông tin giỏ hàng từ sessionStorage
//     var cart = JSON.parse(sessionStorage.getItem("cart")) || [];

//     // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
//     var index = cart.findIndex(item => item.id === id);
//     if (index >= 0) {
//         // Nếu sản phẩm đã tồn tại, tăng số lượng
//         cart[index].quantity = parseInt(cart[index].quantity) + parseInt(quantity);
//     } else {
//         // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
//         cart.push({
//             name: name,
//             id: id,
//             quantity: quantity,
//             price: price
//         });
//     }

//     // Lưu thông tin giỏ hàng vào sessionStorage
//     sessionStorage.setItem("cart", JSON.stringify(cart));

//     alert("Đã thêm sản phẩm vào giỏ hàng!");
//     // updateCart();
// }