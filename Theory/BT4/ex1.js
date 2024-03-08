/** @format */

function tinhToan(a, b, dau) {
	let ketQua;
	switch (dau) {
		case '+':
			ketQua = a + b;
			break;
		case '-':
			ketQua = a - b;
			break;
		case '*':
			ketQua = a * b;
			break;
		case '/':
			ketQua = a / b;
			break;
		case '%':
			ketQua = a % b;
			break;
		default:
			ketQua = 'Dấu toán không hợp lệ';
	}
	return ketQua;
}

console.log(tinhToan(5, 2, '+'));
console.log(tinhToan(10, 3, '-'));
console.log(tinhToan(4, 2, '*'));
console.log(tinhToan(10, 2, '/'));
console.log(tinhToan(10, 3, '%'));
console.log(tinhToan(10, 2, 'x'));
