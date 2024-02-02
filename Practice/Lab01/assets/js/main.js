/** @format */

// Table
const scheduleData = [
	[{}, {}, { title: 'Basketball', room: 'T1-NTD-2' }, {}, {}, {}, {}],
	[
		{ title: 'Discrete Structures', room: 'C311' },
		{},
		{ title: 'Practice Discrete Structures', room: 'A505' },
		{},
		{ title: 'Practice Web Programming and Applications', room: 'C406' },
		{ title: 'Requirements Analysis and Design', room: 'B203' },
		{},
	],
	[
		{ title: 'Software Engineering', room: 'B305' },
		{},
		{},
		{},
		{ title: 'Web Programming and Applications', room: 'B303' },
		{ title: 'Practice Software Engineering', room: 'A608' },
		{},
	],
	[{}, {}, {}, {}, { title: 'Scientific Socialism', room: 'B201' }, {}, {}],
];
const table = document.querySelector('#schedule');
let html = '';
for (let i = 0; i < 4; i++) {
	html += '<tr class="border-b border-gray-200">';
	html += `<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 text-center text-xl">${i + 1}</th>`;
	for (let j = 0; j < 7; j++) {
		let data = scheduleData[i][j];
		html += data.title
			? `<td class="text-center py-4 ${j % 2 ? 'bg-gray-50' : ''}">${data.title} <br>Room: ${data.room}</td>`
			: `<td class="text-center py-4 ${j % 2 ? 'bg-gray-50' : ''}"></td>`;
	}
	html += '</tr>';
}
table.innerHTML = html;

// Social Link
const socialLinkArray = [
	{
		socialLink: 'https://www.facebook.com/profile.php?id=100006475551216',
		svg: `<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"/></svg>`,
	},
	{
		socialLink: 'https://github.com/nnhoang-dev',
		svg: `<?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="48px" height="48px">    <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z"/></svg>`,
	},
];
const socialLink = document.querySelector('#socialLink');
html = '';
socialLinkArray.forEach((v, i) => {
	html += `<li ><a target="_blank" href="${v.socialLink}">${v.svg}</a></li>`;
});
socialLink.innerHTML = html;

// About
const listMemberArray = [
	{
		name: 'Jane Doe',
		role: 'CEO & Founder',
		desc: 'Resize the browser window to see that this page is responsive by the way.',
		specializes: ['Javascript', 'C/C++', 'Java'],
		img: '/assets/images/team1.jpg',
	},
	{
		name: 'Johnny Depp',
		role: 'Product Owne',
		desc: 'Some text that describes me lorem ipsum ipsum lorem.',
		specializes: ['Javascript', 'Swift', 'C/C++'],
		img: '/assets/images/team2.jpg',
	},
	{
		name: 'Luke Evans',
		role: 'Team Leader',
		desc: 'Resize the browser window to see that this page is responsive by the way.',
		specializes: ['C#', 'Vitual Basic', 'Typescript'],
		img: '/assets/images/team3.jpg',
	},
];
const listMember = document.querySelector('#listMember');

html = '';

listMemberArray.forEach((v, i) => {
	html += `<div class="max-w-sm mb-10 bg-white border border-gray-200 rounded-lg shadow lg:mb-0"><img class="rounded-t-lg" src="${v.img}"/><div class="p-5"><h5 class="text-2xl font-bold tracking-tight text-gray-900">${v.name}</h5><div class="mb-4">${v.role}</div><p class="mb-3 font-normal text-gray-700">${v.desc}</p><div class="font-semibold">Specializes in</div><ul class="max-w-md space-y-1 list-disc list-inside dark:text-gray-400">`;
	v.specializes.forEach((value) => {
		html += `<li>${value}</li>`;
	});
	html += `</ul></div></div>`;
});

listMember.innerHTML = html;
