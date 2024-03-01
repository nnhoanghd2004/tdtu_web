/** @format */

const card = document.getElementById('card');
let html = '';
for (let i = 0; i < 12; i++) {
	html += `<div class=" col-6 col-md-4 col-lg-3 col-xl-2 text-center d-flex justify-content-center align-items-center ">
                    
    <div class="card" style="width: 100%;">
      <img src="/avatar.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Jane Doe</h5>
        <p class="card-text">Interior Designer</p>
      </div>
    </div>
  </div>`;
}
card.innerHTML = html;

const checkValid = (e) => {
	if (e.value) {
		e.classList.add('is-valid');
		e.classList.remove('is-invalid');
	} else {
		e.classList.remove('is-valid');
		e.classList.add('is-invalid');
	}
};

const form = document.getElementById('regis');
const input = document.getElementsByTagName('input');
document.querySelector;
form.addEventListener('submit', (e) => {
	e.preventDefault();
	for (let i = 0; i <= input.length; i++) {
		if (input[i].value != 'Male' && input[i].value != 'Female' && input[i].value != 'remember') {
			console.log(input[i]);
			console.log(input[i].value != 'Male' && input[i].value != 'Female' && input[i].value != 'remember');

			// console.log(input[i].value);
			checkValid(input[i]);
		}
	}
});

for (let i = 0; i < input.length; i++) {
	if (!input[i].value) {
		input[i].addEventListener('input', (e) => {
			checkValid(e.target);
		});
	}
}
for (let i = 0; i < input.length; i++) {
	if (!input[i].value) {
		input[i].addEventListener('blur', (e) => {
			checkValid(e.target);
		});
	}
}

const card1 = document.getElementById('card1');

html = '';
for (let i = 0; i < 6; i++) {
	html += `<div
	class="col-12 col-sm-6 col-md-4"
	style="padding: 8px"
>
	<div class="border rounded card">
		<div
			style="height: 100px"
			class="bg-body-secondary"
		></div>
		<div class="p-2">
			<h2>Item One</h2>
			<div class="fw-bold">$24.99</div>
			<div>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
		</div>
		<div class="bg-body-secondary d-flex align-items-center p-3">
			<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
			><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
		</div>
	</div>
</div>`;
}
card1.innerHTML = html;
