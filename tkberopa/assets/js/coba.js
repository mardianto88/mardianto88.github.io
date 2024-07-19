// Gallery Images Data (URLs)
const galleryImages = [
    'assets/img/gallery/1.jpeg',
    'assets/img/gallery/2.jpeg',
    'assets/img/gallery/3.jpeg',
    'assets/img/gallery/4.jpeg',
    'assets/img/gallery/5.jpeg',
    'assets/img/gallery/6.jpeg',
    'assets/img/gallery/7.jpeg',
    'assets/img/gallery/8.jpeg',
    'assets/img/gallery/9.jpeg'
  ];
  
  const itemsPerPage = 6; // Number of images per page
  let currentPage = 0;    // Current page index
  
  // Function to render gallery items for the current page
  function renderGalleryItems() {
    const startIndex = currentPage * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
  
    const galleryContainer = document.querySelector('.gallery-items');
    galleryContainer.innerHTML = '';
  
    for (let i = startIndex; i < endIndex && i < galleryImages.length; i++) {
      const imgSrc = galleryImages[i];
      const imgElement = document.createElement('img');
      imgElement.src = imgSrc;
      imgElement.classList.add('gallery-item');
      imgElement.addEventListener('click', () => openModal(imgSrc));
      galleryContainer.appendChild(imgElement);
    }
  }
  
  // Function to handle previous page button click
  document.querySelector('.prev-btn').addEventListener('click', () => {
    if (currentPage > 0) {
      currentPage--;
      renderGalleryItems();
    }
  });
  
  // Function to handle next page button click
  document.querySelector('.next-btn').addEventListener('click', () => {
    const maxPage = Math.ceil(galleryImages.length / itemsPerPage) - 1;
    if (currentPage < maxPage) {
      currentPage++;
      renderGalleryItems();
    }
  });
  
  // Function to open modal with clicked image
  function openModal(imgSrc) {
    const modal = document.getElementById('galleryModal');
    const modalImg = document.getElementById('modalImg');
  
    modal.style.display = 'block';
    modalImg.src = imgSrc;
  
    const span = document.getElementsByClassName('close')[0];
    span.onclick = function() {
      modal.style.display = 'none';
    };
  
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };
  }
  
  // Initialize gallery on page load
  window.onload = function() {
    renderGalleryItems();
  };
  