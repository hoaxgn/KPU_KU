/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./application/views/**/*.{html,js,php}",
		"./node_modules/tw-elements/dist/js/**/*.js",
	],
	theme: {
		extend: {},
	},
	plugins: [require("./node_modules/tw-elements/dist/plugin")],
};
