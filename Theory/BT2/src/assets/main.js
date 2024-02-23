/** @format */

const navArr = ['Hướng dẫn mua hàng', 'Bảo quản xe đạp điện', 'Phí giao hàng', 'Tư vấn chọn xe đạp'];
const nav = document.querySelector('#navbar');
let html =
	'<ul class="text-md font-semibold flex flex-col p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:justify-around lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">';

navArr.forEach((v) => {
	html += `<li><a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">${v}</a></li>`;
});
nav.innerHTML = html + '</ul>';

const btnNav = document.querySelector('#buttonNav');
btnNav.addEventListener('click', () => {
	nav.classList.toggle('hidden');
});

// SHOW category
const showSide = document.querySelectorAll('.showSide');
const handleShow = (i) => {
	showSide[i].classList.toggle('hidden');
};

// SHOW products
const products = document.querySelector('#products');
console.log(products);
html = '';
for (let i = 0; i < 6; ++i) {
	html += `<div class="p-2 basis-1/2 md:basis-1/3">
	<div class="p-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
		<a href="#">
			<img
				class="rounded-t-lg w-full"
				src="/src/assets/img/1.jpg"
				alt=""
			/>
		</a>
		<div class="mt-4">
			<h5 class="mb-2 text-xl text-center tracking-tight text-gray-900 dark:text-white line-clamp-2">Xe đạp</h5>
			<div class="mb-2 text-xl font-bold text-center tracking-tight text-gray-900 dark:text-white line-clamp-2">1.000.000 vnd</div>
		</div>
	</div>
</div>
	`;
}

products.innerHTML = html;
