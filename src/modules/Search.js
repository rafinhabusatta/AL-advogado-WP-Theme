import $ from 'jquery'
class Search {
  // 1. Describe and create/initiate our object
  constructor() {
    this.openButton = $('.js-search-trigger')
    this.closeButton = $('.search-overlay_close')
    this.searchOverlay = $('.search-overlay')
    this.events()
    this.isOverlayOpen = false
  }

  // 2. Events
  events() {
    //this.openButton.addEventListener('click', this.openOverlay.bind(this))
    //this.closeButton.addEventListener('click', this.closeOverlay.bind(this))

    this.openButton.on('click', this.openOverlay.bind(this))
    this.closeButton.on('click', this.closeOverlay.bind(this))
    $(document).on('keydown', this.keyPressDispatcher.bind(this))
  }

  // 3. Methods (function, action...)
  openOverlay() {
    //this.searchOverlay.classList.remove('d-none')
    $('.search-overlay').removeClass('d-none')
    $('body').addClass('body-no-scroll')
    this.isOverlayOpen = true
    alert('openOverlay')
  }

  closeOverlay() {
    this.searchOverlay.classList.add('d-none')
    //this.searchOverlay.addClass('d-none')
    $('body').removeClass('body-no-scroll')
    this.isOverlayOpen = false
  }

  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOverlayOpen) {
      this.openOverlay()
    }
    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay()
    }
  }
}

export default Search
