const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})

// điều khiển active bên thanh menu
// document.addEventListener('DOMContentLoaded', function () {
//     // Lấy tham số active từ URL
//     const urlParams = new URLSearchParams(window.location.search);
//     const activeTab = urlParams.get('active');

//     // Kiểm tra xem activeTab có giá trị không và có tồn tại trong danh sách các tab không
//     if (activeTab && document.getElementById(activeTab)) {
//         // Xóa class "active" từ tất cả các tab
//         const allTabs = document.querySelectorAll('.side-menu.top li');
//         allTabs.forEach(tab => tab.classList.remove('active'));

//         // Thêm class "active" cho tab hiện tại
//         const currentTab = document.getElementById(activeTab);
//         currentTab.classList.add('active');
//     }
// });
// document.addEventListener('DOMContentLoaded', function () {
//     // ...

//     const allTabs = document.querySelectorAll('.side-menu.top li');
//     allTabs.forEach(tab => {
//         tab.addEventListener('click', function (event) {
//             event.preventDefault(); // Chặn sự kiện mặc định
//             // Xử lý thêm và xóa class "active" ở đây
//         });
//     });
// });

// điều khiển sự kiện chọn thể loại, tác giả
// $(document).ready(function () {
// 	var tagSelect = $('#tagSelect');
// 	var tagInput = $('#tagInput');

// 	// Bắt sự kiện mousedown thay vì click
// 	tagSelect.on('mousedown', 'option', function (event) {
// 		event.preventDefault();  // Ngăn chặn sự kiện mặc định (ví dụ: reload trang)

// 		var selectedOption = $(this);

// 		// Đảo ngược trạng thái đã chọn của phần tử
// 		selectedOption.prop('selected', !selectedOption.prop('selected'));

// 		// Cập nhật giá trị đầu vào
// 		updateTagInput();
// 	});

// 	// Bắt sự kiện input trên ô đầu vào
// 	tagInput.on('input', function () {
// 		var inputText = tagInput.val();
// 		var tagsArray = inputText.split(',').map(tag => tag.trim());

// 		// Lặp qua tất cả các tùy chọn và cập nhật trạng thái chọn
// 		tagSelect.find('option').each(function () {
// 			var optionValue = $(this).val();
// 			var isSelected = tagsArray.includes(optionValue);
// 			$(this).prop('selected', isSelected);
// 		});
// 	});

// 	// Hàm cập nhật giá trị đầu vào từ các tùy chọn đã chọn
// 	function updateTagInput() {
// 		var selectedTags = tagSelect.val() || [];
// 		var selectedNames = tagSelect.find('option:selected').map(function () {
// 			return $(this).text();
// 		}).get();
// 		tagInput.val(selectedNames.join(', '));
// 	}

// });


