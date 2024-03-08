/** @format */

// Nhập số từ người dùng
let number = parseInt(prompt('Nhập vào một số: '));

// Duyệt từ 1 đến 10
for (let i = 1; i <= 10; i++) {
	// Tính kết quả phép nhân
	let result = number * i;

	// In ra kết quả
	console.log(`${number} x ${i} = ${result}`);
}
