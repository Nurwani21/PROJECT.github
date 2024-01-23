const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");
const checkoutButton = document.getElementById("checkoutButton"); // Added this line

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
localStorage.setItem("selectedMovieIndex", movieIndex);
localStorage.setItem("selectedMoviePrice", moviePrice);
}

// Update total and count
function updateSelectedCount() {
const selectedSeats = document.querySelectorAll(".row .seat.selected");
const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

const selectedSeatsCount = selectedSeats.length;

count.innerText = selectedSeatsCount;
total.innerText = selectedSeatsCount * ticketPrice;

setMovieData(movieSelect.selectedIndex, movieSelect.value);

// Update the button content with the total count
checkoutButton.innerText = `Checkout (${selectedSeatsCount} seats)`;
}

// Get data from local storage and populate UI
function populateUI() {
const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

if (selectedSeats !== null && selectedSeats.length > 0) {
seats.forEach((seat, index) => {
if (selectedSeats.indexOf(index) > -1) {
  seat.classList.add("selected");
}
});
}

const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

if (selectedMovieIndex !== null) {
movieSelect.selectedIndex = selectedMovieIndex;
}
}
window.addEventListener('DOMContentLoaded', (event) => {
// Movie select event
movieSelect.addEventListener("change", (e) => {
ticketPrice = +e.target.value;
setMovieData(e.target.selectedIndex, e.target.value);
updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
  console.log('Clicked on:', e.target);
  if (e.target.classList.contains("seat") && !e.target.classList.contains("sold")) {
      console.log('Toggle selected class');
      e.target.classList.toggle("selected");
      updateSelectedCount();
  }
});
});

// Checkout button click event
checkoutButton.addEventListener("click", () => {
// You can customize the payment page URL as needed
const paymentPageURL = "buy_tiket.html";

// Navigate to the payment page
window.location.href = paymentPageURL;
});

// Initial count and total set
updateSelectedCount();
