let number = document.querySelector("#number");
let counter = 0;

const intervalId = setInterval(() => {
  if (counter == 50) {
    clearInterval(intervalId);
  } else {
    counter++;
    number.innerHTML = counter + "%";
  }
}, 20);

const openModal = document.getElementById('open-modal');
const dialog = document.getElementById('dialog');

openModal.onclick = () => {
  dialog.showModal();
}