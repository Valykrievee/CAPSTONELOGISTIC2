function showDetails(id) {
    const detailsDiv = document.getElementById(id);
    if (detailsDiv.classList.contains('hidden')) {
      detailsDiv.classList.remove('hidden');
    } else {
      detailsDiv.classList.add('hidden');
    }
  }
  