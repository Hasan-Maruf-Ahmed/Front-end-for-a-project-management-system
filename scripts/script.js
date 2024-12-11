
const openModal = document.getElementById('open-modal');
const dialog = document.getElementById('dialog');

openModal.onclick = () => {
  dialog.showModal();
}

dialog.onclick = (e) => {
  const rect = dialog.getBoundingClientRect();
  const isInDialog = 
        e.clientX >= rect.left &&
        e.clientX <= rect.right &&
        e.clientY <= rect.bottom &&
        e.clientY >= rect.top;
  if(!isInDialog) {
    dialog.close();
  }
}

