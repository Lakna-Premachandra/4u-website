function navigateToLink() {
  event.preventDefault(); 
    const select = document.getElementById('more');
    const selectedOption = select.options[select.selectedIndex];
    const url = selectedOption.value;

    if (url !== 'default') {
      window.location.href = url;
    }
  }

  