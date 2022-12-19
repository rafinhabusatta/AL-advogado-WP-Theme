class Search {
  // 1. Describe and create/initiate our object
  constructor() {
    this.openButton = document.querySelector('.js-search-trigger')
    this.closeButton = document.querySelector('.search-overlay_close')
    this.searchOverlay = document.querySelector('.search-overlay')
    this.events()
  }

  // 2. Events
  events() {
    this.openButton.addEventListener('click', this.openOverlay)
    this.closeButton.addEventListener('click', this.closeOverlay)
  }

  // 3. Methods (function, action...)
  openOverlay() {
    this.searchOverlay.classList.remove('d-none')
  }

  closeOverlay() {
    this.searchOverlay.classList.add('d-none')
  }
}

export default Search
