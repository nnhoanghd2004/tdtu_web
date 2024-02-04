/** @format */

const navArr = ['Home', 'About', 'Products', 'Guarantee', 'Advise', 'Promotion', 'Contact'];
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
for (let i = 0; i < 9; ++i) {
	html += `<div class="p-2 basis-1/2 md:basis-1/3">
	<div class="  max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
	<a href="#">
	<img
	class="rounded-t-lg"
	src="https://scontent.fsgn2-8.fna.fbcdn.net/v/t39.30808-6/399862577_4391509687741506_4961352823905162984_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=4oo3aUBHrX8AX-iYd7j&_nc_ht=scontent.fsgn2-8.fna&oh=00_AfA1avRkDLLz7nfk0qoQo5V8tSJBMUT1JnzvjpwH1iBRng&oe=65C3AC99"
	alt=""
	/>
	</a>
	<div class="p-5">
	<h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">Áo thun</h5>
	<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
	Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
	</p>
	<div class="flex flex-col text-xs">
	<a
	href="#"
	class="mb-2 w-full h-10 px-3 py-2 text-center text-white bg-black rounded-lg hover:bg-black/80 focus:ring-4 focus:outline-none focus:ring-black/30 dark:bg-black/60 dark:hover:bg-black/70 dark:focus:ring-black/80"
	>
	Add to cart
	</a>
	<a
	href="#"
	class="w-full h-10 px-3 py-2 text-center text-white bg-black rounded-lg hover:bg-black/80 focus:ring-4 focus:outline-none focus:ring-black/30 dark:bg-black/60 dark:hover:bg-black/70 dark:focus:ring-black/80"
	>
	Detail
	</a>
	</div>
	</div>
	</div>
	</div>
	`;
}

products.innerHTML = html;
